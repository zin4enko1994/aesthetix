new WOW().init();

$('.tabgroup > div').hide();
$('.tabgroup > div:first-of-type').show();
$('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();

});
//Gallery slider
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        // centerMode: true,
        focusOnSelect: true
    });
$('.prev').click(function(){
    $('.slider-for').slick('slickPrev');
});

$('.next').click(function(){
    $('.slider-for').slick('slickNext');
});
//Testimonials slider
$('.slider-center').slick({
    //infinity: true,
    dots: true,
    arrows: false,
    centerMode: true,
    centerPadding: '25%',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
$('.prev').click(function(){
    $('.slider-center').slick('slickPrev');
});

$('.next').click(function(){
    $('.slider-center').slick('slickNext');
});
//Home Page Slider
$('.sliders').slick({
    autoplay: true,
    speed: 800,
    lazyLoad: 'progressive',
    arrows: true,
    dots: true
}).slickAnimation();
$('.left').click(function(){
    $('.sliders').slick('slickPrev');
});

$('.right').click(function(){
    $('.sliders').slick('slickNext');
});
// Botox post slider
$('.slider').slick({
    dots: true,
    arrows: false
});

$('.left').click(function(){
  $('.slider').slick('slickPrev');
});


$('.right').click(function(){
  $('.slider').slick('slickNext');
});

$('.openPayments').on('click', function(e) {
	e.preventDefault();
	$('.banner-block').toggleClass('visible');
});

$(document).ready ( function(){
	if(window.location.hash == '#banner-block') {
		$('.banner-block').toggleClass('visible');
	} else {
		$('.banner-block').removeClass('visible');
	}
});

//Burger button
$('.ham').on('click', function(e) {
  e.preventDefault();
  $(this).toggleClass('active');
  $('.mobil-nav').toggleClass('active');
  $('body').toggleClass('hidden');
});
// Search button
$('.search').on('click', function(e) {
  e.preventDefault();
  $('.searchform').toggleClass('active');
});
// Button UP
$(document).ready(function(){
  $('body').append('<a href="#" id="go-top" title="UP">UP</a>');
});

$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "800") $(this).fadeIn("slow")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "800") $(scrollDiv).fadeOut("slow")
   else $(scrollDiv).fadeIn("slow")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
  })
 }
});

$(function() {
 $("#go-top").scrollToTop();
});

$('a.more').on('click', function(e){
	var qwe = $(this).attr('data-popup');
	$(document).find('#'+qwe).css('display', 'flex');
});
$('.full-description .close').on('click', function(e) {
	e.preventDefault();
	$('.full-description').css('display', 'none');
});


