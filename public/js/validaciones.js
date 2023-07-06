var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
  new bootstrap.Alert(alert)
})

//Validar Login
function login(obj) {
    var usuario = obj.usuario.value;
    if (!usuario) {
        alert("Debe de ingresar un usuario");
        obj.usuario.focus();
        return false;
    }
    if (usuario.length < 2){
        alert("Faltan dígitos en el usuario");
        obj.usuario.focus();
        return (false);
    }
    var contraseña = obj.contraseña.value;
    if (!contraseña) {
        alert("Debe de ingresar la contraseña");
        obj.contraseña.focus();
        return false;
    }
    if (contraseña.length < 4){
		alert("Faltan dígitos en la contraseña");
		obj.contraseña.focus();
		return (false);
	}
    
}

//Validar Registro de Usuario
function registrousuario(obj) {
    var name = obj.name.value;
    if (!name) {
        alert("Debe de ingresar un Nombre");
        obj.name.focus();
        return false;
    }
    if (name.length < 2){
        alert("Faltan dígitos en el Nombre");
        obj.name.focus();
        return (false);
    }
    var email = obj.email.value;
    if (!email) {
        alert("Debe de ingresar un Email");
        obj.email.focus();
        return false;
    }
    if (email.length < 2){
        alert("Faltan dígitos en el Email");
        obj.email.focus();
        return (false);
    }
    var username = obj.username.value;
    if (!username) {
        alert("Debe de ingresar un Nombre de Usuario");
        obj.username.focus();
        return false;
    }
    if (username.length < 2){
        alert("Faltan dígitos en el Nombre de Usuario");
        obj.username.focus();
        return (false);
    }
    // var rol = obj.rol.value;
    // if (rol==0){
    //     alert("Debe de seleccionar el Rol del Usuario");
    //     return (false);
    // }
    var password = obj.password.value;
    if (!password) {
        alert("Debe de ingresar la contraseña");
        obj.password.focus();
        return false;
    }
    if (password.length < 4){
		alert("Faltan dígitos en la contraseña");
		obj.password.focus();
		return (false);
	}
    var password_confirmation = obj.password_confirmation.value;
    if (!password_confirmation) {
        alert("Debe de ingresar la Confirmación de la contraseña");
        obj.password_confirmation.focus();
        return false;
    }
    if (password_confirmation.length < 4){
		alert("Faltan dígitos en la Confirmación de la contraseña");
		obj.password_confirmation.focus();
		return (false);
	}
    if (password_confirmation != password) {
        alert("Las contraseñas No Coinciden");
        obj.password_confirmation.focus();
        return false;
    }
    
}

// Validar SEDE
function sede(obj) {
    var nombre_sede = obj.nombre_sede.value;
    if (!nombre_sede) {
        alert("Debe de ingresar el nombre del lugar de la sede");
        obj.nombre_sede.focus();
        return false;
    }
    if (nombre_sede.length < 2){
        alert("Faltan dígitos en el lugar de la sede");
        obj.nombre_sede.focus();
        return (false);
    }
    var division = obj.division.value;
    if (division==0){
        alert("Debe de seleccionar la División");
        return false;
    }
    if (nombre_sede.trim() == "") {
        alert("El Campo de Sede No debe contener Espacios en Blancos.");
        obj.nombre_sede.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(nombre_sede)) {
        alert("El campo de Sede No debe contener solo Caracteres Repetidos.");
        obj.nombre_sede.focus();
        return false;
    }
    
}

// Validar DIVISiÓN
function division(obj) {
    var division1 = obj.division1.value;
    if (!division1) {
        alert("Debe de ingresar el nombre del lugar de la división");
        obj.division1.focus();
        return false;
    }
    if (division1.length < 2){
        alert("Faltan dígitos en el lugar de la división");
        obj.division1.focus();
        return (false);
    }
    if (division1.trim() == "") {
        alert("El Campo de la división No debe contener Espacios en Blancos.");
        obj.division1.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(division1)) {
        alert("El campo de la división No debe contener solo Caracteres Repetidos.");
        obj.division1.focus();
        return false;
    }
    
}
//Validar Cargo
function cargo(obj) {
    var nombre_cargo = obj.nombre_cargo.value;
    if (!nombre_cargo) {
        alert("Debe de ingresar el cargo");
        obj.nombre_cargo.focus();
        return false;
    }
    if (nombre_cargo.length < 2){
        alert("Faltan dígitos el cargo");
        obj.nombre_cargo.focus();
        return (false);
    }
    if (nombre_cargo.trim() == "") {
        alert("El Campo de Cargo No debe contener Espacios en Blancos.");
        obj.nombre_cargo.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(nombre_cargo)) {
        alert("El campo de Cargo No debe contener solo Caracteres Repetidos.");
        obj.nombre_cargo.focus();
        return false;
    }
    
}

