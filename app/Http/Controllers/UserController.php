<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{

    public function authenticate(Request $request)
    {
      $credentials = $request->only('email','password');

      if(Auth::attempt($credentials))
      {

        return view('dashboard');
      }
      else {
        return redirect()->back()->with('msg','Credenciais Invalidas');
      }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function resetpassword(){
      return view('user.esqueciminhasenha');
    }

    public function perfil(){
        return view('perfil');
    }

    public function cadastravacina(){
        return view('cadastrarvacina');
    }

    public function consultarhistorico(){
        return view('consultarhistorico');
    }

    public function emitircartao(){
        return view('emitircartao');
    }

    public function sair(){
        return view('index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return User::create([
          'name'        =>$request['name'],
          'lastname'    =>$request['lastname'],
          'birth'       =>$request['birth'],
          'fone'        =>$request['fone'],
          'city'        =>$request['city'],
          'uf'          =>$request['uf'],
          'sexo'        =>$request['sexo'],
          'cpf'         =>$request['cpf'],
          'email'       =>$request['email'],
          'password'    =>bcrypt($request['password']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
