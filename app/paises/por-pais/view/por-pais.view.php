<h1 class="text-center">App Paises - Buscar país</h1>
<hr>
<main class="row">
    <!-- Menu -->
    <section class="col-12 col-sm-6 col-md-4 col-lg-3">
        <?php
            require_once("./app/paises/common/menu/menu.php");
        ?>
    </section>

    <!-- Container -->
    <section class="col">
        <div class="text-center">
            <h3>Paises</h3>
            <hr>
        </div>
        <div>
            <input class="form-control" type="text" placeholder="Buscar..." onkeypress="onKeyPress(event)" autofocus>
            <hr>
        </div>
        <div id="paises-container" class="row"></div>
    </section>
</main>
<script src="/app/paises/helper/helper.js"></script>
<script src="/app/paises/por-pais/controller/por-pais.controller.js"></script>