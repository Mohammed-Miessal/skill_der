<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    // ---------------------- Role Management ----------------------------- //

    public function showRole(User $user)
    {
        //
        $roles = Role::all();
        return view('admin.users.role', compact('user', 'roles'));
    }


    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return redirect()->route('admin.users.index')->with('message', 'Role exists');
        }

        $user->assignRole($request->role);
        return redirect()->route('admin.users.index')->with('message', 'Role assigned');
    }



    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return redirect()->route('admin.users.index')->with('message', 'Role removed');
        }

        return redirect()->route('admin.users.index')->withErrors(['message' => 'Role does not exist']);
    }



    // ---------------------- / Role Management ----------------------------- //



    // ---------------------- Permission Management ----------------------------- //

    public function showPermission(User $user)
    {
        $permissions = Permission::all();
        return view('admin.users.permission', compact('user',  'permissions'));
    }


    public function assignPermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return redirect()->route('admin.users.index')->with('messaage', 'Permission exists');
        }

        $user->givePermissionTo($request->permission);
        return redirect()->route('admin.users.index')->with('messaage', 'Permission assigned ');
    }


    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return redirect()->route('admin.users.index')->with('messaage', 'Permission removed');
        }

        return redirect()->route('admin.users.index')->with('messaage', 'Permission does not exist');
    }


    // ---------------------- / Permission Management ----------------------------- //
}
