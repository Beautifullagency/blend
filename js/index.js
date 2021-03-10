/*Boton de cambio de tema */

const btnSwitch = document.querySelector("#nav-switch");

btnSwitch.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  btnSwitch.classList.toggle("active");
});

/*Acordeon */
const btnToggle = document.querySelector("#toggle-colapse");
const leftColapse = document.querySelector("#colapse-side-left");
const iconColapse = document.querySelector(".colapse-icon");
const sideLeft = document.querySelector(".side-left");

btnToggle.addEventListener("click", () => {
 
  if (sideLeft.classList.contains("side-left-active")) {
    sideLeft.classList.remove("side-left-active");
  } else {
    setTimeout(function () {
        sideLeft.classList.add("side-left-active");
      }, 700);
  }
  leftColapse.classList.toggle("colapse-side-left-active");
  iconColapse.classList.toggle("colapse-icon-active");
});


/*ICONO ANIMADO */
/*
const element = document.querySelector('.icon-down');
element.classList.add('animate__animated', 'animate__slideInDown', 'animate__infinite',	'infinite', 'animate__slow');
*/