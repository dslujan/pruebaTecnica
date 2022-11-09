<x-app-layout>
    <div class="table-responsive">
    <table id="example" class="celled table display" style="width:100%">
        <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th class="collapsing">Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>RFC</th>
            <th>Notas</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td class="collapsing">{{ $usuario->name }}</td>
            <td>{{ $usuario->phone }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->rfc }}</td>
            <td>{{ $usuario->notas }}</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-success editar" data-id="{{ $usuario->id }}"><i class="bi bi-pencil-square"></i> Editar</button>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

    <div id="myModal" name="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Editar usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('update_user') }}" class="needs-validation" novalidate>
                    <input type="text" class="form-control" id="id" name="id" hidden>
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                <div class="valid-feedback">
                                    TODO BIEN
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="number" min="1" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="phone" name="phone" placeholder="Telefono" required>
                                <div class="valid-feedback">
                                    TODO BIEN
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" oninput="validarInput(this)" required>
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                        <div class="col-6" id="rfc_alert"></div>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com" required>
                        <div class="valid-feedback">
                            TODO BIEN
                        </div>
                        <div class="invalid-feedback">
                            Correo incorrecto
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" id="notas" name="notas" placeholder="Notas" required></textarea>
                    </div>


                    <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Registrar</button>
                    </div>
                    
                </form>
            </div>
          </div>
        </div>
      </div>

    <x-slot name="js">
        <script>
            var resultData = {};

            $(document).ready(function(){
                
                $('.editar').click(function(){
                    id = $(this).data('id');
                    $.ajax({
                        url:"{{ url('show_user') }}",
                        method:"POST",
                        data:{'id': id, '_token': _token = $('input[name="_token"]').val()},
                        success:function(response){
                            resultData = JSON.parse(response);
                            
                            $('#myModal').modal('show');
                        }
                    });

                    
                });

                $('#myModal').on('show.bs.modal', function () {
            
                    $("#myModal :input").each(function(){
                        
                        input = $(this).attr('id');
                        if(input){
                            
                            if(input in resultData){
                                
                                $('#myModal #'+input).val(resultData[input]);
                                
                            }
                        }
                       
                    });
                });
            });

            
        </script>
    </x-slot>
</x-app-layout>
