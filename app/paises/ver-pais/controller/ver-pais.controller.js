let country_img = document.getElementById("country-img");
let common_name = document.getElementById("common-name");
let official_name = document.getElementById("official-name");
let native_name = document.getElementById("native-name");
let capital = document.getElementById("capital");
let population = document.getElementById("population");

let code = window.location.pathname.split("/");

code = code[code.length - 1];

getCountryData()

async function getCountryData() {
    let url = `https://restcountries.com/v3.1/alpha/${code}`;
    
    const resp = await fetch(url);
    
    await resp.json().then(
        (paises) => {
            const pais = paises[0];

            country_img.src = pais.flags.svg;
            country_img.alt = pais.flags.alt;
            
            common_name.innerText = pais.name.common;
            
            official_name.innerText = pais.name.official;

            let keys = Object.keys(pais.name.nativeName);
            let key = keys[keys.length - 1];
            native_name.innerText = pais.name.nativeName[key].official;

            capital.innerText = pais.capital[0];

            population.innerText = pais.population;

            document.getElementById("spinner-container").hidden = true;
            document.getElementById("pais-container").hidden = false;
        }
    );
}