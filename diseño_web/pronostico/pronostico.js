
$("#btnConsulta").click(climaActual);

function climaActual(){
let ciudad = $("#txtCiudad").val();
let pais = $("#sel_paises").val();

fetch("http://api.openweathermap.org/data/2.5/weather/?appid=e62b2530fdb5f4ba3559c07c8634e5c7&lang=es&units=metric&q="+ciudad+","+pais+"")
.then(res => res.json())
.then(miCiudad => {
    console.log(miCiudad);
    $("#respuesta").html(`
        <h2>Clima en ${miCiudad.name}, ${miCiudad.sys.country}</h2>
        <p>Temperatura: ${miCiudad.main.temp} °C</p>
        <p>Temperatura Mínima: ${miCiudad.main.temp_min} °C</p>
        <p>Temperatura Máxima: ${miCiudad.main.temp_max} °C</p>
        <p>Descripción: ${miCiudad.weather[0].description}</p>
    `);
});
}

