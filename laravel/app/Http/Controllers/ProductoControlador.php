<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto as Producto;
<<<<<<< HEAD

/*@$precio = $_POST['precio'];
@$presentacion = $_POST['descripcion'];
@$idcategoria = $_POST['idcategoria'];
@$idpresentacion = $_POST['idpresentacion'];*/
=======
use APP\Categoria as Categoria;
>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c


class ProductoControlador extends Controller
{
<<<<<<< HEAD

   /* public function _construct(){

        $this->beforeFilter('csrf', [
            'on' => ['post']    
            ]);
    }*/
=======
>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create(Request $request)


    {
        $producto = new Producto;
       $producto->create($request->all());
        // nombre','precio','descripcion','presentacion','idcategoria','idpresentacion'];
       /* $nombre = 'imperial';
        $precio = '12';
        $descripcion = 'cera a prueba de agua';
        $idcategoria = '1';
        $idpresentacion = '2';*/
        
       /*  $producto = Producto::create(['nombre' => $nombre, 
                                    'precio' => $precio,
                                    'descripcion' => $descripcion, 
                                    'idcategoria' => $idcategoria,
                                    'idpresentacion' => $idpresentacion]);     */

      //  return  View('register');
=======
    public function create()
    {
        // nombre','precio','descripcion','presentacion','idcategoria','idpresentacion'];
        $nombre = 'imperial';
        $precio = '12';
        $descripcion = 'cera a prueba de agua';
        $idcategoria = '3';
        $idpresentacion = '5';
        
         $producto = Producto::create(['nombre' => $nombre, 
                                    'precio' => $precio,
                                    'descripcion' => $descripcion, 
                                    'idcategoria' => $idcategoria,
                                    'idpresentacion' => $idpresentacion]);     
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
<<<<<<< HEAD
        dd(input::all());
=======
        //
>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($id)
    {
        //
=======
    public function show($nombre)
    {
//        $pro=Producto::where('nombre',$nombre)->join(Categoria, 'Producto.idproducto','=','Categoria.idcategoria')->get();
        $pro=Producto::where('nombre',$nombre)->get();
        foreach ($pro as $pro) {
            print_r($pro->nombre. '  ');
            print_r($pro->precio. '  ');
            print_r($pro->descripcion);
            //print_r($pro->Categoria.nombre);
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
        $producto = Producto::find($id);
            $producto->nombre = $nombre; 
            $producto->precio = $precio;
            $producto->descripcion = $descripcion; 
            $producto->idcategoria = $idcategoria;
            $producto->idpresentacion = $idpresentacion;
            $producto->save();     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
    }
}
