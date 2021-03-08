/*Boton de cambio de tema */

const btnSwitch = document.querySelector("#nav-switch");

btnSwitch.addEventListener("click", () => {
    document.body.classList.toggle('dark')
    btnSwitch.classList.toggle('active')


});


/*Acordeon */
const btnToggle = document.querySelector("#toggle-colapse");
const leftColapse = document.querySelector("#colapse-side-left");
const iconColapse = document.querySelector('.colapse-icon');
btnToggle.addEventListener("click", () => {
   
leftColapse.classList.toggle('colapse-side-left-active') 
iconColapse.classList.toggle('colapse-icon-active')


});