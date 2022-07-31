<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{

    public function index()
    {
        $users = User::admins()->get();
        return view("admin.roles.users.index")->with(['users' => $users]);
    }


    public function edit(User $user)
    {
        $roles = Role::all();
        return view("admin.roles.users.edit")->with([
            'user'       => $user,
            'roles'      => $roles
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->roles()->sync($request->roles);
        Session::flash('message', 'نقش  کاربر با موفقیت تغییر کرد!');
        return redirect()->back();
    }
}
