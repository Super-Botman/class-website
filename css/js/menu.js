const burger = document.querySelector('.burger')
const menu = document.querySelector('.menu')
const sous = document.querySelector('.sous')
const menu_deroulant = document.querySelector('#déroulant')
console.log(menu_deroulant)
burger.addEventListener('click' , ()=>{
    burger.classList.toggle('active')
    menu.classList.toggle('active')
})
menu_deroulant.addEventListener('click' , ()=>{
    console.log(menu_deroulant)
    sous.classList.toggle('active')
    menu.classList.toggle('active_open')
})

