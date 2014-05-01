$( ".arrows" ).click(function() {
  $( this ).toggleClass( "open" );
});

$('.arrows').click(function() {
  $('.nav').animate({
    height: 'toggle'});
});s