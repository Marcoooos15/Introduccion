// Añadir y mostrar
localStorage.setItem('nombre', 'Juanjo');
let nombre = localStorage.getItem('nombre');
console.log(nombre);

// Modificar
localStorage.setItem('nombre', 'Lucas');
let modificar = localStorage.getItem('nombre');
console.log(modificar);

// Eliminar
localStorage.clear();
