<div id="spinner-container" class="text-center">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-info" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div id="pais-container" class="vh-100" hidden>
    <div class="h-100 d-flex justify-content-center align-items-center">

        <div class="card border-primary p-1">
            <img id="country-img" src="https://flagcdn.com/uz.svg" alt="weas" class="card-img-top">
            <div class="card p-1 mt-2 border-secondary">
                <h3 id="common-name" class="text-center">🇺🇿 Uzbekistan</h3>
                <hr>
                <div class="d-flex justify-content-between">
                    <div><strong>Official:</strong></div>
                    <div id="official-name" class="text-end">Republic of Uzbekistan</div>
                </div>
                <div class="d-flex justify-content-between">
                    <div><strong>Native:</strong></div>
                    <div id="native-name" class="text-end">Республика Узбекистан</div>
                </div>
            </div>

            <div class="card mt-2 p-1 border-secondary">
                <div class="d-flex justify-content-between">
                    <div><strong>Capital:</strong></div>
                    <div id="capital" class="text-end">Tashkent</div>
                </div>
            </div>

            <div class="card mt-2 p-1 border-secondary">
                <div class="d-flex justify-content-between">
                    <div><strong>Population:</strong></div>
                    <div id="population" class="text-end">34232050</div>
                </div>
            </div>

            <div class="card-footer text-center">
                <a href="https://restcountries.com/" target="_blank" class="btn btn-primary">Api info...</a>
            </div>
        </div>

    </div>
</div>

<script src="/app/paises/ver-pais/controller/ver-pais.controller.js"></script>