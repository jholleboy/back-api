<?php

namespace App\Http\Controllers;
use App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Nivel = Nivel::all();
        return response()->json($Nivel);
        
    }

    /**
     * Store a newly created resource in storage.
     *@param   Nivel $Nivel
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Nivel $Nivel,Request $request)
    {
        try {
            
            $Nivel = $Nivel->fill($request->only('Nome','Nivel'));
            $Nivel->save();
            
            return response()->json('Nivel Adicionado com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Nivel = Nivel::find($id);
        return response()->json($Nivel);
    }

    /**
     * Update the specified resource in storage.
     **@param   Nivel $Nivel
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        try{       
            $Nivel = Nivel::findOrFail($id);
            $Nivel = $Nivel->fill($request->all()); 
            $Nivel->update();
            return response()->json('Nivel Atualizado com sucesso!',200);
             }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }    
    }




    

    /**
     * Remove the specified resource from storage.
     * @param    Nivel $Nivel
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Nivel::destroy($id);
            return response()->json('Nivel removido com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }    
    }
    
           
}