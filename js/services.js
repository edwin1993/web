var slides = 7;
var currentSlide = 1;

function inicio() {
  console.log('servicios');

  var $buttonLeft = $('.nav-button-gv-left');
  var $buttonRight = $('.nav-button-gv-right');
  var $submenu = $('.submenuServices');

  $buttonLeft.on('click', leftClick );
  $buttonRight.on('click', rightClick );
  $submenu.on('click', clickSubmenu );

  onActive();

}

function onActive() {
  $('.servicio').hide();
  // $('#s' + currentSlide).show();

  if ( window.screen.width <= 1140 ) {
    $('#s' + currentSlide).show();
  }else {
    console.log('DESKTOP SHOW');
    $('#s1').removeClass('outSlide');
    $('#s2').removeClass('outSlide');
    $('#s3').removeClass('outSlide');
    $('#s1').show();
    $('#s1').addClass('inSlide');
    $('#s2').show();
    $('#s2').addClass('inSlide');
    $('#s3').show();
    $('#s3').addClass('inSlide');

  }
}

function leftClick() {
  var previusSlide = 0;
  var slide = currentSlide;

  if ( window.screen.width <= 1140 ) {
    if ( currentSlide === 1 ) {
      previusSlide = currentSlide = slides;
    }else {
      previusSlide = currentSlide - 1;
      currentSlide--;
    }
    $('#s' + slide).addClass('outSlide');
    $('#s' + slide).hide();
    $('#s' + previusSlide).show();
    $('#s' + previusSlide).addClass('inSlide');
  }else {
    if ( currentSlide === (slides-2) ) {
      console.log('CURRENT SLIDE FINAL', currentSlide);
      // nextSlide = 0;
      currentSlide = 1;
      // slide = currentSlide;
      // nextGroup= 0;
      onActive();
    }else {
      nextSlide = currentSlide + 1;
      nextGroup = nextSlide + 2;
      currentSlide++;
      console.log('CURRENT SLIDE ', currentSlide);
    }

    $('#s' + slide).addClass('outSlide');
    $('#s' + slide).hide();
    $('#s' + nextGroup).show();
    $('#s' + nextGroup).addClass('inSlide');
  }


}

function rightClick() {
  console.log('RIGHT');

  var nextSlide = 0;
  var slide = currentSlide;
  var nextGroup= 0;


  if ( window.screen.width <= 1140 ) {
    if ( currentSlide === slides ) {
      nextSlide = currentSlide = 1;
    }else {
      nextSlide = currentSlide + 1;
      currentSlide++;
    }

    $('#s' + slide).addClass('outSlide');
    $('#s' + slide).hide();
    $('#s' + nextSlide).show();
    $('#s' + nextSlide).addClass('inSlide');
  }else {
    if ( currentSlide === (slides-2) ) {
      console.log('CURRENT SLIDE FINAL', currentSlide);
      // nextSlide = 0;
      currentSlide = 1;
      // slide = currentSlide;
      // nextGroup= 0;
      onActive();
    }else {
      nextSlide = currentSlide + 1;
      nextGroup = nextSlide + 2;
      currentSlide++;
      console.log('CURRENT SLIDE ', currentSlide);
    }

    $('#s' + slide).addClass('outSlide');
    $('#s' + slide).hide();
    $('#s' + nextGroup).show();
    $('#s' + nextGroup).addClass('inSlide');
  }



}

function setSlide() {

  var nextSlide = 0;
  var slide = currentSlide;
  var nextGroup= 0;


  if ( window.screen.width <= 1140 ) {
    if ( currentSlide === slides ) {
      nextSlide = currentSlide = 1;
    }else {
      nextSlide = currentSlide + 1;
      currentSlide++;
    }

    $('#s' + slide).addClass('outSlide');
    $('#s' + slide).hide();
    $('#s' + nextSlide).show();
    $('#s' + nextSlide).addClass('inSlide');
  }else {
    if ( currentSlide === slides ) {
      console.log('CURRENT SLIDE FINAL', currentSlide);
      // nextSlide = 0;
      currentSlide = 1;
      // slide = currentSlide;
      // nextGroup= 0;
      // onActive();
    }else {
      nextSlide = currentSlide + 1;
      nextGroup = nextSlide + 2;
      currentSlide++;
      console.log('CURRENT SLIDE ', currentSlide);
    }

    for(var i =1; i<10; i++ ) {
      $('#s' + i).addClass('outSlide');
      $('#s' + i).hide();
    }
    if(currentSlide === 1) {
      $('#s' + (slides-1)).show();
      $('#s' + (slides-1)).addClass('inSlide');
      $('#s' + slides).show();
      $('#s' + slides).addClass('inSlide');
      $('#s' + (slides+1)).show();
      $('#s' + (slides+1)).addClass('inSlide');
    }else if(currentSlide === 2) {
      $('#s' + (slides+2)).show();
      $('#s' + (slides+2)).addClass('inSlide');
      $('#s' + (currentSlide-1)).show();
      $('#s' + (currentSlide-1)).addClass('inSlide');
      $('#s' + (currentSlide)).show();
      $('#s' + (currentSlide)).addClass('inSlide');
    }else {
      $('#s' + (currentSlide-2)).show();
      $('#s' + (currentSlide-2)).addClass('inSlide');
      $('#s' + (currentSlide-1)).show();
      $('#s' + (currentSlide-1)).addClass('inSlide');
      $('#s' + currentSlide).show();
      $('#s' + currentSlide).addClass('inSlide');
    }

  }



}

function setSlideMobile() {
  for(var i =1; i<10; i++ ) {
      $('#s' + i).addClass('outSlide');
      $('#s' + i).hide();
  }
  $('#s' + currentSlide).show();
  $('#s' + currentSlide).addClass('inSlide');



}

function clickSubmenu() {
  var activeSlide = $(this).data('id');
  currentSlide = activeSlide;

  if ( window.screen.width <= 1140 ) {
    setSlideMobile();
  }else {
    setSlide();
  }
}

$(document).ready(inicio);