//Validar Persona
function Persona(obj) {
    var nombre = obj.nombre.value;
    if (!nombre) {
        alert("Debe de ingresar un nombre");
        obj.nombre.focus();
        return false;
    }
    if (nombre.length < 2){
        alert("Faltan dígitos en el nombre");
        obj.nombre.focus();
        return (false);
    }
    if (nombre.trim() == "") {
        alert("El Campo Nombre No debe contener solo Espacios en Blancos.");
        obj.nombre.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(nombre)) {
        alert("El Campo Nombre no debe contener solo Caracteres Repetidos.");
        obj.nombre.focus();
        return false;
    }
    var apellido = obj.apellido.value;
    if (!apellido) {
        alert("Debe de ingresar el apellido");
        obj.apellido.focus();
        return false;
    }
    if (apellido.length < 2){
        alert("Faltan dígitos en el apellido");
        obj.apellido.focus();
        return (false);
    }
    if (apellido.trim() == "") {
        alert("El Campo Apellido No debe contener solo Espacios en Blancos.");
        obj.apellido.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(apellido)) {
        alert("El Campo Apellido no debe contener solo Caracteres Repetidos.");
        obj.apellido.focus();
        return false;
    }
    var ci = obj.ci.value;
    if (!ci) {
        alert("Debe de ingresar la cédula");
        obj.ci.focus();
        return false;
    }
    if (ci.length < 7){
		alert("Faltan dígitos en la cédula");
		obj.ci.focus();
		return (false);
	}
    if (ci.trim() == "") {
        alert("El Campo Apellido No debe contener solo Espacios en Blancos.");
        obj.ci.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(ci)) {
        alert("El Campo Apellido no debe contener solo Caracteres Repetidos.");
        obj.ci.focus();
        return false;
    }
    var idusuario = obj.idusuario.value;
    if (!idusuario) {
        alert("Debe de ingresar un Id de Usuario");
        obj.idusuario.focus();
        return false;
    }
    if (idusuario.length < 2){
        alert("Faltan dígitos en el Id de Usuario");
        obj.idusuario.focus();
        return (false);
    }
    if (idusuario.trim() == "") {
        alert("El Campo Id de Usuario No debe contener solo Espacios en Blancos.");
        obj.idusuario.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(idusuario)) {
        alert("El Campo Id de Usuario no debe contener solo Caracteres Repetidos.");
        obj.idusuario.focus();
        return false;
    }
    var cargo = obj.cargo.value;
    if (cargo==0){
        alert("Debe de seleccionar el Cargo de la Persona");
        return (false);
    }
    var telefono = obj.telefono.value;
    if (!telefono) {
        alert("Debe de ingresar el telefono");
        obj.telefono.focus();
        return false;
    }
    if (telefono.length < 11){
        alert("Faltan dígitos en el telefono");
        obj.telefono.focus();
        return (false);
    }
}

//Validar Marca
function Marca(obj) {
var nombre_marca = obj.nombre_marca.value;
    if (!nombre_marca) {
        alert("Debe de ingresar una Marca.");
        obj.nombre_marca.focus();
        return false;
    }
    if (nombre_marca.length < 2){
        alert("Faltan dígitos en la Marca.");
        obj.nombre_marca.focus();
        return (false);
    }
    if (nombre_marca.trim() == "") {
        alert("El Campo Marca No debe contener solo Espacios en Blancos.");
        obj.nombre_marca.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(nombre_marca)) {
        alert("El campo Marca no debe contener solo Caracteres Repetidos.");
        obj.nombre_marca.focus();
        return false;
    }
}

//Validar Modelo
function Modelo(obj) {
var nombre_modelo = obj.nombre_modelo.value;
    if (!nombre_modelo) {
        alert("Debe de ingresar un Modelo.");
        obj.nombre_modelo.focus();
        return false;
    }
    if (nombre_modelo.length < 2){
        alert("Faltan dígitos en el Modelo.");
        obj.nombre_modelo.focus();
        return (false);
    }
    if (nombre_modelo.trim() == "") {
        alert("El Campo Modelo No debe contener solo Espacios en Blancos.");
        obj.nombre_modelo.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(nombre_modelo)) {
        alert("El Campo Modelo no debe contener solo Caracteres Repetidos.");
        obj.nombre_modelo.focus();
        return false;
    }
}

