<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\Nivel;
use App\Models\Desenvolvedores;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class DesenvolvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
          
       $Desenvolvedores = Desenvolvedores::all();
        return response()->json($Desenvolvedores);
        
    }

    /**
     * Store a newly created resource in storage.
     *@param   Desenvolvedores $Desenvolvedores
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Desenvolvedores $Desenvolvedores,Request $request)
    {
        try {
            
            $Desenvolvedores = $Desenvolvedores->fill($request->only('Nome','Nivel'));
            $Desenvolvedores->save();
            
            return response()->json('Desenvolvedor Adicionado com sucesso!',200);
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
        
        $Desenvolvedores = Desenvolvedores::find($id);
        return response()->json($Desenvolvedores);
    }

    /**
     * Update the specified resource in storage.
     **@param   Desenvolvedores $Desenvolvedores
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        try{       
            $Desenvolvedores = Desenvolvedores::findOrFail($id);
            $Desenvolvedores = $Desenvolvedores->fill($request->all()); 
            $Desenvolvedores->update();
            return response()->json('Desenvolvedor Atualizado com sucesso!',200);
             }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }    
    }




    

    /**
     * Remove the specified resource from storage.
     * @param    Desenvolvedores $ Desenvolvedores
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Desenvolvedores::destroy($id);
            return response()->json('Desenvolvedor removida com sucesso!',200);
            }catch (\Throwable $th) {
                return response()->json('Tivemos um problema!',500);
            }    
    }
    
           
}