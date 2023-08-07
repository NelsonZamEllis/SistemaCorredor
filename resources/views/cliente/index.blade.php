@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>LISTA DE CLIENTES</h3>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button>
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CÉDULA</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">DIRECCIÓN</th>
                        <th scope="col">F. NACIMIENTO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)              
                    <tr class="">
                        <td scope="row"> {{$cliente->id}} </td>
                        <td> {{$cliente->cedula}} </td>
                        <td> {{$cliente->nombre}} </td>
                        <td> {{$cliente->telefono}} </td>
                        <td> {{$cliente->correo}} </td>
                        <td> {{$cliente->direccion}} </td>
                        <td> {{$cliente->nacimiento}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$cliente->id}}">
                                Editar
                            </button>        
                        </td>
                    </tr>
                    @include('cliente.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('cliente.create')
        
    </div>
    <div class="col-md-2"></div>
</div>

@endsection