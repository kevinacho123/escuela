/*
	variables para abrir el popup de de compra
*/ 

var overlay = document.getElementById("overlay");
var popup = document.getElementById("popup");
var	btnCerrarPopup = document.getElementById("btn-cerrar-popup");
var btnAbrirPopup0 = document.getElementById("btncomprar1");
var btnAbrirPopup1 = document.getElementById("btncomprar2");
var btnAbrirPopup2 = document.getElementById("btncomprar3");
var btnAbrirPopup3 = document.getElementById("btncomprar4");
var btnAbrirPopup4 = document.getElementById("btncomprar5");
var btnAbrirPopup5 = document.getElementById("btncomprar6");

btnCerrarPopup.addEventListener("click", function(e){
	e.preventDefault();
	overlay.classList.remove("active");
	popup.classList.remove("active");
});

btnAbrirPopup0.addEventListener("click", function(){
	overlay.classList.add("active");
	popup.classList.add("active");
});

btnAbrirPopup1.addEventListener("click", function(){
	overlay.classList.add("active");
	popup.classList.add("active");
});

btnAbrirPopup2.addEventListener("click", function(){
	overlay.classList.add("active");
	popup.classList.add("active");
});

btnAbrirPopup3.addEventListener("click", function(){
	overlay.classList.add("active");
	popup.classList.add("active");
});

btnAbrirPopup4.addEventListener("click", function(){
	overlay.classList.add("active");
	popup.classList.add("active");
});

btnAbrirPopup5.addEventListener("click", function(){
	overlay.classList.add("active");
	popup.classList.add("active");
});

/*
	variables para abrir el popup de datos despues de apretar el botón de compra
*/

var overlay__datos = document.getElementById("overlay__datos");
var popup1 = document.getElementById("popup1");
var btnCerrarDatos = document.getElementById("btn-cerrar-popup1");
var btnAbrirDatos = document.getElementById("abrir__datos");

btnCerrarDatos.addEventListener("click",function(){
	overlay__datos.classList.remove("active");
	popup1.classList.remove("active");
});

btnAbrirDatos.addEventListener("click",function(e){
	e.preventDefault();
	overlay.classList.remove("active");
	popup.classList.remove("active");
	overlay__datos.classList.add("active");
	popup1.classList.add("active");
});

var btnAbrirAPI = document.getElementById("abrir__API");

btnAbrirAPI.addEventListener("click", function (e){
	e.preventDefault();
	alert("Función no disponible");
});