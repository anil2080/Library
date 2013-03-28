$(document).ready(function() {
alert("page load");						   
	var hash = window.location.hash.substr(1);
	var href = $('#nav li a').each(function(){
		var href = $(this).attr('href');
alert("a");
		if(hash==href.substr(0,href.length-5)){
	var toLoad = hash+'.html #content';

			$('#content').load(toLoad)
		}
	alert("hia");										
	});

	$('#nav li a').click(function(){
alert("adca");								  
		var toLoad = $(this).attr('href')+' #content';

alert (toLoad+"to load");
		$('#content').hide('fast',loadContent);
		$('#load').remove();
		$('#wrapper').append('<span id="load">LOADING...</span>');
		$('#load').fadeIn('normal');
alert("sdasd");		
window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
		function loadContent() {
			$('#content').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$('#content').show('normal',hideLoader());
		}
		function hideLoader() {
			$('#load').fadeOut('normal');
		}
		return false;
		
	});

});
