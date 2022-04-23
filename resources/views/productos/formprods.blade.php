@csrf
<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codprod">Código</label>
            <input type="text" name="codprod" value="{{ $producto->codprod }}" class="form-control form-control-sm col-sm-4" id="codprod" placeholder="Ej: AA-0001">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nombreprod">Nombre del Producto</label>
            <input type="text" name="nombreprod" value="{{ $producto->nombreprod }}" class="form-control form-control-sm col-sm-10" id="nombreprod" placeholder="Nombre del producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="descriprod">Descripción</label>
            <input type="text" name="descriprod" value="{{ $producto->descriprod }}" class="form-control form-control-sm col-sm-10" id="nombreprod" placeholder="Descripción del producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="typprod">Tipo de Producto</label>
            <input type="text" name="typprod" value="{{ $producto->typprod }}" class="form-control form-control-sm col-sm-10" id="typprod" placeholder="Tipo de producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="costunit">Costo Unitario</label>
            <input type="number" name="costunit" value="{{ $producto->costunit }}"class="form-control form-control-sm col-sm-4" id="costunit" step="0000.0001" placeholder="000.000">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="cantprod">Cantidad</label>
            <input type="number" name="cantprod" value="{{ $producto->cantprod }}"class="form-control form-control-sm col-sm-4" id="cantprod" placeholder="0000">
        </div>
    </div>
</div>