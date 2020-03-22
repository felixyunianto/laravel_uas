<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('pages.user.index', compact('users'));
    }

    public function create(){
        $roles = Role::all();
        return view('pages.user.create',compact('roles'));
    }

    public function store(Request $request){
        $rule = [
            'name' => 'required|min:5|string',
            'username' => 'required|min:6|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role_id' => 'required'
        ];
        $message = [
            'email' => 'Masukan email dengan benar.',
            'unique' => ':attribute sudah terdaftar',
            'confirmed'=> 'password tidak sama'
        ];

        $this->validate($request, $rule, $message);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id
        ]);

        return redirect()->route('user.index')->with('success','Data has been created!');
    }

    public function edit($user){
        $users = User::findOrFail($user);
        return view('pages.user.edit',compact('users'));
    }

    public function update(Request $request, $user){
        $users = User::find($user);
        if(empty($request->password)){
            $users->update([
                'name' => $request->name,
                'username' =>$request->username,
                'email' => $request->email,
            ]);
        }else{
            $users->update([
                'name' => $request->name,
                'username' =>$request->username,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        }

        return redirect()->route('user.index')->with('success','Data has been updated!');
    }

    public function destroy($user){
        $users = User::findOrFail($user);
        $users->delete();

        return redirect()->route('user.index')->with('success','Data has been deleted!');
    }


}