//Validar Tipo Periferico
function TipoPeriferico(obj) {
var tipo = obj.tipo.value;
    if (!tipo) {
        alert("Debe de ingresar un Tipo de Periferico.");
        obj.tipo.focus();
        return false;
    }
    if (tipo.length < 2){
        alert("Faltan dígitos en el Tipo de Periferico.");
        obj.tipo.focus();
        return (false);
    }
    if (tipo.trim() == "") {
        alert("El Campo Tipo de Periferico No debe contener solo Espacios en Blancos.");
        obj.tipo.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(tipo)) {
        alert("El Campo Tipo de Periferico no debe contener solo Caracteres Repetidos.");
        obj.tipo.focus();
        return false;
    }
}

//Validar Periferico
function Periferico(obj) {
    var id_tipo = obj.id_tipo.value;
    if (id_tipo==0) {
        alert("Debe de ingresar el Periférico");
        obj.id_tipo.focus();
        return false;
    }
    var id_marca = obj.id_marca.value;
    if (id_marca==0){
        alert("Debe de seleccionar la Marca");
        obj.id_marca.focus();
        return (false);
    }
    var id_modelo = obj.id_modelo.value;
    if (id_modelo==0){
        alert("Debe de seleccionar el Modelo");
        obj.id_modelo.focus();
        return (false);
    }
    var serial = obj.serial.value;
    if (!serial) {
        alert("Debe de ingresar el Serial");
        obj.serial.focus();
        return false;
    }
    if (serial.length < 2){
		alert("Faltan dígitos en el Serial");
		obj.serial.focus();
		return (false);
	}
    if (serial.trim() == "") {
        alert("El Campo Serial No debe contener solo Espacios en Blancos.");
        obj.serial.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(serial)) {
        alert("El Campo Serial no debe contener solo Caracteres Repetidos.");
        obj.serial.focus();
        return false;
    }
    var serialA = obj.serialA.value;
    if (!serialA) {
        alert("Debe de ingresar el Serial Activo");
        obj.serialA.focus();
        return false;
    }
    if (serialA.length < 2){
		alert("Faltan dígitos en el Serial Activo");
		obj.serialA.focus();
		return (false);
	}
    if (serialA.trim() == "") {
        alert("El Campo Serial Activo No debe contener solo Espacios en Blancos.");
        obj.serialA.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(serialA)) {
        alert("El Campo Serial Activo no debe contener solo Caracteres Repetidos.");
        obj.serialA.focus();
        return false;
    }
}

//Validar Sistemas Operatvos
function sistemas_operatvos(obj) {
    var tipo = obj.tipo.value;
    if (!tipo) {
        alert("Debe de seleccionar un Tipo de Sistema Operatvio");
        return false;
    }
    var nombre = obj.nombre.value;
    if (!nombre) {
        alert("Debe de ingresar el Nombre del Sistema Opetativo");
        obj.nombre.focus();
        return false;
    }
    if (nombre.length < 2){
		alert("Faltan dígitos en el Nombre del Sistema Opetativo");
		obj.nombre.focus();
		return (false);
	}
    if (nombre.trim() == "") {
        alert("El Campo Serial Activo No debe contener solo Espacios en Blancos.");
        obj.nombre.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(nombre)) {
        alert("El Campo Serial Activo no debe contener solo Caracteres Repetidos.");
        obj.nombre.focus();
        return false;
    }
    var version = obj.version.value;
    if (!version) {
        alert("Debe de ingresar la Versión del Sistema Operativo");
        obj.version.focus();
        return false;
    }
    if (version.length < 2){
		alert("Faltan dígitos en la Versón del Sistema Operativo");
		obj.version.focus();
		return (false);
	}
    if (version.trim() == "") {
        alert("El Campo Serial Activo No debe contener solo Espacios en Blancos.");
        obj.version.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(version)) {
        alert("El Campo Serial Activo no debe contener solo Caracteres Repetidos.");
        obj.version.focus();
        return false;
    }
}

