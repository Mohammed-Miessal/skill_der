<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::whereNotIn('name', ['Admin'])->get();
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
        return view('admin.roles.edit', compact('role'));
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
}
