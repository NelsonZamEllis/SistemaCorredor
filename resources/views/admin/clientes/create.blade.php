@extends('layouts.admin')

@section('content')
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Nuevo Cliente</h1>
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
                <h5 class="m-0">Registro de datos</h5>
              </div>
              <div class="card-body">
                <form action=" {{url('/admin/clientes')}} " method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                       <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Cédula</label>
                            <input type="text" class="form-control" name="cedula">
                        </div>
                    </div>
                       <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Teléfono</label>
                            <input type="text" class="form-control" name="telefono">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="correo">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Dirección</label>
                            <input type="text" class="form-control" name="direccion">
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Nacimiento</label>
                            <input type="text" class="form-control" name="nacimiento">
                        </div>
                        </div>
                        </div>  
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Archivo Adjunto</label>
                                <input type="file" name="files[]" multiple class="form-control">
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