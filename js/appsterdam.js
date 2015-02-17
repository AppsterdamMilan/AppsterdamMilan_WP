// Appsterdam Milan - by Salvatore Laisa
function init(){
	// globals
	var lastMeetupApiUrl = 'https://api.meetup.com/2/events?status=upcoming&order=time&limited_events=False&group_urlname=AppsterdamMilan&desc=false&offset=0&photo-host=public&format=json&page=1&fields=&sig_id=8746286&sig=f547c52840afc06e02d0413ebbf3e837667551e2';

	// Dropdown menu on mobile
	$('header .btn').on('click',function(){
		$('header nav').slideToggle(400);
	});

	// Loading animations
	$.each($('#corpo article'),function(i){
		setTimeout(function(){
			$('#corpo article').eq(i).addClass('enter');
		},i*200);
	});

	// Loading next Mettup
	$.getJSON(lastMeetupApiUrl,function(r,s){
		var _parent = 'article.nextMeetup';
		console.log(r,s);
		var _evt = r.results[0];
		console.log(_evt);
		$(_parent + ' .fa-spin').hide();
		$(_parent + ' .banner').slideDown();
		$(_parent + ' strong').html(_evt.name);
		//.attr('href',_evt.event_url);
		$(_parent + ' section').append(_evt.description);
	});
}

// init
$(document).on('ready',init);