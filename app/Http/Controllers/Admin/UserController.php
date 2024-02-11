<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::all();
        // dd($users);
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        //
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('messaage', 'Role exists');
        }

        $user->assignRole($request->role);
        return back()->with('messaage', 'Role assigned ');
    }



    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('messaage', 'Role removed');
        }

        return back()->with('messaage', 'Role does not exist');
    }


    public function destroy(User $user)
    {
        // Delete the user's image file if it exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('message', 'User deleted successfully');
    }


    public function assignPermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('messaage', 'Permission exists');
        }

        $user->givePermissionTo($request->permission);
        return back()->with('messaage', 'Role assigned ');
    }


    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('messaage', 'Permission removed');
        }

        return back()->with('messaage', 'Permission does not exist');
    }
}
