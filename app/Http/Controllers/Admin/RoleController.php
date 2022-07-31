<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    public function index()
    {
        return view("admin.roles.index")->with(['roles' => Role::all()]);
    }

    public function create()
    {
        $permissions = Permission::hierarchy()->get();
        return view("admin.roles.create")->with([ "permissions" => $permissions ]);
    }

    public function store(StoreRequest $request)
    {
        $role = Role::query()->create(
            [
                'label'       => $request->label,
                'description' => $request->description,
            ]
        );
        $role->permissions()->attach($request->permissions);

        Session::flash('message', 'نقش با موفقیت اضافه شد!');
        return redirect()->route('admin.roles.index');
    }


    public function edit(Role $role)
    {
        $permissions = Permission::hierarchy()->get();
        return view("admin.roles.edit")
            ->with(['role' => $role])
            ->with(['permissions' => $permissions]);
    }

    public function update(UpdateRequest $request, Role $role)
    {
        $role->update(
            [
                'label'       => $request->label,
                'description' => $request->description,
            ]
        );
        $role->permissions()->sync($request->permissions);

        Session::flash('message', 'نقش با موفقیت تغییر کرد!');
        return redirect()->back();
    }

    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();
        return redirect()->back();
    }
}
