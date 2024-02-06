<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modulo_1.auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        var_dump($request->all());
        if(Auth::attempt([ 'email' =>  $request->input("email"),
            'password' => $request->input('password')])){
            return redirect('/');
        }else{
            return redirect('/login/create')->with("mensaje" , "Usuario no reconocido");;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    //logout
    public function logout(){
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect('/login/create');
    }
}
