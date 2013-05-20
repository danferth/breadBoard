$(document).ready(function(){
// this function will grab the $_GET values from the url and put them into an array
			$.extend({
  				getUrlVars: function(){
    				var vars = [], hash;
    				var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    				for(var i = 0; i < hashes.length; i++){
      					hash = hashes[i].split('=');
      					vars.push(hash[0]);
      					vars[hash[0]] = hash[1];
    				}
    			return vars;
  				},
  				getUrlVar: function(name){
    			return $.getUrlVars()[name];
  				}
			});
			//this is how you retreive a single value "name"
			var byName = $.getUrlVar('name');

			//alert (byName);

//display query
$('.output').css('color','red').hide().fadeIn(1000);

});