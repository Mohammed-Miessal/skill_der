<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);

        Permission::create($validated);

        return redirect()->route('admin.permissions.index')->with('message', 'Permission created successfully');
    }

    public function edit(Permission $permission)
    {
        // $role = Role::find($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|string'
        ]);

        $permission->update($validated);

        return redirect()->route('admin.permissions.index')->with('message', 'Permission updated successfully');;
    }


    public function destroy(Permission $permission){
        $permission->delete();
        return redirect()->route('admin.permissions.index')->with('message', 'Permission deleted successfully');
    }

}