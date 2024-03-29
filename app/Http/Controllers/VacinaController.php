<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacina;
class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cadastrarvacina');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      // return Vacina::create([
      //   'nomevacina'  =>$request['nomevacina'],
      //   'dose'        =>$request['dose'],
      //   'data'      =>$request['data'],
      // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vacina $vacina)
    {
        $vacina = new Vacina;
        $vacina->nomevacina = $request->nomevacina;
        $vacina->dose       = $request->dose;
        $vacina->data       = $request->data;
        $vacina->save();
        return redirect()->route('user.cadastrarvacina')->with('msg', 'Vacina cadastrada com sucesso !');
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
