<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PortfolioController extends Controller
{
    private $portfolio;

    public function __construct(Portfolio $portfolio)
    {
        $this->middleware(['permission:read-portfolios'])->only('index', 'show');
        $this->middleware(['permission:create-portfolios'])->only('create', 'store');
        $this->middleware(['permission:update-portfolios'])->only('edit', 'update');
        $this->middleware(['permission:delete-portfolios'])->only('destroy');
        $this->portfolio = $portfolio;
    }
    public function index()
    {
        try {
            $portfolios = $this->portfolio->latest('id')->get();
            return view('admin.portfolios.index', compact('portfolios'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(PortfolioRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image', 'files']);
            $portfolio = $this->portfolio->create($requested_data);
            $portfolio->uploadFile();
            $portfolio->uploadFiles();

            return redirect()->route('portfolios.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Portfolio $portfolio)
    {
        try {
            $files = $portfolio->files()->where('type', '!=', 'image')->get();
            return view('admin.portfolios.show', compact('portfolio', 'files'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit(Portfolio $portfolio)
    {
        try {
            $files = $portfolio->files()->where('type', '!=', 'image')->get();
            return view('admin.portfolios.edit', compact('portfolio', 'files'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image', 'files', 'deleted_files']);
            $requested_data['updated_at'] = Carbon::now();
            $portfolio->update($requested_data);

            $portfolio->updateFile();
            $portfolio->updateFiles();

            return redirect()->route('portfolios.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Portfolio $portfolio)
    {
        try {
            $portfolio->deleteFiles();
            $portfolio->delete();
            return redirect()->route('portfolios.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
