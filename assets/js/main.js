$(document).ready(function() {

    // Bugfix: IE 10 Windows 8 and Windows Phone8
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style");
        msViewportStyle.appendChild(
            document.createTextNode("@-ms-viewport{width:auto!important}")
        );
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
    }


    //$(window).scroll(function () {
      //  $('header').toggleClass("scroll", ($(window).scrollTop() > 50));
     //});

    $('.menu-box').click(function() {
      $('header').addClass('active');
    })

    $('.menu-box').click(function() {
      $('body').addClass('active_body');
    })

    $('.menu-close').click(function() {
      $('header').removeClass('active');
    })

    $('.menu-close').click(function() {
      $('body').removeClass('active_body');
    })

      $(".open").click( function () {
    var container = $(this).parents(".topic");
    var answer = container.find(".answer");
    var trigger = container.find(".faq-t");

    answer.slideToggle(200);

    if (trigger.hasClass("faq-o")) {
      trigger.removeClass("faq-o");
    }
    else {
      trigger.addClass("faq-o");
    }

    if (container.hasClass("expanded")) {
      container.removeClass("expanded");
    }
    else {
      container.addClass("expanded");
    }
    });

    $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });

	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;

	$('#slider').css({ width: slideWidth, height: slideHeight });

	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});
