// MENU HAMB

const btnMenu = document.getElementById("btnMenu");
const menu = document.querySelector(".menu");

btnMenu.addEventListener("click", function () {

    if (menu.style.display === "block") {

        menu.style.display = "none";

    } else {

        menu.style.display = "block";

    }

});




const titulos = document.querySelectorAll(".titulo");

titulos.forEach(function (titulo) {

    titulo.addEventListener("click", function () {

        const item = this.parentElement;

        item.classList.toggle("activo");

    });

});