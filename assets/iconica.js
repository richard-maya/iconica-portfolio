// ICONICA INFO
// ------------------------------->
var iconica = {
	email: "contacto@iconica.mx",
    cel: "5217226560428",
    celFormat: "(722) 656-0428",
    address1: "Av. Benito Juárez Norte 907 Int. 2",
    address2: "Col. La Purísima. CP 52158",
    address3: "Metepec, Estado de México",
    zipCode: "52158",
    country: "México",
    days: "Lunes a Viernes",
    open: "9:00am",
    close: "5:00pm",
    developerSite: "https://iconica.mx",
    legalName: "Luis Enrique Ruíz Carvajal",
    nickName: "Icónica Studio",
    developer: "ICÓNICA STUDIO",
	facebook: "https://www.facebook.com/IconicaMx/",
	twitter: "https://twitter.com/iconicamx",
    messenger: "https://m.me/IconicaMx",
    instagram: "https://instagram.com/iconicamx",
    behance: "https://behance.net/iconicamx",
    twitterHashtag: "https://twitter.com/search?q=iconicamx",
    vimeo: "https://vimeo.com/iconicamx",
    pinterest: "https://www.pinterest.com.mx/iconicamx/",
    linkedin: "https://www.linkedin.com/company/iconica-mx",
	spotify: "http://open.spotify.com/user/3s3er30b0w8k5m0dglmltictx",
    map: "https://goo.gl/maps/ZpqiDBvDM1z"
};


// HEADER
// ------------------------------->
$(document).on("scroll", function () {
	"use strict";
	if ($(document).scrollTop() > 50) {
		$(".navbar").addClass("navbar-small");
	} else {
		$(".navbar").removeClass("navbar-small");
	}
});


// FOOTER
// ------------------------------->
function siteFooter() {
	"use strict";
    var mainContent = $('main');
    var mainContentHeight = mainContent.height();
    var mainContentWidth = mainContent.width();

    var siteFooter = $('footer');
    var siteFooterHeight = siteFooter.height();
    var siteFooterWidth = siteFooter.width();

	var d = new Date();
	var n = d.getFullYear();

    mainContent.css('margin-bottom', siteFooterHeight + 25);
	$('#info-year').html(n);
	$('#info-developer').html(iconica.developer);
}


// WOW JS
// ------------------------------->
var wow = new WOW({
    offset:       -10,
    mobile:       true
});


// SMOOTH SCROLL
// ------------------------------->
var smoothScroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	easing: 'easeInOutQuart'
});


// PARALLAX
// ------------------------------->
if($(window).width() > 768){
	"use strict";
	if($('#intro').length){
		$('#intro').parallax({
			imageSrc: 'https://source.unsplash.com/user/luis_ruiz',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#branding').length){
		$('#branding').parallax({
			imageSrc: 'assets/img/services/estudio-branding-diseno-grafico-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#startups').length){
		$('#startups').parallax({
			imageSrc: 'assets/img/services/agencia-marketing-digital-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#video').length){
		$('#video').parallax({
			imageSrc: 'assets/img/services/edicion-videos-corporativos-realidad-aumentada-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#logo-design').length){
		$('#logo-design').parallax({
			imageSrc: 'assets/img/services/diseno-logotipos-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#brandbook').length){
		$('#brandbook').parallax({
			imageSrc: 'assets/img/services/manual-identidad-corporativa-toluca-metepec.png',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#web-design').length){
		$('#web-design').parallax({
			imageSrc: 'assets/img/services/diseno-paginas-web-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#social-media').length){
		$('#social-media').parallax({
			imageSrc: 'assets/img/services/publicidad-redes-sociales-facebook.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#posicionamiento-google').length){
		$('#posicionamiento-google').parallax({
			imageSrc: 'assets/img/services/publicidad-anuncios-google.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#paid-campaigns').length){
		$('#paid-campaigns').parallax({
			imageSrc: 'assets/img/services/publicidad-facebook-instagram-twitter.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#videos-corporativos').length){
		$('#videos-corporativos').parallax({
			imageSrc: 'assets/img/services/videos-corporativos-institucionales-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#fotografia-producto').length){
		$('#fotografia-producto').parallax({
			imageSrc: 'assets/img/services/fotografia-producto-institucional-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#realidad-aumentada').length){
		$('#realidad-aumentada').parallax({
			imageSrc: 'assets/img/services/realidad-aumentada-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#diseno-apps').length){
		$('#diseno-apps').parallax({
			imageSrc: 'assets/img/services/diseno-apps-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
	if($('#desarrollo-apps').length){
		$('#desarrollo-apps').parallax({
			imageSrc: 'assets/img/services/desarrollo-apps-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center',
		});
	}
	if($('#diseno-interfaz').length){
		$('#diseno-interfaz').parallax({
			imageSrc: 'assets/img/services/diseno-interfaz-aplicaciones-toluca-metepec.jpg',
			zIndex: 1,
			position: 'center'
		});
	}
}


// WAYPOINTS
// ------------------------------->
$(document).ready(function() {
	"use strict";
	if ($('#contact').length) {
		$("#contact").waypoint(function(direction){
			if(direction === 'down'){
				$(".navbar").addClass('yellow-navbar');
			} else {
				$(".navbar").removeClass('yellow-navbar');
			}
		}, {offset: '20px'});
	}
});


// GET DATE
// ------------------------------->
function privacyDate() {
	"use strict";
	var d = new Date();
	var n = d.getFullYear();
	
	var month = new Array();
	month[0] = "Enero";
	month[1] = "Febrero";
	month[2] = "Marzo";
	month[3] = "Abril";
	month[4] = "Mayo";
	month[5] = "Junio";
	month[6] = "Julio";
	month[7] = "Agosto";
	month[8] = "Septiembre";
	month[9] = "Octubre";
	month[10] = "Noviembre";
	month[11] = "Diciembre";
	var m = month[d.getMonth()];
	
	$(".current-year").html(n);
	$(".current-month").html(m);
}


// DOCUMENT READY
// ------------------------------->
$(document).ready(function() {
	"use strict";
	$('.info-facebook').attr("href", iconica.facebook);
	$('.info-twitter').attr("href", iconica.twitter);
	$('.info-instagram').attr("href", iconica.instagram);
	$('.info-pinterest').attr("href", iconica.pinterest);
	$('.info-behance').attr("href", iconica.behance);
	$('.info-linkedin').attr("href", iconica.linkedin);
	$('.info-vimeo').attr("href", iconica.vimeo);
	$('.info-spotify').attr("href", iconica.spotify);
	$('#info-map').attr("href", iconica.map);
	$('#info-address1').html(iconica.address1);
	$('#info-address2').html(iconica.address2);
	$('#info-address3').html(iconica.address3);
	$('#info-cel').attr("href", 'https://wa.me/' + iconica.cel);
	$('#info-celFormat').html(iconica.celFormat);
	$('a.info-email').attr("href", 'mailto:' + iconica.email);
	$('span.info-email').html(iconica.email);
	$('a.developer-site').attr("href", iconica.developerSite);
	$('a.developer-site').html(iconica.developerSite);
	$('.developer-nick-name').html(iconica.nickName);
	$('span.legal-name').html(iconica.legalName);
	$('span.address1').html(iconica.address1);
	$('span.address2').html(iconica.address2);
	$('span.address3').html(iconica.address3);

    siteFooter();
	$(window).resize(function() {
		siteFooter();
	});
	
	if($('.current-year').length){
		privacyDate();
	}

    wow.init();
});