//Validar Equipo
function Equipo(obj) {
    var marca = obj.marca.value;
    if (marca==0){
        alert("Debe de seleccionar la Marca");
        return (false);
    }
    var modelo = obj.modelo.value;
    if (modelo==0){
        alert("Debe de seleccionar el Modelo");
        return (false);
    }
    var serial = obj.serial.value;
    if (!serial) {
        alert("Debe de ingresar el Serial");
        obj.serial.focus();
        return false;
    }
    if (serial.length < 2){
		alert("Faltan dígitos en el Serial");
		obj.serial.focus();
		return (false);
	}
    if (serial.trim() == "") {
        alert("El Campo Serial No debe contener solo Espacios en Blancos.");
        obj.serial.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(serial)) {
        alert("El Campo Serial no debe contener solo Caracteres Repetidos.");
        obj.serial.focus();
        return false;
    }
    var serialA = obj.serialA.value;
    if (!serialA) {
        alert("Debe de ingresar el Serial Activo");
        obj.serialA.focus();
        return false;
    }
    if (serialA.length < 2){
		alert("Faltan dígitos en el Serial Activo");
		obj.serialA.focus();
		return (false);
	}
    if (serialA.trim() == "") {
        alert("El Campo Serial Activo No debe contener solo Espacios en Blancos.");
        obj.serialA.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(serialA)) {
        alert("El Campo Serial Activo no debe contener solo Caracteres Repetidos.");
        obj.serialA.focus();
        return false;
    }
    var cpu = obj.cpu.value;
    if (!cpu) {
        alert("Debe de ingresar el Modelo del Procesador");
        obj.cpu.focus();
        return false;
    }
    if (cpu.length < 2){
        alert("Faltan dígitos en el Modelo del Procesador");
        obj.cpu.focus();
        return (false);
    }
    if (cpu.trim() == "") {
        alert("El Campo Modelo del CPU No debe contener solo Espacios en Blancos.");
        obj.cpu.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(cpu)) {
        alert("El Campo CPU no debe contener solo Caracteres Repetidos.");
        obj.cpu.focus();
        return false;
    }
    var velocidad = obj.velocidad.value;
    if (!velocidad) {
        alert("Debe de ingresar la Velocidad del Procesador");
        obj.velocidad.focus();
        return false;
    }
    if (velocidad.length < 2 ){
        alert("El campo debe contener solo 2 digitos");
        obj.velocidad.focus();
        return (false);
    }
    if (velocidad.trim() == "") {
        alert("El Campo Velocidad No debe contener solo Espacios en Blancos.");
        obj.velocidad.focus();
        return false;
    }
    if (/^([a-zA-Z0-9-.])\1+$/.test(velocidad)) {
        alert("El Campo Velocidad no debe contener solo Caracteres Repetidos.");
        obj.velocidad.focus();
        return false;
    }
    var ram = obj.ram.value;
    if (!ram) {
        alert("Debe de ingresar La Memoria RAM");
        obj.ram.focus();
        return false;
    }
    if (ram.length < 2){
        alert("Faltan dígitos en La Memoria RAM");
        obj.ram.focus();
        return (false);
    }
    if (ram.trim() == "") {
        alert("El Campo Modelo del CPU No debe contener solo Espacios en Blancos.");
        obj.cpu.focus();
        return false;
    }
    if (/^([a-zA-Z0-9-.])\1+$/.test(ram)) {
        alert("El Campo ram no debe contener solo Caracteres Repetidos.");
        obj.ram.focus();
        return false;
    }
    var disco = obj.disco.value;
    if (!disco) {
        alert("Debe de ingresar el Disco Duro ");
        obj.disco.focus();
        return false;
    }
    if (disco.length < 2){
        alert("Faltan dígitos en el Disco Duro");
        obj.disco.focus();
        return (false);
    }
    if (disco.trim() == "") {
        alert("El Campo del Disco Duro No debe contener solo Espacios en Blancos.");
        obj.disco.focus();
        return false;
    }
    if (/^([a-zA-Z0-9])\1+$/.test(disco)) {
        alert("El Campo Disco Duro no debe contener solo Caracteres Repetidos.");
        obj.disco.focus();
        return false;
    }
    var tipo = obj.tipo.value;
    if (!tipo) {
        alert("Debe de seleccionar un Tipo de Sistema Operatvio");
        return false;
    }
    var id_so = obj.id_so.value;
    if (id_so==0){
        alert("Debe de seleccionar el Sistema Operativo");
        return (false);
    }

}

