$(function() {
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});

	var $slider = $("#sliders-01");
	if ($slider.length) {
		var sets = {fade: true, arrows: false, autoplay: true, speed: 1500, autoplaySpeed: 5000, pauseOnHover: false};
		$slider.slick(sets);
		setTimeout(function(){
			$("#sliders-02").slick(sets);
		}, 800);
		setTimeout(function(){
			$("#sliders-03").slick(sets);
			$(".loading-wrap").fadeOut(400);
		}, 1600);
	} else {
		// PreLoader
		$(window).load(function() {
			$(".loading-wrap").fadeOut(400);
		});
	}

	// TOOLTIP
	$(".tool-tip").tooltip({
		placement: "bottom"
	});

	//AJAX CONTACT FORM
	$(".contact-form").submit(function() {
		var rd = this;
		var url = "sendemail.php"; // the script where you handle the form input.
		$.ajax({
		type: "POST",
		url: url,
		data: $(".contact-form").serialize(), // serializes the form's elements.
		success: function(data)
		{
		//alert("Mail sent!"); // show response from the php script.
		$(rd).prev().text(data.message).fadeIn().delay(3000).fadeOut();
		}
		});
		return false; // avoid to execute the actual submit of the form.
	});

	// GOOGLE MAP
	var $map = $('.map');
	if ($map.length) {
		function initialize($) {
			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(17.421306, 78.457553),
				disableDefaultUI: false
			};
			var map = new google.maps.Map(document.querySelector('.map'), mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}

});