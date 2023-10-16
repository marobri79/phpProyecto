

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<div class="row">
    <?php foreach($this->model->Listar() as $r): ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Código Producto: <?php echo $r->idProducto; ?></h5>
                    <p class="card-text">NIT Proveedor: <?php echo $r->nit; ?></p>
                    <p class="card-text">Nombre Producto: <?php echo $r->nomprod; ?></p>
                    <p class="card-text">Precio Unitario: <?php echo $r->precioU; ?></p>
                    <p class="card-text">Descripción: <?php echo $r->descrip; ?></p>
                    <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>" class="btnEditar btn ">Editar</a>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>" class="btnEliminar btn ">Eliminar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

