//*--------Mostar la seccion activa en sidebar---------

let modulo = document.getElementById('moduloIAA');
let ul = document.getElementById('moduloIAA-nav');
let active = document.getElementById('editarActividad');
modulo.classList.remove('collapsed');
active.classList.add('active');
ul.classList.add('show');

//* ---------------------------------------------------