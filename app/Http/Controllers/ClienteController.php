<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\File;
use Faker\Guesser\Name;
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
                        ->orwhere('poliza','like','%'.$busqueda.'%')
                        ->orwhere('nombre','like','%'.$busqueda.'%')
                        ->orwhere('apellido','like','%'.$busqueda.'%')
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
        $clienteid = $clientes=new cliente;
        $clientes->cedula=$request->input('cedula');
        $clientes->nacionalidad=$request->input('nacionalidad');
        $clientes->poliza=$request->input('poliza');
        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
        $clientes->telefono=$request->input('telefono');
        $clientes->correo=$request->input('correo');
        $clientes->direccion=$request->input('direccion');
        $clientes->nacimiento=$request->input('nacimiento');
        $clientes->save();

        //$cliente_id = $clienteid->id;
        $max_size = (int)ini_get('upload_max_filesize') * 10240;

        $files = $request->file('files');

        foreach ($files as $file) {
            File::create([
                'name' => $file->getClientOriginalName(),
                'cliente_id' => $clienteid->id
            ]);
        }
        //dd($files);*/
        return redirect()->back();
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
        $clientes->nacionalidad=$request->select('nacionalidad');
        $clientes->poliza=$request->input('poliza');
        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
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
