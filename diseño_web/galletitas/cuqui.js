// Crear Cookie
function crearCookie(nombre, valor) {
    document.cookie = nombre + "=" + valor + ";path=/";
}
crearCookie("usuario", "Juanjo");
console.log(document.cookie);

// Eliminar Cookie
function eliminarCookie() {
    document.coookie ="nombre=Cookie_basica2; expires=60*60*24; path=/";
    document.coookie ="nombre=Cookie_basica2; expires=0; path=/";         
}

// Mostrar Cookie
function mostrarTodasLasCookies() {
    let cookies = document.cookie.split("; ");
    cookies.forEach(cookie => console.log(cookie));
}
mostrarTodasLasCookies();

// Modificar Cookie
document.cookie = "nombre=QWERTY; expires= 60*60*24; path=/";
document.cookie = "nombre=QWERTY; expires= 60*60*24*30; path=/";
