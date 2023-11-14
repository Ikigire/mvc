let paises_container = document.getElementById("paises-container");

function onKeyPress( evt ) {
    if (evt.key != "Enter") {
        return;
    }
    clearPaisesContainer(paises_container);
    let texto = evt.target.value;

    requestCountriesData(texto);
}

async function requestCountriesData(nombre) {
    let url = `https://restcountries.com/v3.1/name/${nombre}`;
    let resp = await fetch(url);
    await resp.json().then(
        paises => {
            renderizarPaises(paises_container, paises);
        }
    );
}