//Validacion de no permitir numeros en los campos de texto de solo letras

function soloLetras(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
        return true;
    }
    if (tecla==0){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
patron =/[a-zA-ZÑñáéíóú .*/]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    
}


//Validacion de no permitir letras en los campos de texto de solo numeros
function solonum(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
        return true;
    }
    if (tecla==0){
    return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9/*.]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

/*--------------Validacion de no permitir espacios en los campos de texto de usuario y clave del registro de Usuarios-----------------*/
function sinespacios(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-ZÑñáéíóú0-9/*._@#$%&()-]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

/*--------------Index--------------
function validar(obj) {
    var usuario = obj.usuario.value;
    if (!usuario) {
        alert("Debe de ingresar un usuario");// Alerta lanza un mensaje que sale cuando se cumple la condicion
        obj.usuario.focus();//focus hace que se seleccione el campo que se esta validando
        return false;
    }
	
    var contrasena = obj.contrasena.value;
    if (!contrasena) {
        alert("Debe de ingresar una contraseña");
        obj.contrasena.focus();
        return false;
    }
}
*/
/*--------------Registro medicos--------------
function medicos(obj) {
    var ci = obj.ci.value;
    if (!ci) {
        alert("Debe de ingresar la cédula");
        obj.ci.focus();
        return false;
    }
    if (ci.length < 5){
		alert("Faltan dígitos en la cédula");
		obj.ci.focus();
		return (false);
	}
    var nombremed = obj.nombremed.value;
    if (!nombremed) {
        alert("Debe de ingresar un nombre");
        obj.nombremed.focus();
        return false;
    }
    if (nombremed.length < 2){
        alert("Faltan dígitos en el nombre");
        obj.nombremed.focus();
        return (false);
    }
    var apellidomed = obj.apellidomed.value;
    if (!apellidomed) {
        alert("Debe de ingresar el apellido");
        obj.apellidomed.focus();
        return false;
    }
    var sexo = obj.sexo.value;
    if (!sexo) {
        alert("Debe de seleccionar un sexo");
        return false;
    }
    var codigompps = obj.codigompps.value;
    if (!codigompps) {
        alert("Falta ingresar el código MPPS");
        obj.codigompps.focus();
        return false;
    }
    if (codigompps.length < 2){
		alert("Faltan dígitos en el código MPPS");
		obj.codigompps.focus();
		return (false);
	}
    var codigocmy = obj.codigocmy.value;
    if (!codigocmy) {
        alert("Falta ingresar el código CMY");
        obj.codigocmy.focus();
        return false;
    }
    if (codigocmy.length < 2){
		alert("Faltan dígitos en el código CMY");
		obj.codigocmy.focus();
		return (false);
	}

}*/

/*--------------Registro pacientes--------------
function paciente(obj) {
    var nombrepaci = obj.nombrepaci.value;
    if (!nombrepaci) {
        alert("Debe de ingresar el nombre del paciente");
        obj.nombrepaci.focus();
        return false;
    }
    if (nombrepaci.length < 2){
        alert("Faltan dígitos en el nombre");
        obj.nombrepaci.focus();
        return (false);
        }
    var apellidopaci = obj.apellidopaci.value;
    if (!apellidopaci) {
        alert("Debe de ingresar los apellido del paciente");
        obj.apellidopaci.focus();
        return false;
    }

    if (apellidopaci.length < 2){
    alert("Faltan dígitos en el apellido");
    obj.apellidopaci.focus();
    return (false);
    }
    var sexo = obj.sexo.value;
    if (!sexo) {
        alert("Debe de seleccionar un sexo");
        return false;
    }
    var fecha_nacimiento = obj.fecha_nacimiento.value;
    if (!fecha_nacimiento) {
        alert("Debe de ingresar la fecha de nacimiento");
        obj.fecha_nacimiento.focus();
        return false;
    }
    var edad = obj.edad.value;
    if (edad > 12){
        alert("El paciente debe de tener una edad menor o igual a 12");
        obj.edad.focus();
        return false;
    }
    var edad = obj.edad.value;
    if (edad < 0){
        alert("El paciente debe de tener una edad mayor o igual a 0");
        obj.edad.focus();
        return false;
    }
    var combo1 = obj.combo1.value;
    if (combo1==0){
        alert("Debe de seleccionar el estado");
        return false;
    }
    var combo2 = obj.combo2.value;
    if (combo2==0){
        alert("Debe de seleccionar el municipio");
        return false;
    }
    var combo3 = obj.combo3.value;
    if (combo3==0){
        alert("Debe de seleccionar la parroquia");
        return false;
    }
    var direccion = obj.direccion.value;
    if (direccion==0){
        alert("Debe de colocar la direccion");
        return false;
    }
}*/
/*----------------Validaciones para el calendario de fecha de nacimiento y edad del paciente-----------
function evitarnumero(){
    if(edad==119){
        document.getElementById("edad").value = " ";
    }
}
function calcular_edad(){
    var f=document.forma;
    var fecha_nacimiento = f.fecha_nacimiento.value;

    //OPTENER EL DIA
    var gui = fecha_nacimiento.charAt(2);//buscar el primer guion
    if(gui=="-"){
        var dia_nacim = fecha_nacimiento.substring(0, 2);//los 2 primeros digitos
        var n_dia = dia_nacim.length;//numero de digitos del dia
        var t_dia = (n_dia + 1);//se suma 1 a la posicion del dia
    }else{
        var dia_nacim = fecha_nacimiento.substring(0, 1);//el primer digito
        var n_dia = dia_nacim.length;//numero de digitos del dia
        var t_dia = (n_dia + 1);//se suma 1 a la posicion del dia
    }
    //OPTENER EL AÑO
    var long = fecha_nacimiento.length;//numero total de digitos de la fecha
    var ult = fecha_nacimiento.lastIndexOf('-');//posicion del ultimo guion
    var uno = (ult + 1);//se suma 1 a la posicion del guion para no contar el mismo guion
    var anio_nacim = fecha_nacimiento.substring(uno, long);//se optiene los 4 ultimos numeros
    //OPTENER EL MES
    var mes_nacim = fecha_nacimiento.substring(t_dia, ult);//los digitos intermedio

    fecha_hoy = new Date();
    ahora_anio = fecha_hoy.getYear();
        ahora_mes = fecha_hoy.getMonth();
        ahora_dia = fecha_hoy.getDate();
        edad = (ahora_anio + 1900) - anio_nacim;

    if ( ahora_mes < (mes_nacim - 1)){
            edad--;
        }
        if (((mes_nacim - 1) == ahora_mes) && (ahora_dia < dia_nacim)){ 
            edad--;
        }
        if (edad > 1900){
            edad -= 1900;
        }
    if(edad < 0){
        document.getElementById("edad").value = edad;
        
    }else{
        document.getElementById("edad").value = edad;
    }

}

function solonumfecha(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    // Patron de entrada, en este caso no acepta nada
    patron =/[]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}*/
/*--------------Registro Especialidad--------------
function especialidadMed(obj){    
	var especialidad = obj.especialidad.value;
    if (!especialidad) {
        alert("Debe de ingresar una especialidad");
        obj.especialidad.focus();
        return false;
    }
    if (especialidad.length < 5){
        alert("Faltan dígitos en la especialidad");
        obj.especialidad.focus();
        return (false);
        }
}*/

/*--------------Registro patologia--------------
function patologiaPaci(obj){    
	var patologia = obj.patologia.value;
    if (!patologia) {
        alert("Debe de ingresar una patología");
        obj.patologia.focus();
        return false;
    }
    if (patologia.length < 3){
        alert("Faltan dígitos en la patologia");
        obj.patologia.focus();
        return (false);
        }
}*/

/*--------------Registro Estado--------------
function MaestroEstado(obj){    
	var estado = obj.estado.value;
    if (!estado) {
        alert("Debe de ingresar un estado");
        obj.estado.focus();
        return false;
    }
    if (estado.length < 2){
        alert("Faltan dígitos en el estado");
        obj.estado.focus();
        return (false);
        }
}*/

/*--------------Registro Municipio--------------
function MaestroMunicipio(obj){
    var id_estado = obj.id_estado.value;
    if (id_estado==0){
        alert("Debe de seleccionar el estado");
        return false;
    }
	var municipio = obj.municipio.value;
    if (municipio.length < 3){
        alert("Faltan dígitos en el municipio");
        obj.municipio.focus();
        return (false);
        }
    if (!municipio) {
        alert("Debe de ingresar un municipio");
        obj.municipio.focus();
        return false;
    }
}*/

/*--------------Registro Parroquia--------------
function MaestroParroquia(obj){    
	var combo1 = obj.combo1.value;
    if (combo1==0){
        alert("Debe de seleccionar el estado");
        return false;
    }
    var id_municipio = obj.id_municipio.value;
    if (id_municipio==0){
        alert("Debe de seleccionar el municipio");
        return false;
    }
    var parroquia = obj.parroquia.value;
    if (!parroquia) {
        alert("Debe de ingresar una parroquia");
        obj.parroquia.focus();
        return false;
    }
    if (parroquia.length < 4){
        alert("Faltan dígitos en la parroquia");
        obj.parroquia.focus();
        return (false);
    }
}*/
/*--------------Actualizar Municipio--------------
function ActualizarMunicipio(obj){    
    var municipio = obj.municipio.value;
    if (!municipio) {
        alert("Debe de ingresar un municipio");
        obj.municipio.focus();
        return false;
    }
    if (municipio.length < 2){
        alert("Faltan dígitos en la municipio");
        obj.municipio.focus();
        return (false);
    }
}*/
/*--------------Actualizar Parroquia--------------
function ActualizarParroquia(obj){    
    var parroquia = obj.parroquia.value;
    if (!parroquia) {
        alert("Debe de ingresar una parroquia");
        obj.parroquia.focus();
        return false;
    }
    if (parroquia.length < 2){
        alert("Faltan dígitos en la parroquia");
        obj.parroquia.focus();
        return (false);
    }
}*/

/*--------------Citas--------------------
function citas(obj){    
	var paciente_cita = obj.paciente_cita.value;
    if (!paciente_cita) {
        alert("Debe de buscar un paciente");
        obj.paciente_cita.focus();
        return false;
    }
	var medico_cita = obj.medico_cita.value;
    if (!medico_cita) {
        alert("Debe de buscar el médico");
		obj.medico_cita.focus();
        return false;
    }
    
    /*var especialidad= obj.especialidad.value;
    if(!especialidad){
        alert("Se necesita la Especialidad para buscar el medico");
        obj.especialidad.focus();
        return false;
    }

    var fecha= obj.fecha.value;
	if(!fecha){
		alert("Se necesita la fecha para continuar");
		obj.fecha.focus();
		return false;
	}
    var hora= obj.hora.value;
	if(!hora){
		alert("Se necesita la hora para continuar");
		obj.hora.focus();
		return false;
	}
    var tipodecita = obj.tipodecita.value;
    if (!tipodecita) {
        alert("Defina el tipo de cita");
        return false;
    }

    /*var tipodecita = obj.tipodecita.value;
    if (tipodecita == Referencia) {

	//var medico_referencia = obj.medico_referencia.value;
    if (!medico_referencia) {
        alert("Debe de ingresar el médico que referencia");
        return false;
    }

    //var observacion_paci_ref = obj.observacion_paci_ref.value;
    if (!observacion_paci_ref) {
        alert("Debe de ingresar la observación de el médico que referencia");
        return false;
        }
    }

    var tipodecita = obj.tipodecita.value;
    if (tipodecita == Seguimiento) {

    var observacion_paci_seg = obj.observacion_paci_seg.value;
    if (!observacion_paci_seg) {
        alert("Debe de ingresar la observación de el paciente ");
        return false;
        }
    }   
}*/

/*----------------------------- Validacion proceso cita------------------------
function proceso_cita(obj){
    var fechanueva = obj.fechanueva.value;
    if (!fechanueva) {
        alert("Debe de ingresar la nueva fecha de la cita");
        obj.fechanueva.focus();
        return false;
    }
    var hora = obj.hora.value;
    if (!hora) {
        alert("Debe de ingresar la hora de la cita");
        obj.hora.focus();
        return false;
    }
}*/

/*---------------------Cambiar contraseña--------------------------
function clave(obj) {
    var actualPass = obj.actualPass.value;
    if (!actualPass) {
        alert("Debe de ingresar la contraseña actual");
        obj.actualPass.focus();
        return false;
    }
    var nuevaPass = obj.nuevaPass.value;
    if (!nuevaPass) {
        alert("Debe de ingresar la nueva contraseña");
        obj.nuevaPass.focus();
        return false;
    }
    var confirmarPass = obj.confirmarPass.value;
    if (!confirmarPass) {
        alert("Debe de confirmar la Nueva contraseña");
        obj.confirmarPass.focus();
        return false;
    }
    if (confirmarPass != nuevaPass) {
        alert("Las contraseñas deben de ser iguales");
        obj.confirmarPass.focus();
        return false;
    }
}*/
/*----------------------------- Validacion registrar usuario------------------------
function usuario(obj){
    var ciusuario = obj.ciusuario.value;
    if (!ciusuario) {
        alert("Debe de ingresar la cedula del usuario");
        obj.ciusuario.focus();
        return false;
    }
    var nombreusu = obj.nombreusu.value;
    if (!nombreusu) {
        alert("Debe de ingresar el nombre del usuario");
        obj.nombreusu.focus();
        return false;
    }
    var apellidosusu= obj.apellidosusu.value;
    if (!apellidosusu) {
        alert("Debe de ingresar el apellido del usuario");
        obj.apellidosusu.focus();
        return false;
    }
    var nombreusuario = obj.nombreusuario.value;
    if (!nombreusuario) {
        alert("Debe de ingresar el nombre de usuario");
        obj.nombreusuario.focus();
        return false;
    }
    var claveusuario = obj.claveusuario.value;
    if (!claveusuario) {
        alert("Debe de ingresar la clave");
        obj.claveusuario.focus();
        return false;
    }
}*/
/*----------------------Validacion de no permitir letras en los campos de texto de cedula y codigo del medico------------
function solonum(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
        return true;
    }
    if (tecla==0){
    return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}*/
/*--------------Validacion de no permitir numeros en los campos de texto de nombre y apellido de medicos y pacientes-----------------
function soloLetras(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
    return true;
    }
    if (tecla==0){
    return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-ZÑñáéíóú ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}*/
/*--------------Validacion de no permitir numeros en el campo de texto de especialidad-----------------
function Espe_Pat(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-ZÑñáéíóú/ ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}*/


/*--------------Validacion de no permitir espacios en los campos de texto de usuario y clave del registro de Usuarios-----------------
function sinespacios(e){
    var tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite 
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-ZÑñáéíóú0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}*/

/*------------------Funcion para que las letras introducidas en nombre y apellido de medico y paciente se vuelvan mayusculas
function mayus(w) {
    w.value = w.value.toUpperCase();
}
/*
/*-----------------Ventanas modales de medico----------------
function modalmedic(obj){
    var ci = obj.ci.value;
    if (!ci) {
        alert("Debe de ingresar la cédula");
        obj.ci.focus();
        return false;
    }
    if (ci.length < 5){
		alert("Faltan dígitos en la cédula");
		obj.ci.focus();
		return (false);
    }
}*/
/*-----------------Ventana modal eliminar de medicos----------------
function eliminarmedic(obj){
    var ci = obj.ci.value;
    if (!ci) {
        alert("Debe de ingresar la cédula");
        obj.ci.focus();
        return false;
    }
    if (ci.length < 5){
		alert("Faltan dígitos en la cédula");
		obj.ci.focus();
		return (false);
    }
    var cerrar = confirm("¿Desea eliminar este resgistro?");
	if (cerrar){
		return true;
	}else{
		return false;
	}
}
/*-----------------Ventanas modales de especialidad----------------
function modalespecialidad(obj){
    var especialidad = obj.especialidad.value;
    if (!especialidad) {
        alert("Debe de ingresar el nombre de la especialidad");
        obj.especialidad.focus();
        return false;
    }
}
/*-----------------Ventana modal eliminar de especialidad----------------
function eliminarespecialidad(obj){
    var especialidad = obj.especialidad.value;
    if (!especialidad) {
        alert("Debe de ingresar el nombre de la especialidad");
        obj.especialidad.focus();
        return false;
    }
    var cerrar = confirm("¿Desea eliminar este resgistro?");
	if (cerrar){
		return true;
	}else{
		return false;
	}
}
/*-----------------Ventanas modales de patologia----------------
function modalespatologia(obj){
    var patologia = obj.patologia.value;
    if (!patologia) {
        alert("Debe de ingresar el nombre de la patologia");
        obj.patologia.focus();
        return false;
    }
}
/*-----------------Ventana modal eliminar de patologia----------------
function eliminarpatologia(obj){
    var patologia = obj.patologia.value;
    if (!patologia) {
        alert("Debe de ingresar el nombre de la patologia");
        obj.patologia.focus();
        return false;
    }
    var cerrar = confirm("¿Desea eliminar este resgistro?");
	if (cerrar){
		return true;
	}else{
		return false;
	}
}*/