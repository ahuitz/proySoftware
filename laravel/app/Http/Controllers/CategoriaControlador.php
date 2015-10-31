<?php
//@$nombre = $_POST['nombre'];

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria as Categoria;

class CategoriaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create($nombre)
    {
       $categoria = Categoria::create(['nombre' => $nombre]);     
=======

    public function create($nombre)
    {
       $categoria = Categoria::create(['nombre' => $nombre]);    
    } 

    public function iniciar()
    {
        return view('index');

>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
<<<<<<< HEAD
        
=======
        $cat=Categoria::where('nombre',$nombre)->get();
        foreach ($cat as $cat) {
            print_r($cat->nombre);
        }   
>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$nombre)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $nombre;
        $categoria->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcategoria)
    {
        Categoria::destroy($idcategoria);
    }
}
