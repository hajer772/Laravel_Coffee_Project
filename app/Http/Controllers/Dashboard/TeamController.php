<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TeamController extends Controller
{
    private $team;

    public function __construct(Team $team)
    {
        $this->middleware(['permission:read-teams'])->only('index', 'show');
        $this->middleware(['permission:create-teams'])->only('create', 'store');
        $this->middleware(['permission:update-teams'])->only('edit', 'update');
        $this->middleware(['permission:delete-teams'])->only('destroy');
        $this->team = $team;
    }

    public function index()
    {
        try {
            $teams = $this->team->latest('id')->get();
            return view('admin.teams.index', compact('teams'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(TeamRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $team = $this->team->create($requested_data);
            $team->uploadFile();

            return redirect()->route('teams.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Team $team)
    {
        return view('admin.teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(TeamRequest $request, Team $team)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $team->update($requested_data);

            $team->updateFile();

            return redirect()->route('teams.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Team $team)
    {
        try {
            $team->deleteFile();
            $team->delete();
            return redirect()->route('teams.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
