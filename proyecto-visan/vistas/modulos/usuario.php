<div v class="contenedor">
	<h1 class="titulo">Usuarios</h1>

<form>
  <div class="form-row">
      <div class="form-group col-md-4">
       <label for="inputState">Seleccionar criterio de busqueda</label>
      <select id="inputState" class="form-control">
        <option selected>Selecionar</option>
        <option>Nombre</option>
        <option>Rut</option>        
      </select>
     </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="numerodocumeto">Buscar</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="ejemplo: juan o 1111">
    </div>
     <div class="form-group col-md-2">
      <button type="submit" class="btn btn-primary form-control agregar">Buscar</button>
    </div>
  </div>

</form>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
     
<div class="form-row">
    <div class="form-group col-md-3">
        <div class="card" style="width: 1rem;">
          <img class="card" src="vistas/recursos/img/user.png" width="150px" height="150px" alt="Usuario">
      </div>
    </div>
  
     <div class="form-group col-md-3">
      <label for="articulo">rut</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345-9">
    </div>
    <div class="form-group col-md-3">
      <label for="cantidad">Nombre</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
    <div class="form-group col-md-3">
      <label for="cantidad">Apellido</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
  </div>

  
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="articulo">Direccion</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
    <div class="form-group col-md-">
      <label for="cantidad">Comuna</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-4">
     <label for="coto">C</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="1000" required>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Rut</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>