import './scss/main.scss'

import $ from 'jquery';

import AOS from 'aos';

import { ScrollScene, addIndicators } from 'scrollscene'
import gsap, { TimelineMax, TweenMax, TweenLite,  } from 'gsap'

const tlImageHeader = gsap.timeline({ paused: true })
const tlImageHeader2 = gsap.timeline({ paused: true })

AOS.init({
    offset: 100,
    duration: 700,
    easing: 'ease-in-sine',
    delay: 100,
});

/* tlImageHeader.to('.maodir', {
    transformX: 50
}) */

let mm = gsap.matchMedia();

mm.add("(max-width: 992px)", () => {
    tlImageHeader.fromTo('.maodir', { x: 400 }, { x: 100 })
    tlImageHeader2.fromTo('.maoesq', { x: -400 }, { x: 0 })

    const scrollScene = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 1100,
        gsap: {
            timeline: tlImageHeader
        }
    })
    
    const scrollScene2 = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 900,
        gsap: {
            timeline: tlImageHeader2
        }
    })
});

mm.add("(min-width: 993px) and (max-width: 1279px)", () => {
    tlImageHeader.fromTo('.maodir', { x: 500 }, { x: 380 })
    tlImageHeader2.fromTo('.maoesq', { x: -500 }, { x: -300 })
    const scrollScene = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 1100,
        gsap: {
            timeline: tlImageHeader
        }
    })
    
    const scrollScene2 = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 900,
        gsap: {
            timeline: tlImageHeader2
        }
    })
});

mm.add("(min-width: 1280px) and (max-width: 1600px)", () => {
    tlImageHeader.fromTo('.maodir', { x: 400 }, { x: 230 })
    tlImageHeader2.fromTo('.maoesq', { x: -400 }, { x: -200 })
    const scrollScene = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 1100,
        gsap: {
            timeline: tlImageHeader
        }
    })
    
    const scrollScene2 = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 900,
        gsap: {
            timeline: tlImageHeader2
        }
    })
});

mm.add("(min-width: 1600px) and (max-width: 1920px)", () => {
    tlImageHeader.fromTo('.maodir', { x: 400 }, { x: 130 })
    tlImageHeader2.fromTo('.maoesq', { x: -400 }, { x: -200 })
    const scrollScene = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 1100,
        gsap: {
            timeline: tlImageHeader
        }
    })
    
    const scrollScene2 = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 900,
        gsap: {
            timeline: tlImageHeader2
        }
    })
});

mm.add("(min-width: 1921px)", () => {
    tlImageHeader.fromTo('.maodir', { x: 400 }, { x: 0 })
    tlImageHeader2.fromTo('.maoesq', { x: -400 }, { x: 0 })
    const scrollScene = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 1100,
        gsap: {
            timeline: tlImageHeader
        }
    })
    
    const scrollScene2 = new ScrollScene({
        triggerElement: '.thirdImage',
        duration: 900,
        gsap: {
            timeline: tlImageHeader2
        }
    })
});


$(document).scroll(function() {
	if($(document).scrollTop() >= 90){
		$(".header").addClass("active");
	}else{
		$(".header").removeClass("active");
	}
});

/* scrollScene.Scene.addIndicators({
    name: 'Image',
    colorEnd: 'red'
}) */

document.addEventListener('DOMContentLoaded', function () {
    var videoElements = document.querySelectorAll('video');
    
    videoElements.forEach(function(videoElement) {
        videoElement.controls = false;
    
        videoElement.addEventListener('play', function () {
        this.controls = false;
        });
    
        videoElement.addEventListener('pause', function () {
        this.controls = false;
        });
    });
    });

$('.select_location').on('change', function(){
    window.location = $(this).val();
});

$(".button-menu").click(function(){
	$(".menu-mobile").addClass("active");
});

$(".button-menu-close").click(function(){
	$(".menu-mobile").removeClass("active");
});

$(".menu-mobile li a").click(function(){
	$(".menu-mobile").removeClass("active");
});

$(document).ready(function(){
    $("a.row-scroll").on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 80
        }, 1000);
    });
});

/* var scrollLinks = document.querySelectorAll('a[href^="#"].row-scroll');
var scrollOffset = 100;

scrollLinks.forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    var target = document.querySelector(this.getAttribute("href"));
    if (target) {
      var targetOffset =
        target.getBoundingClientRect().top + window.pageYOffset;
      window.scrollTo({
        top: targetOffset,
        behavior: "smooth"
      });
      target.setAttribute("tabindex", "-1");
      target.focus();
    }
  });
});
 */