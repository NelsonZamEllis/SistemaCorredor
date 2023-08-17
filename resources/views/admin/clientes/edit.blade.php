@extends('layouts.admin')

@section('content')
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consultar Cliente</h1>
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
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Datos del cliente</h5>
              </div>
              <div class="card-body">
                <form action=" {{url('/admin/clientes')}} " method="PUT" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                       <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Cédula</label>
                            <input type="text" class="form-control" name="cedula" value="{{$cliente->cedula}}">
                        </div>
                    </div>
                       <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" value="{{$cliente->nacionalidad}}">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">N° Poliza</label>
                            <input type="text" class="form-control" name="poliza" value="{{$cliente->poliza}}">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="{{$cliente->nombre}}">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="apellido" value="{{$cliente->apellido}}">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control" name="telefono" value="{{$cliente->telefono}}">
                        </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                              <label for="">Correo</label>
                              <input type="email" class="form-control" name="correo" value="{{$cliente->correo}}">
                          </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control" name="direccion" value="{{$cliente->direccion}}">
                            </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                  <label for="">F. Nacimiento</label>
                                  <input type="text" class="form-control" name="nacimiento" value="{{$cliente->nacimiento}}">
                              </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subir Archivos</label>
                                    <input type="file" class="form-control" name="files[]" multiple>
                                </div>
                                </div>
                        </div>  
                    <hr>
                           <div class="row">
                            <div class="col-md-6">
                              <a href="" class="btn btn-secondary" >Cancelar</a>
                              <input type="submit" class="btn btn-primary" value="Registrar">
                            </div>
                           </div>
                </form>
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