<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda=trim($request->get('busqueda'));
        $clientes = DB::table('clientes')
                        ->where('cedula','like','%'.$busqueda.'%')
                        ->orwhere('nombre','like','%'.$busqueda.'%')
                        ->orwhere('correo','like','%'.$busqueda.'%')
                        ->paginate(10);
        return view('admin.clientes.index', compact('clientes', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes=new cliente;
        $clientes->cedula=$request->input('cedula');
        $clientes->nombre=$request->input('nombre');
        $clientes->telefono=$request->input('telefono');
        $clientes->correo=$request->input('correo');
        $clientes->direccion=$request->input('direccion');
        $clientes->nacimiento=$request->input('nacimiento');
        $clientes->save();
        return redirect()->back();


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clientes=cliente::find($id);
        $clientes->cedula=$request->input('cedula');
        $clientes->nombre=$request->input('nombre');
        $clientes->telefono=$request->input('telefono');
        $clientes->correo=$request->input('correo');
        $clientes->direccion=$request->input('direccion');
        $clientes->nacimiento=$request->input('nacimiento');
        $clientes->timestamps();
        $clientes->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
