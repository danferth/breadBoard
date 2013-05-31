$(document).ready(function(){
var liCount = $('ul.progress li').length;
var marginCount = liCount - 1;
var liLength = (100-(marginCount * 2))/liCount;

var barCount = $('ul.progress li').length;
var listCount = $('ul.list li').length;



$('ul.progress li').css('width',liLength + '%');

$('ul.list li').on('click',function(){
  $(this).fadeOut(100);
  $('ul.progress li').not('.checked').first().addClass('checked');
  
  var complete = $('ul.progress li.checked').length;
  
  if(complete == liCount){
    $('.complete').delay(200).fadeIn(800);
  }
 });
	
});