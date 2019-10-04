// ---------------------------Menu BAr----------------------
// --------------------------Prasid Codes-----------------------

function openNav() {
    document.getElementById("myNav").style.width = "60%";
    
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    $('.header .closenav').css({"transform":"scale(0)","transition-delay": "0s"});

  }

  $(function(){
      $('#bars').click(function(){
        $('.header .closenav').css({"transform":"scale(1)","transition-delay": ".3s"});

      });
  });

// ---------------Hide Menu when Scroll----------------------------
// --------------------------Prasid Codes-----------------------

$(window).on('scroll',function(){
  let bodyScroll = $(window).scrollTop()
  if(bodyScroll>0){
      $('#myNav').css({'width':'0'});
      $('.header .closenav').css({"transform":"scale(0)","transition-delay": "0s"});
  }
});

$(function(){
  $('.banner').click(function(){
    $('.header .closenav').css({"transform":"scale(0)","transition-delay": "0s"});
    $('#myNav').css({'width':'0'});

  });
});


//   ----------------------------------Hide Tabe pane when page reload---------------------
// --------------------------Prasid Codes-----------------------

  $("#anemities").hide();
 
    $("#advanced").click(function(){
        $("#anemities").toggle(500);
        $('#advanced i').toggleClass('ico-js');
    });

// ------------------------------------Rent Tab Hide------------
// --------------------------Prasid Codes-----------------------

    $("#anemities1").hide();
 
    $("#advanced1").click(function(){
        $("#anemities1").toggle(500);
        $('#advanced1 i').toggleClass('ico-js');
    });

// ----------------------------------------Sold tab Hide----------------
// --------------------------Prasid Codes-----------------------

    $("#anemities2").hide();
 
    $("#advanced2").click(function(){
        $("#anemities2").toggle(500);
        $('#advanced2 i').toggleClass('ico-js');
    });

// -------------------Buy Price Range-----------------
// --------------------------Prasid Codes-----------------------

var slider = document.getElementById("customRange1");
var output = document.getElementById("demo1");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

var sliders = document.getElementById("customRange2");
var outputs = document.getElementById("demo2");
outputs.innerHTML = sliders.value;

sliders.oninput = function() {
  outputs.innerHTML = this.value;
}

// -------------------Rent Price Range-----------------
// --------------------------Prasid Codes-----------------------

var sliders1 = document.getElementById("customRange5");
var outputs1 = document.getElementById("demo5");
outputs1.innerHTML = sliders1.value;

sliders1.oninput = function() {
  outputs1.innerHTML = this.value;
}

var sliders2 = document.getElementById("customRange6");
var outputs2= document.getElementById("demo6");
outputs2.innerHTML = sliders2.value;

sliders2.oninput = function() {
  outputs2.innerHTML = this.value;
}

// -------------------Sold Price Range-----------------
// --------------------------Prasid Codes-----------------------

var sliders7 = document.getElementById("customRange9");
var outputs7 = document.getElementById("demo9");
outputs7.innerHTML = sliders7.value;

sliders7.oninput = function() {
  outputs7.innerHTML = this.value;
}

var sliders8 = document.getElementById("customRange10");
var outputs8= document.getElementById("demo10");
outputs8.innerHTML = sliders8.value;

sliders8.oninput = function() {
  outputs8.innerHTML = this.value;
}


// ------------------------ Buy Square Feet Range----------------------
// --------------------------Prasid Codes-----------------------

var slider3 = document.getElementById("customRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}

var slider4 = document.getElementById("customRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}

// ------------------------ Rent Square Feet Range----------------------
// --------------------------Prasid Codes-----------------------

var slider5 = document.getElementById("customRange11");
var output5 = document.getElementById("demo11");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}

var slider6 = document.getElementById("customRange12");
var output6 = document.getElementById("demo12");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}

// ------------------------ Sold Square Feet Range----------------------
// --------------------------Prasid Codes-----------------------

var slider9 = document.getElementById("customRange7");
var output9 = document.getElementById("demo7");
output9.innerHTML = slider9.value;

slider9.oninput = function() {
  output9.innerHTML = this.value;
}

var slider10 = document.getElementById("customRange8");
var output10 = document.getElementById("demo8");
output10.innerHTML = slider10.value;

slider10.oninput = function() {
  output10.innerHTML = this.value;
}
// ---------------------------Home-Heart--------------------
// --------------------------Prasid Codes-----------------------

$('#home1').click(function(){
  $('#home1').toggleClass('blue-color');
});

$('#heart1').click(function(){
  $('#heart1').toggleClass('red-color');
});

$('#home2').click(function(){
  $('#home2').toggleClass('blue-color');
});

$('#heart2').click(function(){
  $('#heart2').toggleClass('red-color');
});

$('#home3').click(function(){
  $('#home3').toggleClass('blue-color');
});

$('#heart3').click(function(){
  $('#heart3').toggleClass('red-color');
});

// -----------------------Sold properties Carousel----------------------

$('.sold-item #home4').click(function(){
  $('.sold-item #home4').toggleClass('blue-color');
});

$('.sold-item #heart4').click(function(){
  $('.sold-item #heart4').toggleClass('red-color');
});

$('.sold-item #home5').click(function(){
  $('.sold-item #home5').toggleClass('blue-color');
});

$('.sold-item #heart5').click(function(){
  $('.sold-item #heart5').toggleClass('red-color');
});

$('.sold-item #home6').click(function(){
  $('.sold-item #home6').toggleClass('blue-color');
});

$('.sold-item #heart6').click(function(){
  $('.sold-item #heart6').toggleClass('red-color');
});

$('.sold-item #home7').click(function(){
  $('.sold-item #home7').toggleClass('blue-color');
});

$('.sold-item #heart7').click(function(){
  $('.sold-item #heart7').toggleClass('red-color');
});

$('.sold-item #home8').click(function(){
  $('.sold-item #home8').toggleClass('blue-color');
});

$('.sold-item #heart8').click(function(){
  $('.sold-item #heart8').toggleClass('red-color');
});

// -----------------------Rent properties Carousel----------------------

$('.rent-item #home9').click(function(){
  $('.rent-item #home9').toggleClass('blue-color');
});

$('.rent-item #heart9').click(function(){
  $('.rent-item #heart9').toggleClass('red-color');
});

$('.rent-item #home10').click(function(){
  $('.rent-item #home10').toggleClass('blue-color');
});

$('.rent-item #heart10').click(function(){
  $('.rent-item #heart10').toggleClass('red-color');
});

$('.rent-item #home11').click(function(){
  $('.rent-item #home11').toggleClass('blue-color');
});

$('.rent-item #heart11').click(function(){
  $('.rent-item #heart11').toggleClass('red-color');
});

$('.rent-item #home12').click(function(){
  $('.rent-item #home12').toggleClass('blue-color');
});

$('.rent-item #heart12').click(function(){
  $('.rent-item #heart12').toggleClass('red-color');
});

$('.rent-item #home13').click(function(){
  $('.rent-item #home13').toggleClass('blue-color');
});

$('.rent-item #heart13').click(function(){
  $('.rent-item #heart13').toggleClass('red-color');
});


// -----------------------Owl Carousel for properties sold---------------------
// --------------------------Prasid Codes-----------------------

$('#owl-sold-property').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  lazyLoad:true,
  autoplay: true,
  autoplayHoverPause: true,
  autoplaySpeed: 1000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
});

// -----------------------Owl Carousel for properties rent---------------------
// --------------------------Prasid Codes-----------------------

$('#owl-rent-property').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  autoplay: true,
  autoplayHoverPause: true,
  autoplaySpeed: 1000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
});

