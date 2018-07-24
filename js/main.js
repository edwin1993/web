$(document).ready( inicio );

var toggleInfoStatus = false;

function inicio() {
	validacion();
	var $eTop = $('.backTop');
  var $eMobileMenu = $('.icon-mobile-menu');
  var $eButtonInfo = $('.button-info');
  var $eButtonInfoNosotros = $('.button-info-nosotros');
  // $('.item-novedades').on('click', navNovedades );
  displayBackTop($eTop);
  $eTop.on('click', goTop);
  $eMobileMenu.on('click', toggleMobileMenu );
  $eButtonInfo.on('click', toggleSlideInfo );
  $eButtonInfoNosotros.on('click', toggleSlideInfoNosotros );
  centerButton();
  centerHistory();
  $('.close-histoy').on('click', closeHistory );
  $('.openHistory').on('click', openHistory );
  widthProjects();
  $('#regresargv').on('click', function( e ) {
    window.history.back();
  });
  showItemNovedades();

}

function navNovedades( e ) {
  e.preventDefault();

  var dataId = $(this).attr('data-id');
  //Aplicar estilos de menú
  $('.overlaygv').show();
  $('.n' + dataId + ' > .overlaygv').hide();
  $('.contentnovedades').hide();
  $('#n' + dataId ).show();
}

function showItemNovedades() {
  var src = String( window.location.href ).split('?')[1];
  var vrs, idItem;
  console.log( src === undefined);
  if( src === undefined) {
    idItem = 1;
  }else {
    vrs = src.split('&');
    idItem = decodeURI( vrs[0].split('=')[1]);
  }

  console.log(idItem);
  $('.n' + idItem +' > .overlaygv').hide();
  $('#n' + idItem ).show();
}

function navVentas( e ) {
  e.preventDefault();

  var dataId = $(this).attr('data-id');
  //Aplicar estilos de menú
  $('.overlaygv').show();
  $('.n' + dataId + ' > .overlaygv').hide();

  $('.flexslider').removeData("flexslider");
  $('.contentnovedades').hide();
  $('#n' + dataId ).show();
  $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
}


function displayBackTop($eTop) {


    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 400) {
            $eTop.show();
        } else if (height < 400) {
            $eTop.hide();
        }
    });
}

function goTop() {
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 1000);
}

function toggleMobileMenu() {
  var $eMainMenu = $('.main-menu');

  $eMainMenu.toggle(300);

}

function toggleSlideInfo(  ) {
  if( toggleInfoStatus === false ){
    toggleInfoStatus = true;
    $('.content-subinfo').animate({
      left: 2+'%',
      width: 100+'%'
    });
  }else if( toggleInfoStatus === true ){
    toggleInfoStatus = false;
    $('.content-subinfo').animate({
      left: 91+'%',
      width: 90+'%'
    });
  }
}

function toggleSlideInfoNosotros(  ) {
  var eButtonId = $(this).attr('id');
  console.log(eButtonId);
  var nResolution = window.screen.width;
  var nSlideLeft = 91;
  if( nResolution > 480 ) {
    nSlideLeft = 96;
  }

  if( toggleInfoStatus === false ){
      toggleInfoStatus = true;
      $('.' + eButtonId).animate({
        left: 2+'%',
        width: 100+'%'
      });
      if( nResolution > 480 ) {
        $('.content-text-subinfo').css({
          width: 93+'%'
        });
      }
    }else if( toggleInfoStatus === true ){
      toggleInfoStatus = false;
      $('.content-subinfo').animate({
        left: nSlideLeft+'%',
        width: 90+'%'
      });
    }
}

function centerButton() {
  $('.content-button-info').css('top', function(){
    var w_h = $('.content-subinfo').height();
    return w_h / 2;
  });

  $('.content-button-info-2').css('top', function(){
    var w_h = $('.content-subinfo').height();
    return (w_h / 2) - (w_h / 2) * (40/100);
  });
}

function centerHistory() {
  var wh = $( window ).height();
  console.log(wh);
  if( $( window ).width() <= 480 ){
    $('.history-image').css('height', function(){
      return wh;
    });

     $('.img-history').css('margin-top', function(){
      return (wh / 2) - (wh / 2) * (50/100);
    });
  }

}

