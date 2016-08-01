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