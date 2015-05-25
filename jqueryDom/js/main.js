$(document).ready(function(){
	//After document is ready, listen for clicks on any dt, and if one dt is clicked, hide all dd's and then show the one after the dt that was clicked
	$('dt').on('click', function(){

		$('dd').slideUp(200);

		$(this).next('dd').slideDown(200);
	});



	$('button').on('click', function(){

		var $sq = $('.sq');

		var state = $sq.css('visibility');

//		alert(state);

		$sq.addClass('sq-change');
		$sq.removeClass('vlada');
		alert( $sq.attr('class') );
	
		if (state == "hidden") {
			//$('.sq').css('visibility', 'visible');
		} else {
			//$('.sq').css('visibility', 'hidden');
		}

		// var state = $('.sq').css('display');
		// if(state == "block"){
		// 	$('.sq').hide();
		// } else {
		// 	$('.sq').show();
		// }
	});


	$('.sq').on('mouseover', function(){
		$('dl').fadeOut();
	})
});






