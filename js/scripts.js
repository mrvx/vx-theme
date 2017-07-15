// Add your functions


$(document).ready(function(){

	$('.mobileMenu').click(function(){
		$('.menu-header-menu-container').toggleClass('open');
		$(this).toggleClass('open');
	});
	
	
	
	$(window).resize(function(){
		$('.menu').removeClass('open');
		$('.mobileMenu').removeClass('open');
	});
	
	
	$('#menu-peamenu').before($('#menu-top-menu'));


	
});

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();
		var target = this.hash;
		$target = $(target);
		$('html, body').stop().animate({
            'scrollTop':  $target.offset().top //no need of parseInt here
        }, 900, 'swing', function () {
        	window.location.hash = target;
        });
	});
});
$('#navmenu li:first-child a').addClass('selected');
/*$('#navmenu a').click(function(){
	$('#navmenu a').removeClass('selected');
	
	$(this).addClass('selected');
});*/






$('.lightgalleryElegant').lightGallery({
	thumbnail: false
});



$(".wpcf7-submit").click(function(){
	$('.overlay').addClass('sh');
	setTimeout(function(){
		$('.wpcf7 .wpcf7-response-output, .overlay').on('click', function() {
			$('.wpcf7 .wpcf7-validation-errors').hide();
			$('.overlay').removeClass('sh');
		});
	}, 1000);
});


var mapInitScript = function(){

};

function initFooterMap(){
	mapInitScript();
}

if($('#kus').length) {
	var map;
	mapInitScript = function() {
		mapInit = true;
		map = new google.maps.Map(document.getElementById('kus'), {
			scrollwheel: false,
			mapTypeControl: false,
			navigationControl: false,
			center: {lat: 57.830287, lng: 27.030372},
			zoom: 16,
			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#ff0000"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]}]
		});
		new google.maps.Marker({
			position: {lat: 57.830287, lng: 27.030372},
			map: map,
			icon: {
				url: 'http:///elegantweb.eu/roopaauto/wp-content/themes/vxtheme/images/pointer.png',
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(10, 43)
			}
		});
	}
}







