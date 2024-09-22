<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    private $product;
    private $category;

    public function __construct(Product $product, Category $category)
    {
        $this->middleware(['permission:read-products'])->only('index', 'show');
        $this->middleware(['permission:create-products'])->only('create', 'store');
        $this->middleware(['permission:update-products'])->only('edit', 'update');
        $this->middleware(['permission:delete-products'])->only('destroy');
        $this->product = $product;
        $this->category = $category;
    }

    public function index()
    {
        try {
            $products = $this->product->latest('id')->get();
            return view('admin.products.index', compact('products'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        try {
            $categories = $this->category->active()->latest('id')->get();
            return view('admin.products.create', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function store(ProductRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image', 'files']);
            $product = $this->product->create($requested_data);
            $product->uploadFile();
            $product->uploadFiles();

            return redirect()->route('products.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Product $product)
    {
        try {
            $files = $product->files()->where('type', '!=', 'image')->get();
            return view('admin.products.show', compact('product', 'files'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit(Product $product)
    {
        try {
            $files = $product->files()->where('type', '!=', 'image')->get();
            $categories = $this->category->latest('id')->get();
            return view('admin.products.edit', compact('product', 'files', 'categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function update(ProductRequest $request, Product $product)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image', 'files', 'deleted_files']);
            $requested_data['updated_at'] = Carbon::now();
            $product->update($requested_data);

            $product->updateFile();
            $product->updateFiles();

            return redirect()->route('products.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->deleteFiles();
            $product->delete();
            return redirect()->route('products.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
