
  
  <!-- Modal -->
  <div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update', $cliente->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
        <div class="mb-3">
            <label for="" class="form-label">CÉDULA</label>
            <input type="text"
                class="form-control" name="cedula" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->cedula}}"> 
            </div>

          <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->nombre}}"> 
          </div>

          <div class="mb-3">
            <label for="" class="form-label">TELEFONO</label>
            <input type="text"
              class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->telefono}}"> 
          </div>

          <div class="mb-3">
            <label for="" class="form-label">CORREO</label>
            <input type="text"
              class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->correo}}"> 
          </div>

          <div class="mb-3">
            <label for="" class="form-label">DIRECCIÓN</label>
            <input type="text"
              class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->direccion}}"> 
          </div>

          <div class="mb-3">
            <label for="" class="form-label">F. NACIMIENTO</label>
            <input type="text"
              class="form-control" name="nacimiento" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->nacimiento}}"> 
          </div>
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>