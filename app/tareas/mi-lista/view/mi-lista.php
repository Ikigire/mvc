<h1 class="text-center">Mis tareas</h1>
<hr>
<section class="row">
    <div class="col-md-4 col-lg-3 col-sm-6 col-12">
        <h3 class="text-center">Menu</h3>
        <hr>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="/mvc/tareas/registro" class="btn btn-link">Nueva tarea</a>
            </li>
            <li class="list-group-item bg-primary">
                <a href="/mvc/tareas" class="btn btn-link text-white">Mis tareas</a>
            </li>
        </ul>
    </div>
    <div class="col row">
        <h3 class="text-center">Tareas</h3>
        <hr>
        <?php
            include_once("./app/tareas/repository/tareas.repository.php");

            $tareas = TareasRepository::getInstance()->getAllTareas();

            // print_r($tareas);

            for ($i=0; $i < count($tareas); $i++) {
                $color = "";
                switch ($tareas[$i]->getStatus()) {
                    case 'Pendiente':
                        $color = "primary";
                        break;

                    case 'Completado':
                        $color = "success";
                        break;
                    
                    default:
                        $color = "danger";
                        break;
                }

                $html = "
                    <div class='col-12 mx-3'>
                        <div class='card mt-3 border-black'>
                            <div class='card-header bg-{$color}'>
                                <h4 class='card-title text-center text-white'>
                                    {$tareas[$i]->getTitulo()}
                                </h4>
                            </div>

                            <div class='card-body'>
                                <p class='card-text'>
                                    {$tareas[$i]->getDescripcion()}
                                </p>
                            </div>

                            <div class='card-footer'>
                                <div class='row align-items-center'>
                                    <p class='col card-text'></p>
                                    <p class='col card-text text-center text-{$color}'>
                                        <strong>&squf;</strong>{$tareas[$i]->getStatus()}
                                    </p>
                                    <p class='col card-text'>
                                    <a class='btn btn-success' 
                                        href='/mvc/tareas/completar?id={$tareas[$i]->getId()}' >
                                        Completar
                                    </a>
                                    <form action='' method='post'>
                                        <input type='hidden' name='id' value='{$tareas[$i]->getId()}' />
                                        <button class='btn btn-success' type='submit'>C</button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                echo $html;
            }

            
        ?>
    </div>
</section>