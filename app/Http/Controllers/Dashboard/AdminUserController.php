<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private $admin;
    private $role;

    public function __construct(Admin $admin, Role $role)
    {
        $this->middleware(['permission:read-admins'])->only('index','show');
        $this->middleware(['permission:create-admins'])->only('create','store');
        $this->middleware(['permission:update-admins'])->only('edit','update');
        $this->middleware(['permission:delete-admins'])->only('destroy');
        $this->middleware(['permission:updateProfile-admins'])->only('updateProfile');
        $this->admin = $admin;
        $this->role = $role;
    }

    public function index()
    {
        try {
            $users =  $this->admin->latest('id')->get();
            return view('admin.users.index', compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show($id)
    {
        try {
            $user =  $this->admin->find($id);
            return view('admin.users.show', compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        try {
            $roles = $this->role->latest('id')->get();
            return view('admin.users.create', compact('roles'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function store(AdminRequest $request)
    {
        try {
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);
            $request_data = $request->except(['_token','password_confirmation','role_id']);
            $request_data['created_by'] = auth('admin')->user()->email;
            $admin =  $this->admin->create($request_data);
            $admin->attachRole($request->role_id);
            return redirect()->route('admin-users.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function edit($id)
    {
        try {
            $roles = $this->role->latest('id')->get();
            $user =  $this->admin->find($id);
            return view('admin.users.edit', compact('user', 'roles'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function update(AdminRequest $request, $id)
    {
        try {
            $show_user =  $this->admin->find($id);
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            $request_data = $request->except(['_token', 'password', 'password_confirmation','role_id']);
            $request_data['updated_by'] = auth('admin')->user()->email;
            if ($request->has('password')) {
                $request_data['password'] = $request->password;
            }
            $show_user->update($request_data);
            $show_user->syncRoles([$request->role_id]);
            return redirect()->route('admin-users.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function destroy($id)
    {
        try {
            $admin_user =  $this->admin->find($id);
            $user = Auth::guard('admin')->id();
            if ($user == $admin_user->id) {
                return redirect()->back()->with('error', __('message.active_session'));
            }
            $admin_user->delete();
            return redirect()->route('admin-users.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }

    }

    public function profile()
    {
        try {
            $profile =  auth('admin')->user();
            return view('admin.users.profile', compact('profile'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function updateProfile(ProfileRequest $request, $id)
    {
        try {
            $show_user =  $this->admin->find($id);

            $request_data = $request->except(['_token','email', 'password', 'password_confirmation','image','profile_avatar_remove']);
            $request_data['updated_by'] = auth('admin')->user()->email;
            if ($request->has('password')) {
                $request_data['password'] = $request->password;
            }
            $get_file = $show_user->file()->first();
            if (! empty($get_file))
                $show_user->updateFile();
            else
                $show_user->uploadFile();

            $show_user->update($request_data);

            return redirect()->back()->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

}
