<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        $titulo = "Lista de usuarios";
        return view('users.index',compact('users', 'titulo'));
    }

    public function show(User $user){

      //  $user = User::findOrFail($id);

        /*if ($user == null) {
            return response()->view('error.404', [], 404);
        }*/

        return view('users.show', compact('user')); 
    }

    public function create(){

        return view('users.form'); 
    }

    public function store(){

        $datos = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:8',
        ]);

        User::create([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'password' => bcrypt($datos['password'])
        ]);

        return redirect()->route('users');
    }

    public function edit(User $user){

        //$user = User::find($id);
        
        return view('users.edit', compact('user'));
    }

    public function update(User $user){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => '',
        ]);

        if($data['password'] != null){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        
        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    public function destroy(User $user){

      $user->delete();

      return redirect()->route('users');
    }

}
