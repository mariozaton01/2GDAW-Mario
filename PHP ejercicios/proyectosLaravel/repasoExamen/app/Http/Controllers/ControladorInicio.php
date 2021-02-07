<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControladorInicio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaProyectos=DB::select("select * from projects");
        return view("inicio")->with("listaProyectos",$listaProyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repetido= DB::select("select * from projects where titulo=? or url=?", [$request->titulo , $request->url]);
        if ($repetido!= null){
            $error=" Ya existe un proyecto con estos datos.";
            return view("inicio")->with("error",$error);
        }
        else{
            $request->validate([
                "titulo"=>"required"
            ]);
            DB::table("projects")->insert([
                "titulo"=>$request->titulo,
                "descripcion"=>$request->descrip,
                "url"=>$request->url
            ]);
            return redirect()->route("inicio");
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
        $datos= DB::select("select * from projects where id=?", [$id]);
        return view("detalleProyecto")->with("datos",$datos);

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
    public function destroy()
    {
        DB::delete("delete from projects");
        return view("inicio");
    }
}
