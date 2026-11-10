// MENU HAMBURGUESA

const btnMenu = document.getElementById("btnMenu");
const menu = document.querySelector(".menu");

if (btnMenu && menu) {

    btnMenu.addEventListener("click", function () {

        if (menu.style.display === "block") {

            menu.style.display = "none";

        } else {

            menu.style.display = "block";

        }

    });

}


// ACCORDION

const titulos = document.querySelectorAll(".titulo");

titulos.forEach(function (titulo) {

    titulo.addEventListener("click", function () {

        const item = this.parentElement;

        item.classList.toggle("activo");

    });

});


// VALIDACION FORMULARIO

const formulario = document.querySelector("form");

if (formulario) {

    formulario.addEventListener("submit", function (e) {

        const nombre = document.getElementById("nombre").value.trim();
        const correo = document.getElementById("correo").value.trim();
        const mensaje = document.getElementById("mensaje").value.trim();

        if (nombre.length < 3) {

            alert("El nombre debe tener al menos 3 caracteres");
            e.preventDefault();
            return;

        }

        if (correo === "") {

            alert("Debe ingresar un correo");
            e.preventDefault();
            return;

        }

        if (mensaje.length < 5) {

            alert("El mensaje es demasiado corto");
            e.preventDefault();

        }

    });

}