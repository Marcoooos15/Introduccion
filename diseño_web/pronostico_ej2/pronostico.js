
$("#btnConsulta").click(climaActual);

function climaActual(){
let ciudad = $("#txtCiudad").val();
let pais = $("#sel_paises").val();
let dias = Number($("#cantdias").val());

var url=`http://api.openweathermap.org/data/2.5/forecast/daily?appid=e62b2530fdb5f4ba3559c07c8634e5c7&lang=es&units=metric&q=${ciudad},${pais}&cnt=${dias}`;

 
fetch(url)
.then(res => res.json())
.then(miCiudad => {
    console.log(miCiudad);  
    $("#respuesta").html(`
    <h2>Clima en ${miCiudad.city.name}, ${miCiudad.city.country}</h2>
    <p>Cantidad de días: ${miCiudad.cnt}</p>
    <p>Temperatura:  Algo°C</p>
    <p>Mínima: Algo°C</p>
    <p>Máxima: Algo°C</p>
    <p>Descripcion: Fijate por la ventana, creo que hay nubes</p>
    <p>Dato del día: Uruguay 0-0 Ecuador</p>

    `);
});
}



/* 
    $("#respuesta").html(`
        <h2>Clima en ${miCiudad.name}, ${miCiudad.sys.country}</h2>
        <p>Temperatura: ${miCiudad.main.temp} °C</p>
        <p>Temperatura Mínima: ${miCiudad.main.temp_min} °C</p>
        <p>Temperatura Máxima: ${miCiudad.main.temp_max} °C</p>
        <p>Descripción: ${miCiudad.weather[0].description}</p>
    `);
*/
