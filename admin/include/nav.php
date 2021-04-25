
<div class="container my-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-list2"></span>
                <?= $categoria ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="categorias.php?categoria=Medicina+Veterinaria">Medicina Veterinaria</a>
                <a class="dropdown-item" href="categorias.php?categoria=Accesorios+Mascotas">Accesorios Mascotas</a>
                <a class="dropdown-item" href="categorias.php?categoria=Acuarios">Acuarios</a>
                <a class="dropdown-item" href="categorias.php?categoria=Ferreteria">Ferreteria</a>
                <a class="dropdown-item" href="categorias.php?categoria=Tecnologia">Tecnologia</a>
                <a class="dropdown-item" href="categorias.php?categoria=Articulos+Del+Hogar">Articulos Del Hogar</a>
                <a class="dropdown-item" href="categorias.php?categoria=Todos">Todos</a>
            </div>
            <button onclick="location.href='mensajeria.php'" type="button" class="btn btn-primary border"><span class="icon-mail3"></span> Mensajeria</button>
            <a href="panel.php"><button type="button" class="btn btn-primary border"><span class="icon-rocket"></span> Productos Destacados</button></a>
            <a href="../index.php" target='_blank' ><button type="button" class="btn btn-primary border"><span class="icon-table2"></span> Ir a la Pagina</button></a>
            <a href="destruir.php?exit=1"><button type="button" class="btn btn-danger border"><span class="icon-cross"></span> Salir</button></a>
        </div>
    </div>
</div>
