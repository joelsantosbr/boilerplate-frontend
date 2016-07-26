$(document).ready(function(){
setTimeout(function() {

  // Efeito de rolagem suave
  $('.link-animation').find('a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname ==      this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: (target.offset().top) - 64
        }, 1000);
        return false;
      }
    }
  });

  // Fecha o menu ao clicar no link
  $('#menu-list li a').click(function() {
    $('.navbar-toggle:visible').click();
  });

  $(document).on('click', function (e) {    
    if ($(e.target).closest('.active').length){
      $('.navbar .menu').removeClass("active");
    }
  });

	// Multiples carousel bootstrap
  $('.carousel').each(function(){
    $(this).carousel({
        interval: 5000
    });
  });

  // Fixa o Tamanho na Seção ZigZag
  for (var i=1;i <= 10; i++){
    var $zigHeight = $('.zig__n'+i+' .zig__content-n2');
    var $height = $zigHeight.innerHeight();
    $zigContent2 = $('.zig__n'+i+' .zig__content-n1').css('height', $height+'px');
  }
  $(window).resize(function() {
    for (var i=1;i <= 10; i++){
      var $zigHeight = $('.zig__n'+i+' .zig__content-n2');
      var $height = $zigHeight.innerHeight();
      $zigContent2 = $('.zig__n'+i+' .zig__content-n1').css('height', $height+'px');
    }
  });

  // Aparecer postit ao rolar a pagina
  $( window ).scroll(function() {
    var $objt = $( ".postit" );
    $objt.each(function(index, el) {
      $objt.animate({
        opacity: 1},
        5000, function() {
        /* stuff to do after animation is complete */
      });
      
    });
  });

  // Hover contato EmpowerIt
    var $box1 = $("#contact-box-1");
    var $box2 = $("#contact-box-2");
    var $boxContent1 = $("#box-content-1");
    var $boxContent2 = $("#box-content-2");
    $box1.on('mouseover', function(event) {
      $boxContent2.addClass('active')
      $(this).mouseleave(function(event) {
        $boxContent2.removeClass('active')
      });
    });
    $box2.on('mouseover', function(event) {
      $boxContent1.addClass('active')
      $(this).mouseleave(function(event) {
        $boxContent1.removeClass('active')
      });
    });

}, 500);//SET TIME OUT
});// READY 