let a = document.getElementById("loginBtn");
let b = document.getElementById("registerBtn");
let x = document.getElementById("login");
let y = document.getElementById("register");

function login() {
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
}

function register() {
    x.style.left = "-510px";
    y.style.right = "10px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
}

function myMenuFunction() {
    let i = document.getElementById("navMenu");

    if (i.className === "nav__menu") {
        i.className += " responsive";
    } else {
        i.className = "nav__menu";
    }
}

function reg() {
    let nombre = document.getElementsByName("name_reg")[0];
    let user_reg = document.getElementsByName("user_reg")[0];
    let email = document.getElementsByName("email_reg")[0];
    let pass_reg = document.getElementsByName("pass_reg")[0];

    if (nombre.value === "" || user_reg.value === "" || email.value === "" || pass_reg.value === "") {
        alert("Debe completar todos los datos para el registro.");
    } else {
        alert("Registro completado.");
        // Aquí puedes agregar la lógica para enviar el formulario si es necesario
    }
}

function log() {
    let user_log = document.getElementsByName("user_login")[0];
    let pass_log = document.getElementsByName("pass_login")[0];

    if (user_log.value === "" || pass_log.value === "") {
        alert("Debe completar todos los datos para el inicio de sesión.");
    } else {
        alert("Inicio de sesión completado.");
        // Aquí puedes agregar la lógica para iniciar sesión si es necesario
    }
}