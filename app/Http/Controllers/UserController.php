<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
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
        $foo = \DB::table('users')->where('email', $credentials['email'])->first();
        return view('dashboard', ['teste' => $foo]);
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
        return view('user.perfil');
    }


    public function sair(){
        return view('index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, User $user)
    {
          $user = new User;
          $user->name     =$request->name;        
          $user->lastname =$request->lastname;    
          $user->birth    =$request->birth;      
          $user->fone     =$request->fone;        
          $user->city     =$request->city;        
          $user->uf       =$request->uf;          
          $user->sexo     =$request->sexo;        
          $user->cpf      =$request->cpf;       
          $user->email    =$request->email;      
          $user->password =Hash::make($request->password);
          $user->save();
          return redirect()->route('create')->with('msg1','Usuário cadastrado com sucesso !');    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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
