const header = document.getElementsByTagName("header")[0]
const body = document.getElementsByTagName("body")[0]
const nav = document.getElementById('menu')
const toggle = document.getElementById('toggleIcon')
const hamburger = document.getElementById('hamburger')

const btnHome = document.getElementById('btn_home')
const btnEmpresa = document.getElementById('btn_empresa')
const btnProducts = document.getElementById('btn_products')
const btnContacto = document.getElementById('btn_contacto')

const btnCloseLinesProducts = document.getElementById('close_products')
const imagesDesktop = document.getElementsByClassName('images_desktop')[0]
const subMenuDesktop = document.getElementsByClassName('submenu_desktop')[0]
const titleLines = document.getElementsByClassName('title_lines')
const image = document.getElementById('image')

const navigation = document.getElementById('navigation')
const subNavigation = document.getElementById('sub_navigation')

/* Cierra el seguidor de "Te llamamos ahora" */
$('#cerrar-seguidor').on('click', function(){
  $('#seguidor').slideToggle('slow');
});

$('#cerrar-seguidor-tel').on('click', function(){
  $('#seguidor-tel').slideToggle('slow');
});

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
		subNavigation.classList.add('open')
		changeImage('img/header/superfil-menu.png', 'superfil menu')
		return
	}
	
}

// HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
// DEL SCROLL HACIA ARRIBA O ABAJO
// var scrollPos = 0;
// window.addEventListener('scroll', function(){
// 	if ( (document.body.getBoundingClientRect()).top > scrollPos)
// 		showlHeader()
// 	else
// 		hidelHeader()
// 	scrollPos = (document.body.getBoundingClientRect()).top
// });

function showlHeader(){
	header.classList.remove('hide')
	header.classList.add('background')
}

function hidelHeader(){
	header.classList.add('hide')
	header.classList.remove('background')
}

btnHome.addEventListener("mouseover", function(e){
	subNavigation.classList.remove('open') 
}, false);

btnEmpresa.addEventListener("mouseover", function(e){
	subNavigation.classList.remove('open') 
}, false);

btnContacto.addEventListener("mouseover", function(e){
	subNavigation.classList.remove('open') 
}, false);

btnProducts.addEventListener('mouseenter', function(){
	openProducts()
});

body.addEventListener('click', function(){
	subNavigation.classList.remove('open') 
});

btnCloseLinesProducts.addEventListener('click', function(){
	openProducts()
});

toggle.addEventListener('click', function(){
	menuToggle()
});

function changeImage(image, alt){
	document.getElementById('image').src = image
	document.getElementById('image').alt = alt
	document.getElementById('image').classList.remove('show_image')
	setTimeout(function(){ 
		document.getElementById('image').classList.add('show_image')
	}, 100);
}

for (var i = 0; i < titleLines.length; i++) {

	titleLines[i].addEventListener('mouseover', function(e) {
		let image = 'img/header/' + e.target.attributes['data-image'].value + '-menu.png'
		let alt = 'linea ' + e.target.attributes['data-image'].value
		changeImage(image, alt)
	})

}

AOS.init();

function validateForm() {
	// Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      return true
    }
    form.classList.add('was-validated');
      return false
  });
}

showlHeader()