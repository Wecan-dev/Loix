$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.header__main').addClass("fixed-me");
    } else {
      $(".header__main").removeClass("fixed-me");
    }
  });
});

$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.nav-link').addClass("color");
    } else {
      $(".nav-link").removeClass("color");
    }
  });
});





$('.nav-item').click(function () {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});


$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.logo').addClass("here");
    } else {
      $(".logo").removeClass("here");
    }
  });
});

const responsiveBtnIcon = document.querySelector(".responsive-menu-btn");
const navMenu = document.querySelector(".nav__menu");

responsiveBtnIcon.addEventListener("click", () => {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});

$('.multiple-items').slick({
    autoplay:false,
    autoplaySpeed: 6000,
    speed: 500,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    dots:false,
    responsive: [
        {
            breakpoint: 700,
            settings: {
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        }
    ]
});


// function openWork(evt, workName) {
//   var i, tabcontent2, tablinks;
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(workName).style.display = "block";
//   evt.currentTarget.className += " active";
// }

// document.getElementById("defaultOpen2").click();

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
	 draggable: false,
  asNavFor: '.slider-nav'
	 
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  asNavFor: '.slider-for',
  dots: false,
	draggable: false,
  focusOnSelect: true,
	
});

$('.dropdown-toggle').dropdown()


window.addEventListener('load', function () {
  var newVideo = document.getElementById('mivideo');
  newVideo.addEventListener('ended', function () {
    this.currentTime = 0;
    this.play();
  }, false);
  newVideo.play();
});
$('.head').click(function(){
  $(this).toggleClass('active');
  $(this).parent().find('.arrow').toggleClass('arrow-animate');
  $(this).parent().find('.content').slideToggle(280);
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

$(document).ready(function(){
    var width = window.innerWidth;
    var resolucion = $( window ).width();

    if(resolucion <= 575){
		//$('input.dgwt-wcas-search-input').attr("placeholder", "Buscar");
      $('.main_menu > li').click(function(){
	
		if (!$(this).children('.sub_menu').hasClass("active")) {
			$('.sub_menu').removeClass('active');
			$(this).children('.sub_menu').addClass('active');

		}else{
			$(this).children('.sub_menu').removeClass('active');
				$('.sub_menu').removeClass('active');
		}	
	  });

    }
    
 });


