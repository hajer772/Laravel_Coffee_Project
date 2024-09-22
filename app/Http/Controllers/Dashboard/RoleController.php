<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RoleController extends Controller
{
    private $role;

    public function __construct(Role $role)
    {
        $this->middleware(['permission:read-roles'])->only('index','show');
        $this->middleware(['permission:create-roles'])->only('create','store');
        $this->middleware(['permission:update-roles'])->only('edit','update');
        $this->middleware(['permission:delete-roles'])->only('destroy');
        $this->role = $role;
    }

    public function index()
    {
        try {
            $roles =  $this->role->latest('id')->get();
            return view('admin.roles.index', compact('roles'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(RoleRequest $request)
    {
        try {
            //create role
            $request_data = $request->except(['_token', 'permissions']);
            $request_data['created_by'] = auth('admin')->user()->email;
            $role =  $this->role->create($request_data);
            $role->attachPermissions($request->permissions);

            return redirect()->route('roles.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show($id)
    {
        try {
            $role =  $this->role->find($id);
            return view('admin.roles.show', compact('role'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit($id)
    {
        try {
            $role =  $this->role->find($id);
            return view('admin.roles.edit', compact('role'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function update(RoleRequest $request, $id)
    {
        try {
            $role =  $this->role->find($id);
            if ($role->is_super == 1)
                return redirect()->back()->with(['error' => __('message.error_admin_role_update')]);
            $request_data = $request->except(['_token', 'permissions']);
            $request_data['updated_by'] = auth('admin')->user()->email;
            $requested_data['updated_at'] = Carbon::now();
            //update role
            $role->update($request_data);
            $role->syncPermissions($request->permissions); //update role permassion
            return redirect()->route('roles.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy($id)
    {
        try {
            $role =  $this->role->find($id);
            if ($role->is_super == 1)
                return redirect()->back()->with(['error' => __('message.error_admin_role_delete')]);

            $role->delete();
            return redirect()->route('roles.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
