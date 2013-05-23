$(document).ready(function(){

$(document).mousemove(function(e){
      $('span.status').html(e.pageX +', '+ e.pageY);
   }); 


//	$('button').on('clilck',function(){
//		alert($(document).mousemove(););
//	});


$('.move').on('mousemove',function(e){

	if (e.pageX - this.offsetLeft == 0) {
		$('.sean').css('-webkit-filter','blur(0px)');
	};
	if (e.pageX - this.offsetLeft >= 100) {
		$('.sean').css('-webkit-filter','blur(10px)');
	};
});


$('.moveMe').css('-webkit-filter','blur(0px)');



});