// Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-822365-13', 'auto');
ga('send', 'pageview');

// jQuery
jQuery(document).ready(function ($) {
  $('.navigation-toggle a').click(function() {
    $('.header-navigation').toggleClass('hidden');
    return false;
  });

  $('.header-navigation-link').click(function() {
    $('.header-navigation').toggleClass('hidden');
  });

  var parrallaxSpeed = 20;
  $(window).on('scroll', function() {
    backgroundChange = 'background-position: center ' + ((window.pageYOffset)/parrallaxSpeed) + 'px';
    $('.article-one').attr('style', backgroundChange);
    $('.article-two').attr('style', backgroundChange);
    $('.article-three').attr('style', backgroundChange);
    $('.article-four').attr('style', backgroundChange);
  });

});