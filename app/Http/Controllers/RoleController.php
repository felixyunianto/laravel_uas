<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();

        return view('pages.role.index', compact('roles'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'role_name' => 'required|min:3'
        ]);

        $roles = Role::create([
            'role_name' => $request->role_name
        ]);

        return redirect()->route('role.index')->with('success','Data has been created!');
    }

    public function destroy($role){
        $roles = Role::findOrFail($role);
        $roles->delete();

        return redirect()->route('role.index')->with('success','Data has been deleted!');
    }

    public function edit($role){
        $roles = Role::find($role);
        return view('pages.role.edit', compact('roles'));
    }

    public function update(Request $request, $role){
        $this->validate($request,[
            'role_name' => 'required|min:3'
        ]);

        $roles = Role::findOrFail($role);
        $roles->update([
            'role_name' =>$request->role_name
        ]);

        return redirect()->route('role.index')->with('success','Data has been updated!');
    }
}
