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

    $('.menu-close').click(function() {
      $('header').removeClass('active');
    })

});
