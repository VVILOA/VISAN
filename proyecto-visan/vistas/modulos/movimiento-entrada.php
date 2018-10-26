<div v class="contenedor">
	<h1 class="titulo">Movimiento de Entrada</h1>

<form>

  <div class="form-row">
     <div class="form-group col-md-4">
      <label for="inputState">Tipo de documento</label>
      <select id="inputState" class="form-control">
        <option selected>Selecionar</option>
        <option>Tipo 1</option>
        <option>Tipo 2</option>
        <option>Tipo 3</option>
        
      </select>
    </div>
    <div class="form-group col-md-">
      <label for="numerodocumeto">N° de documento</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
     <div class="form-group col-md-">
      <button type="submit" class="btn btn-primary form-control agregar">Agregar Movimiento de Entrada</button>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
     <label for="bodega">Bodega</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="nombre bodega" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
     <label for="Rut">Rut proveedor</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="nombre bodega" required>
    </div>
  </div>

    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="articulo">Articulo</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
    <div class="form-group col-md-">
      <label for="cantidad">Cantidad</label>
      <input type="text" class="form-control" id="inputNdocumento" placeholder="12345">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
     <label for="coto">Costo unitario</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="1000" required>
    </div>
  </div>
</form>
</div>