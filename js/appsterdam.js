function init(){
	$('header .btn').on('click',function(){
		$('header nav').slideToggle(400);
	});
}

$(document).on('ready',init);