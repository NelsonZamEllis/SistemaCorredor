@extends('layouts.admin')

@section('content')
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form action="{{route('clientes.index')}}" method="GET">
              <div class="form-row">
                <div class="col-md-4 my-1">
                  <input type="text" class="form-control" name="busqueda" value="{{$busqueda}}">
                </div>
                <div class="col-auto my-1" >
                  <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Clientes</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" >
                  <thead>
                    <tr>
                      <th>Ácciones</th>
                      <th>Nro</th>
                      <th>Cédula</th>
                      <th>Nacionalidad</th>
                      <th>N° Poliza</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Teléfono</th>
                      <th>Correo</th>
                      <th>Dirección</th>
                      <th>F. Nacimiento</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($clientes as $cliente)
                      <tr>
                          <td class="row">
                            <div class="col">      
                            <form action="{{route("clientes.edit", $cliente->id)}}" method="GET">
                              <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button> 
                            </form> 
                          </div>

                          <div class="col">
                            <form action="{{route("clientes.edit", $cliente->id)}}" method="GET">
                              <button class="btn btn-warning m"><i class="fa-solid fa-pen-to-square"></i></button> 
                            </form>
                          </div>

                          </td>
                          <td> {{$cliente->id}} </td>
                          <td> {{$cliente->cedula}} </td>
                          <td> {{$cliente->nacionalidad}} </td>
                          <td> {{$cliente->poliza}} </td>
                          <td> {{$cliente->nombre}} </td>
                          <td> {{$cliente->apellido}} </td>
                          <td> {{$cliente->telefono}} </td>
                          <td> {{$cliente->correo}} </td>
                          <td> {{$cliente->direccion}} </td>
                          <td> {{$cliente->nacimiento}} </td>
                      </tr>   
                      @endforeach 
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection