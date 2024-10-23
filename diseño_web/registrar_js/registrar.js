
var formulario = document.getElementById('formulario')
// Evento sobre el botón de typo submit:
formulario.addEventListener('submit', function(e){
    e.preventDefault(); // evita que se ejecute lo que viene por defecto en el navegador.
    var datos = new FormData(formulario);
try{
    if (!datos.get("cedula")){
        throw new Error("Favor de ingresar la cédula");
    }       
    if (!datos.get("nombre")){
        throw new Error("Favor de ingresar el nombre");
    }
    if (!datos.get("apellido")){
    throw new Error("Favor de ingresar el apellido");
    }
    if (!datos.get("direccion")){
        throw new Error("Favor de ingresar la dirección");
    }
    if (!datos.get("ciudad")){
        throw new Error("Favor de ingresar la ciudad");
    }

        fetch("registrar.php", {
          method: "POST",
          body: datos,
        })
        .then((respuesta) => respuesta.json())
        .then((respuesta) => {
          document.getElementById("mensaje").innerText = respuesta;
        });
    
} catch(e) {
alert(e);
}})
