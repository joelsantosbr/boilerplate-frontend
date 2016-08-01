// Fixa o Tamanho na Seção ZigZag

zigzag(); // Start
$(window).resize(function() {
  zigzag();
}); // Window resize

// Function
function zigzag(e) {
  var count = 0;
  $('.zig__content-n1').each(function(e) {
    count++;
    var $zigHeight = $('.zig__n'+count+' .zig__content-n2');
    var $height = $zigHeight.innerHeight();
    $zigContent2 = $('.zig__n'+count+' .zig__content-n1').css('height', $height+'px');
  });
}
