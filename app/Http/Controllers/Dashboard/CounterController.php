<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CounterRequest;
use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class CounterController extends Controller
{
    private $counter;

    public function __construct(Counter $counter)
    {
        $this->middleware(['permission:read-counters'])->only('index', 'show');
        $this->middleware(['permission:create-counters'])->only('create', 'store');
        $this->middleware(['permission:update-counters'])->only('edit', 'update');
        $this->middleware(['permission:delete-counters'])->only('destroy');
        $this->counter = $counter;
    }

    public function index()
    {
        try {
            $counters = $this->counter->latest('id')->get();
            return view('admin.counters.index', compact('counters'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.counters.create');
    }

    public function store(CounterRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $counter = $this->counter->create($requested_data);
            // $counter->uploadFile();


            return redirect()->route('counters.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Counter $counter)
    {
        return view('admin.counters.show', compact('counter'));
    }

    public function edit(Counter $counter)
    {
        return view('admin.counters.edit', compact('counter'));
    }

    public function update(CounterRequest $request, Counter $counter)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $requested_data['updated_at'] = Carbon::now();
            $counter->update($requested_data);
            // $counter->updateFile();

            return redirect()->route('counters.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Counter $counter)
    {
        try {
            // $counter->deleteFile();
            $counter->delete();
            return redirect()->route('counters.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
