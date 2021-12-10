/*let btnHambugrguer = document.querySelector("#menu-hamburguer") dessa forma pode pegar qualquer tipo de atributo*/

let btnHambugrguer = document.getElementById("menu-hamburguer")

btnHambugrguer.addEventListener('click', function(){
    document.getElementById("menu").classList.toggle("menu-show")
})