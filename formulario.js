//(funcion)(){
var formulario = document.getElementById('formulario'),
		nombre = formulario.nombre,
        apellido = formulario.apellido,
		email = formulario.email,
        telefono = formulario.telefono,
        barrio = formulario.barrio,
        motivo = formulario.motivo,
		sexo = formulario.sexo,
		terminos = formulario.terminos,
		error = document.getElementById('error');
function validarNombre(e){
    if(nombre.value == '' || nombre == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarApellido(e){
    if(apellido.value == '' || apellido == null){
        console.log('Completa el apellido');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Apellido</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarCorreo(e){
     if(email.value == '' || email == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarTelefono(e){
    if(telefono.value == '' || telefono == null){
        console.log('Completa el telefono');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un telefono</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarBarrio(e){
    if(barrio.value == '' || barrio == null){
        console.log('Completa el barrio');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Barrio</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarMotivo(e){
    if(motivo.value == '' || motivo == null){
        console.log('Completa el motivo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Motivo</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarSexo(e){
    if(sexo.value == '' || sexo.value == null){
        console.log('Selecciona Un Sexo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Selecciona Un Sexo</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}
function validarTerminos(e){
    if(terminos.checked == false){
        console.log('Acepta Los Terminos');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Acepta Los Terminos</li>';
        e.preventDefault();
    }else if(nombre.value == '' || nombre == null ||apellido.value == '' || apellido == null || email.value == '' || email == null || telefono.value == '' || telefono.value == null || barrio.value == '' || barrio.value == null || motivo.value == '' || motivo.value == null || sexo.value == '' || sexo == null ||){
    error.style.display='block';
}
}

function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarApellido(e);
   validarCorreo(e);
   validarTelefono(e);
   validarBarrio(e);
   validarMotivo(e);
   validarSexo(e);
   validarTerminos(e);
}




formulario.addEventListener('submit', validarForm);

//}())