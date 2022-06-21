// function for your card parallax

(function() {
    $( document )
      .on( "mousemove", ".ItemCard", function( event ) {

      var halfW = ( this.clientWidth / 2 );
      var halfH = ( this.clientHeight / 2 );

      var coorX = ( halfW - ( event.pageX - this.offsetLeft ) );
      var coorY = ( halfH - ( event.pageY - this.offsetTop ) );

      var degX  = ( ( coorY / halfH ) * 10 ) + 'deg'; // max. degree = 10
      var degY  = ( ( coorX / halfW ) * -10 ) + 'deg'; // max. degree = 10

      $( this ).css( 'transform', function() {

        return 'perspective( 600px ) translate3d( 0, -2px, 0 ) scale(1.1) rotateX('+ degX +') rotateY('+ degY +')';
      } )
        .children( '.ItemCard__summary' )
        .css( 'transform', function() {
        return 'perspective( 600px ) translate3d( 0, 0, 0 ) rotateX('+ degX +') rotateY('+ degY +')';
      } );
    } )
      .on( "mouseout", ".ItemCard", function() {
      $( this ).removeAttr( 'style' )
        .children( '.ItemCard__summary' )
        .removeAttr( 'style' );
    } );
  })();

/*
$(document).ready(function () {
    typeWriter();
});

var i = 0;
var txt = 'Hello!';
var speed = 150;

function typeWriter() {
if (i < txt.length) {
document.getElementById("demo").innerHTML += txt.charAt(i);
i++;
setTimeout(typeWriter, speed);
}
}
*/
