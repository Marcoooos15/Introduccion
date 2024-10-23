    // http://localhost/ej_html_js_php/1_login/login.htm)
var formulario = document.getElementById("formulario");

// Evento submit del formulario
formulario.addEventListener("submit", function (e) {
  e.preventDefault();
  var datos = new FormData(formulario);
  fetch("login.php", {
    method: "POST",
    body: datos
  })
  .then((respuesta) => respuesta.json())
  .then((respuesta) => {
    document.getElementById("mensaje").innerText = respuesta;
  });
});