function closeHistory( e ) {
  $('.history-image').hide('slow');
}

function openHistory( e ) {
  e.preventDefault();
  e.stopPropagation();
  goTop();
  $('.history-image').show('slow');
}

function widthProjects() {
  $('.proyectos-nombre-proyecto').css('width', function() {
    return $( window ).width() -10;
  });
  $('.info-proyecto-general').css('width', function() {
    return $( window ).width();
  });

  if( $( window ).width() >= 1140 ){
    $('.proyectos-nombre-proyecto').css('width', function() {
      return $( window ).width() -50;
    });
    $('.info-proyecto-general').css('width', function() {
      return $( window ).width() - ( $( window ).width() * 60/100);
    });
  }
}



function vacio(q) {
        for ( i = 0; i < q.length; i++ ) {
                if ( q.charAt(i) != " " ) {
                        return true;
                }
        }
        return false;
}

function validacion () {
        $("#enviar").click(function() {
          console.log('enviando');
            $('.errorform-gv').html('');
            document.getElementById("enviar").disabled = true;
            if( vacio($("#nombre").val()) == false ) {

                    $('.errorform-gv').html('');
                    $('.errorform-gv').append('ERROR: Por favor ingrese su nombre completo.');
                    document.getElementById("enviar").disabled= false;
                    return false;
            }



            if( vacio($("#email").val()) == false ) {

                    $('.errorform-gv').html('');
                    $('.errorform-gv').append('ERROR: Por favor ingrese su e-mail');
                    document.getElementById("enviar").disabled= false;
                    return false;
              }else{

                re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
                 if(!re.exec($("#email").val()))    {
                    $('.errorform-gv').html('');
                 $('.errorform-gv').append('ERROR: El e-mail ingresado no es valido');
                document.getElementById("enviar").disabled= false;
                return false;
              }
            }



            if( vacio($("#telefono").val()) == false ) {

                     $('.errorform-gv').html('');
                   $('.errorform-gv').append('ERROR: Por favor ingrese su número de contacto .');
                    document.getElementById("enviar").disabled= false;
                    return false;
            } else{

                if (isNaN($("#telefono").val())){
                 $('.errorform-gv').html('');
                $('.errorform-gv').append('ERROR: El número de  contacto  suministrado  contiene caracteres incorrectos.');
                 document.getElementById("enviar").disabled= false;
                  return false;
                }

            }

             if( vacio($("#asunto").val()) == false ) {

                    $('.errorform-gv').html('');
                    $('.errorform-gv').append('ERROR: Por favor ingrese el asunto.');
                    document.getElementById("enviar").disabled= false;
                    return false;
            }

             if( vacio($("#mensaje").val()) == false ) {

                    $('.errorform-gv').html('');
                    $('.errorform-gv').append('ERROR: Por favor ingrese el mensaje.');
                    document.getElementById("enviar").disabled= false;
                    return false;
            }



            // document.getElementById("formu").reset();
            //  $('.errorform-gv').html('').css({
            //  	color: 'green'
            //  }).append('Sus datos han sido enviados . Pronto nos pondremos en contacto');


             $.ajax({
                type:'POST',
                url:'procesar.php',
                data:$('#formu').serialize(),
                success: function(e) {
                    resPi = $.parseJSON(e);
                    if( resPi.mensaje == 200 ){
                        document.getElementById("formu").reset();

                        $('.errorform-gv').html('').css({
                           color: 'green'
                         }).append('Sus datos han sido enviados . Pronto nos pondremos en contacto');

                    }else{
                        $('.errorform-gv').html('');
                        $('.errorform-gv').append(resPi.mensaje);
                        document.getElementById("enviar").disabled= false;
                    }

                },
                error: function() {
                    $('.errorform-gv').html('');
                    $('.errorform-gv').append('ERROR. En este momento no se puede establecer conexión con el servidor por favor inténtelo más tarde.');
                    document.getElementById("enviar").disabled= false;
                }
                });
            return false;


        });

}






