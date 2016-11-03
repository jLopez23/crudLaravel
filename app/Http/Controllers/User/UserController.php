<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Validator;
class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::all();

        foreach ($users as $user) {
            $active = $user->active;
            if ($active == 1) {
                $active = 'Activo';
            } else {
                $active = 'Inactivo';
            }
            $user->active = $active;
        }
        return view('user.user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->active = $request->active;
        $user->save();
        
        Session::flash('message', 'Usuario creado satisfactoriamente!');
        return redirect('users');
        // ->withInput($request->only('name','email'));
    }

    /**
     * Display the specified resource.
     * Details user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
            'active' => 'required|min:1'
        );
        
        $validator = Validator::make($request->all(), $rules);

        // process the login
        
        if ($validator->fails()) {
            return redirect('users')
                ->withErrors($validator);
        } else {
            // store
            $user = User::find($id);
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = bcrypt($request->password);
            $user->active   = $request->active;
            $user->save();

            // redirect
            Session::flash('message', 'Usuario modificado satisfactoriamente!');
            return redirect('users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        // delete
        $user = User::find($id);
        $user->delete();
        
        // redirect
        Session::flash('message', 'Usuario eliminado satisfactoriamente!');
        return redirect('users');
    }

}
