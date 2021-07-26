const header = document.getElementsByTagName("header")[0]
const body = document.getElementsByTagName("body")[0]
const nav = document.getElementById('menu')
const toggle = document.getElementById('toggleIcon')
const hamburger = document.getElementById('hamburger')

const btnEmpresa = document.getElementById('btn_empresa')
const btnProducts = document.getElementById('btn_products')
const btnDistribuidores = document.getElementById('btn_distribuidores')
const btnDescargas = document.getElementById('btn_descargas')
const btnContacto = document.getElementById('btn_contacto')

const btnCloseLinesProducts = document.getElementById('close_products')
const imagesDesktop = document.getElementsByClassName('images_desktop')[0]
const subMenuDesktop = document.getElementsByClassName('submenu_desktop')[0]
const titleLines = document.getElementsByClassName('title_lines')
const image = document.getElementById('image')

const navigation = document.getElementById('navigation')
const subNavigation = document.getElementById('sub_navigation')

function menuToggle() {
	nav.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (hamburger.classList.contains("fa-bars")) {
		hamburger.classList.remove('fa-bars')
		hamburger.classList.add('fa-times')
	} else {
		hamburger.classList.add('fa-bars')
		hamburger.classList.remove('fa-times')
		navigation.classList.remove('translate')
		subNavigation.classList.remove('translate')
	}
}

function openProducts() {

	if (document.body.getBoundingClientRect().width < 1024) { // chequea el ancho de la pantalla
		navigation.classList.toggle('translate')
		subNavigation.classList.toggle('translate')
		return
	} else {
		subNavigation.classList.toggle('open')
		changeImage('img/header/superfil-menu.png', 'superfil menu')
		return
	}
	
}

var scrollPos = 0;
window.addEventListener('scroll', function(){
	if ( (document.body.getBoundingClientRect()).top > scrollPos)
		showlHeader()
  else
  	hidelHeader()
  	scrollPos = (document.body.getBoundingClientRect()).top
});

function showlHeader(){
	header.classList.remove('hide')
	header.classList.add('background')
}

function hidelHeader(){
	header.classList.add('hide')
	header.classList.remove('background')
}

//funcion para cualquier clic en el documento
document.addEventListener("click", function(e){
//obtiendo informacion del DOM para  
var clic = e.target;
if(subNavigation.classList == "open" && clic != btnProducts && clic != imagesDesktop && clic != image  && clic != subMenuDesktop ){
 // subNavigation.classList.remove('open');
 subNavigation.classList.toggle('open')
} 
}, false);

btnProducts.addEventListener('click', function(){
	openProducts()
});

btnCloseLinesProducts.addEventListener('click', function(){
	openProducts()
});

toggle.addEventListener('click', function(){
	menuToggle()
});

function changeImage(image, alt){
  document.getElementById('image').src = image;
  document.getElementById('image').alt = alt;
}

for (var i = 0; i < titleLines.length; i++) {

  titleLines[i].addEventListener('mouseover', function(e) {
  	let image = 'img/header/' + e.target.attributes['data-image'].value + '-menu.png'
  	let alt = 'linea ' + e.target.attributes['data-image'].value
  	changeImage(image, alt)
  });

}

AOS.init();





