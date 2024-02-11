<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    //
    public function index()
    {
        // $roles = Role::all();
        $roles = Role::whereNotIn('name', ['Admin'])->get();

        // dd($roles);
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|string'
        ]);

        Role::create($validated);

        return redirect()->route('admin.roles.index')->with('message', 'Role created successfully');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        // $role = Role::find($id);
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|string'
        ]);

        $role->update($validated);

        return redirect()->route('admin.roles.index')->with('message', 'Role updated successfully');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('message', 'Role deleted successfully');
    }


    public function givePermission(Request $request, Role $role)
    {
        if ($role->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists');
        }
        $role->givePermissionTo($request->permission);
        return redirect()->route('admin.roles.index')->with('message', 'Permission added successfully');
    }


    public function revokePermission(Role $role,  Permission $permission)
    {

        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked successfully');
        }

        return back()->with('message', 'Permission not exists');
    }
}
