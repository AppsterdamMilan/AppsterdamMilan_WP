function init(){
	$('header .btn').on('click',function(){
		$('header nav').slideToggle(400);
	});

	$.each($('#corpo article'),function(i){
		setTimeout(function(){
			$('#corpo article').eq(i).addClass('enter');
		},i*200);
	});
}

$(document).on('ready',init);