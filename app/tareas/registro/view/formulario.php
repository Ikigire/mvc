<h1 class="text-center">Nueva tarea</h1>
<hr>
<?php
if (isset($query_params)) {
    $error = $query_params['error'];
    echo "
            <div id='alerta'>
                <div class='alert alert-danger alert-dismissable fade show'>
                    <strong>Error:</strong> {$error}
                </div>
                <hr>
            </div>
        ";
}
?>
<section class="row">
    <div class="col-md-4 col-lg-3 col-sm-6 col-12">
        <h3 class="text-center">Menu</h3>
        <hr>
        <ul class="list-group">
            <li class="list-group-item bg-primary">
                <a href="/mvc/tareas/registro" class="btn btn-link text-white">Nueva tarea</a>
            </li>
            <li class="list-group-item">
                <a href="/mvc/tareas" class="btn btn-link">Mis tareas</a>
            </li>
        </ul>
    </div>
    <div class="col">
        <h3 class="text-center">Tarea</h3>
        <hr>
        <form action="" method="post">
            <div class="form-floating mt-3">
                <input type="text" class="form-control" 
                    name="titulo" id="titulo" placeholder="" required>
                <label for="titulo">Titulo tarea</label>
            </div>
            
            <div class="form-floating">
                <textarea class="form-control" name="descripcion"
                    id="descripcion" placeholder="" required></textarea>
                <label for="descripcion">Descripcion</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                Guardar
            </button>
        </form>
    </div>
</section>
<!-- <script type src="./app/tareas/registro/view/js/formulario.js"></script> -->

<script>
    setTimeout(() => {
        let alerta = document.getElementById('alerta');
        if (alerta)
            alerta.remove();
    }, 4000);
</script>