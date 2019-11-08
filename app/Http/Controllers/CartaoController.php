<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Cartao;
class CartaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cartao.emitircartao');
    }

    public function consultar()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartao = Cartao::all();
        return view('cartao.form_cartao', compact('cartao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return Cartao::create([
        'i_nome'          =>$request['i_nome'],
        'i_sobrenome'     =>$request['i_sobrenome'],
        'i_cpf'           =>$request['i_cpf'],
        'i_data'          =>$request['i_data'],
        'i_fone'          =>$request['i_fone'],
        'i_cidade'        =>$request['i_cidade'],
        'i_estado'        =>$request['i_estado'],
      ]);
      return view('sucesso');
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
