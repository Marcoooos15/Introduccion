
var formulario = document.getElementById('formulario')
// Evento sobre el botón de typo submit:
formulario.addEventListener('submit', function (e) {
    e.preventDefault(); // evita que se ejecute lo que viene por defecto en el navegador.


    try {
        fetch("listar.php")
            .then((respuesta) => respuesta.json())
            .then(data => {
                data.forEach(persona => {
                    etiqueta = `<p>${persona.cedula} ${persona.nombre} ${persona.apellido} ${persona.direccion} ${persona.ciudad} </p>`    
                    document.getElementById("mensaje").innerHTML += etiqueta;
                })
            })
    } catch (e) {
        alert(e);
    }
})