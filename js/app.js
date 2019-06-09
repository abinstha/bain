$(window).load(function() {
	$(".status").delay(3000).fadeOut('slow');
   $('.preloader').delay(3000).fadeOut('slow');
});
$(document).ready(function(){
	"use strict";
	$("form").attr('autocomplete','off');
	$('.tab-nav-item').on("click",function(e){
		e.preventDefault();
		var indexNumber = $(".tab-nav-item").index(this);
		showAndHideDivision(indexNumber);
	});
	$(".btn.btn-link").click(function(e){
		e.preventDefault();
		var clickedBtn = $(".btn.btn-link").index(this);
		$(".btn.btn-link i").eq(clickedBtn).addClass("arrow-rotation");
	});
	$(function() {
	    $(window).on("scroll", function() {
	        if($(window).scrollTop() > 50) {
	            $("nav").addClass("nav-bgcolor");
	        } else {
	           $("nav").removeClass("nav-bgcolor");
	        }
	    });
	});
	popUpMenu();
	imageSlideUp();
	dateCalculator();
	servicesSection();
	gallerySlider();
});
function popUpMenu(){
	var loginWrapper = $('.login-modal');
	var signupWrapper = $('.signup-modal');
	var oldAccount = $('.old-account');
	var bookFlight = $('.book-modal');
	$('.login-btn').click(function(e){
		loginWrapper.addClass("show");
	});
	$('.flight-book').click(function(e){
		bookFlight.addClass("show");
	});
	$('.old-account').click(function(e){
		loginWrapper.addClass("show");
		signupWrapper.removeClass("show");
	});
	$('.new-account').click(function(e){
		signupWrapper.addClass("show");
		loginWrapper.removeClass("show");
	});
	$('.close').click(function(){
		loginWrapper.removeClass("show");
		signupWrapper.removeClass("show");
	});
	$(window).click(function(e) {
	    if (e.target == loginWrapper) {
	        loginWrapper.removeClass("show");
	    }
	});
}
function servicesSection(){
	$('.why-us-section-carousel').owlCarousel({
		loop: true,
		center: true,
		items: 3,
		margin: 0,
		autoplay: true,
		autoplayTimeout: 4000,
		smartSpeed: 450,
		responsive: {
		    0: {
		        items: 1
		    },
		    768: {
		        items: 2
		    },
		    1170: {
		        items: 3
		    }
		}
	});
}
function imageSlideUp(){
		var waypoints = [];

$('.gallery-section .row').each(function(index, value) {

    var that = $(value)

    var waypoint = new Waypoint({
        element: value,
        handler: function(direction) {
            if (direction === 'down') {
                that.addClass('js-viewport');
            }
            },
            offset: '70%'
    });
    waypoints.push(waypoint);
});
}
function gallerySlider(){
	$('.continuous-slider').infiniteslide({
 		'speed': 120, 
  		'clone':5,
  		'responsive': true
	});
}
function dateCalculator(){
	var dateNow = new Date();
	var arrivalDate = dateNow.getDate()+"/"+(dateNow.getMonth()+1)+"/"+dateNow.getFullYear();
	var departureDate = (dateNow.getDate()+1)+"/"+(dateNow.getMonth()+1)+"/"+dateNow.getFullYear();
	$(".arrival-date").val(arrivalDate);
	$(".departure-date").val(departureDate);
}
$(function(){
$('.input-group.date').datepicker({
	startDate: new Date(),
	format: 'yyyy-mm-dd',
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});

});
$(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() );
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});

$(".btn-group > button, input[type='text'], select").focusin(function(e){
	e.preventDefault();
	$(this).parent().parent().addClass("focused");
});
$(".btn-group > button, input[type='text'], select").focusout(function(e){
	e.preventDefault();
	$(this).parent().parent().removeClass("focused");
});

$(".one-way").click(function(){
	var isChecked = $("#trip-type-2").prop('checked');
	if(isChecked==true){
		$(".return-section").addClass("hide");
	}
});
$(".two-way").click(function(){
	var isChecked = $("#trip-type-1").prop('checked');
	if(isChecked==true){
		$(".return-section").removeClass("hide");
	}
});

function showAndHideDivision(indexNumber){
	var active_tab = $(".tab-nav li.active");
	var parent_tab = active_tab.parent();
	var children_tab = parent_tab.children();
	active_tab.removeClass("active");
	$(children_tab[indexNumber]).addClass("active");

	var current_division = $("div.show");
	var parent_division = current_division.parent();
	var children_division = parent_division.children();
	current_division.removeClass("show");
	$(children_division[indexNumber]).addClass("show");
}
