$(document).ready(function() {



	// $(window).scroll(function(){  
 //        $('.nav.nav_fijo').stop( true, true ).fadeIn(400,function(){
 //        	setTimeout("ocultarMenu();",3000 );	
 //        });
		
 //    });  	


var device = navigator.userAgent

	if (device.match(/iPhone|iPad|iPod/i)
		|| device.match(/Ipod/i)
		)
	 { 

		$(".ipn").hide();

	}


	else
	 { 

		$(".ipn").hide();

	}







	$(".ul_desplegable li a").click(function (e){
	
		if ($(".nav ul").hasClass("open") ) {
			//if(!$(".nav").hasClass('nav_fijo'))
				//salto = $("header nav").outerHeight() ;
			$(".nav ul").removeClass("open").addClass("close"); 
								
      	} else {
			$(".nav ul").removeClass("close").addClass("open");
				
      	}

      	if (!$(this).hasClass("no_follow") )
      		irAseccion(e,this);	
	}); 



	// $(".nav").mouseenter(function(event) {
	// 	sobreMenu = true;
	// });

	// $(".nav").mouseleave(function(event) {
	// 	sobreMenu = false;
	// });

	$(window).scroll( cambiarSectionName ) ;

	$("#irArriba").hide() ;
	//$("header nav a.option").click( irAseccion ) ;
	$("#irArriba").click( irArriba ) ;
	salto = $("header nav").outerHeight();


// $(document).ready( iniciar );
// var sobreMenu = false;
// function ocultarMenu(){
// 	if(!sobreMenu)
// 		$('.nav.nav_fijo').fadeOut(400);
// 	else
// 		setTimeout("ocultarMenu();",3000 );
// }

var salto = 0 ;

function iniciar()	{
	
	//$("body > header").css( "position" ,"fixed" ) ;
	
	//var alturaHeader = $("header").height() + parseInt( $("header").css( "padding-top") ) ;
	//$("body").css( "padding-top" , alturaHeader + "px" ) ;
	
	//$("#irArriba").remove() ;
		
	
}

function irAseccion(e,element)	{

	e.preventDefault() ;
	
	var idSeccion = $(element).attr("href") ;
	var seccion = $(idSeccion) ;
	var coords = seccion.offset() ;
	var posY = coords.top - salto ;
	$("#irArriba").fadeIn() ;
	
	$("html,body").stop(true).animate( { scrollTop: posY } , 1500 , "easeOutQuart" ) ;


	var idseccionTitle = $(element).attr("title") ;
	$("#situacion").text(idseccionTitle) ;





}


function irArriba(e)	{
	
	e.preventDefault() ;
	$("html,body").stop(true).animate( { scrollTop: 0 } , 1500 , "easeOutQuart" ) ;

	if ($(".nav ul").hasClass("open") ) {
								
			$(".nav ul").removeClass("open").addClass("close"); 
								
      	} 
	
}

 var cbpAnimatedHeader = (function() {

     var docElem = document.documentElement,
         header = document.querySelector( '.nav' ),
         didScroll = false,
         changeHeaderOn = 340;

     function init() {
         window.addEventListener( 'scroll', function( event ) {
             if( !didScroll ) {
                 didScroll = true;
                 setTimeout( scrollPage, 50 );
             }
         }, false );
     }

     function scrollPage() {
         var sy = scrollY();
         if ( sy >= changeHeaderOn ) {
 			//$(".nav").addClass('nav_fijo');
 			salto = $("header nav li").outerHeight();
 			$("#irArriba").fadeIn(400) ;
         }
         else {
 			//$(".nav").removeClass('nav_fijo');
 			salto = $("header nav").outerHeight();
 			$("#irArriba").fadeOut(400) ;
         }
         didScroll = false;
     }

     function scrollY() {
         return window.pageYOffset || docElem.scrollTop;
     }

     init();

 })();

$(document).ready( parallax ) ;


function parallax()	{	

	$(window).scroll( desplazarConParallax ) ;

	
	function desplazarConParallax()	{
	
		var scrolled = $(window).scrollTop() ;


		if ( scrolled > ($("#sec3").position().top - window.innerHeight)) {
			scrolled -= ($("#sec3").position().top - window.innerHeight);

			$("#sec3").css("background-position" , "0px " + -(scrolled * .5 - 500) + "px" ) ;

		}

		scrolled = $(window).scrollTop() ;

		if ( scrolled > ($("#sec4").position().top - window.innerHeight)) {
			scrolled -= ($("#sec4").position().top - window.innerHeight);

			$("#sec4").css("background-position" , "0px " + -(scrolled * .3 -200) + "px" ) ;

		}	
		
		
	}

}
var diferenciasAnim = false;
var mapAnim = false;
var partnerAnim = false;
var sec5Top = 0;
var ocultandoContenidoFijo = false;

function cambiarSectionName(e,element)	{

	$('section').each(function(index){

		var element = $('section')[index];
		var scrolled = $(window).scrollTop() ;
		
		if ( scrolled > $(element).position().top-100) {

			var idseccionTitle = $(element).find('a').attr("title") ;
			
			$("#situacion").text(idseccionTitle) ;

		}

	});



	var scrolled = $(window).scrollTop()+88 ;
 

//   MOVIMIENTO LATERAL DE SECCIONES
 	
	// if ( scrolled > $('#infoFija').position().top + window.innerHeight*1.5 && !$("#infoFija").hasClass('seccionFija')) {
	
	// 		sec5Top = $('#infoFija').position().top;

	// 		$("#infoFija").addClass('seccionFija');

	// 	}

	// if ( scrolled > sec5Top + $("#sec2").height() + window.innerHeight*0.5) {
	// 			$("#infoFija").removeClass('seccionFija');

	// 	}

	// if ( scrolled < sec5Top + window.innerHeight + $('#infoFija').height()) {
	// 			$("#infoFija").removeClass('seccionFija');

	// 	}

	// if ( scrolled > $('#sec2').position().top + $('#sec2').height()/2) {

	// 			$("#infoFija").addClass('fuera');

	// 	}

	// if ( scrolled < $('#sec2').position().top + $('#sec2').height()/2) {

	// 			$("#infoFija").removeClass('fuera');

	// 	}




	if ( scrolled > $('#sec2').position().top + window.innerHeight*0.2) {

				$(".regalos").removeClass('fuera');

		}

	if ( scrolled < $('#sec2').position().top + window.innerHeight*0.2) {

				$(".regalos").addClass('fuera');

		}



	if ( scrolled > $('#sec4').position().top + window.innerHeight*0.2) {

				$(".bullet").removeClass('fuera');

		}

	if ( scrolled < $('#sec4').position().top + window.innerHeight*0.2) {

				$(".bullet").addClass('fuera');

		}


	 // Al principio tiene una modificación de ancho

	if ( scrolled > $('#sec6').position().top && !mapAnim) {

				mapAnim = true;

				$("#sec6 .left_block").animate( {'width':'70%'} , 800 , "easeOutBack" ) ;
				$("#sec6 .right_block").animate( {'margin-right':'0px'} , 800 , "easeOutBack" ) ;

		}

	if ( scrolled < $('#sec6').position().top && mapAnim) {

				mapAnim = false;

				$("#sec6 .left_block").animate( {'width':'100%'} , 800 , "easeOutBack" ) ;
				$("#sec6 .right_block").animate( {'margin-right':'-800px'} , 800 , "easeOutBack" ) ;

		}




	 // Al principio tiene una modificación de altura

	// if ( scrolled > $('#sec7').position().top && !partnerAnim) {

	// 			partnerAnim = true;

	// 			$("#sec7 li.anim1").animate( {'height':'350px', 'top':'0px'} , 800 , "easeOutBack" ) ;
	// 			$("#sec7 li.anim2").delay( 200 ).animate( {'height':'350px', 'top':'0px'} , 800 , "easeOutBack" ) ;
	// 			$("#sec7 li.anim3").delay( 400 ).animate( {'height':'350px', 'top':'0px'} , 800 , "easeOutBack" ) ;

	// 	}

	// if ( scrolled < $('#sec7').position().top && partnerAnim) {

	// 			partnerAnim = false;

	// 			$("#sec7 li.anim3").animate( {'height':'0px', 'top':'150px'} , 800 , "easeInBack" ) ;
	// 			$("#sec7 li.anim2").delay( 200 ).animate( {'height':'0px', 'top':'150px'} , 800 , "easeInBack" ) ;
	// 			$("#sec7 li.anim1").delay( 400 ).animate( {'height':'0px', 'top':'150px'} , 800 , "easeInBack" ) ;

	// 	}



	 // Al principio tiene una modificación  diferenciasAnim


	if ( scrolled > $('#sec5').position().top + $('#sec5 h2').innerHeight() * 1.5 && !diferenciasAnim) {

				diferenciasAnim = true;

				$("#sec5 li p").fadeIn(800);
				$("#sec5 li.one span").animate( {'height':'120px', 'width':'120px', 'top':'0px', 'left':'0px'} , 800 , "easeInOutExpo" ) ;
				$("#sec5 li.two span").delay( 400 ).animate( {'height':'120px', 'width':'120px', 'top':'0px', 'left':'0px'} , 600 , "easeInOutExpo" ) ;

		}

	if ( scrolled < $('#sec5').position().top + $('#sec5 h2').innerHeight() * 1.5 && diferenciasAnim) {

				diferenciasAnim = false;

				$("#sec5 li p").delay( 400 ).fadeOut(800);
				$("#sec5 li.two span").animate( {'height':'0px', 'width':'0px', 'top':'60px', 'left':'60px'} , 800 , "easeInOutExpo" ) ;
				$("#sec5 li.one span").delay( 400 ).animate( {'height':'0px', 'width':'0px', 'top':'60px', 'left':'60px'} , 600 , "easeInOutExpo" ) ;

		}


	 // Al principio tiene una modificación de altura

	if ( scrolled > $('.footer').position().top - window.innerHeight * 1.2 && !partnerAnim) {

				partnerAnim = true;

				$("#sec7 li.anim1").animate( {'height':'350px', 'top':'0px'} , 800 , "easeOutBack" ) ;
				$("#sec7 li.anim2").delay( 200 ).animate( {'height':'350px', 'top':'0px'} , 800 , "easeOutBack" ) ;
				$("#sec7 li.anim3").delay( 400 ).animate( {'height':'350px', 'top':'0px'} , 800 , "easeOutBack" ) ;

		}

	if ( scrolled < $('.footer').position().top - window.innerHeight * 1.2 && partnerAnim) {

				partnerAnim = false;

				$("#sec7 li.anim3").animate( {'height':'0px', 'top':'150px'} , 800 , "easeInBack" ) ;
				$("#sec7 li.anim2").delay( 200 ).animate( {'height':'0px', 'top':'150px'} , 800 , "easeInBack" ) ;
				$("#sec7 li.anim1").delay( 400 ).animate( {'height':'0px', 'top':'150px'} , 800 , "easeInBack" ) ;

		}


 


		
}	

	
	
