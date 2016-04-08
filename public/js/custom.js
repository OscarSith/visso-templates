$(function() {
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});
	new WOW().init();

	var $slider = $("#sliders-01");
	if ($slider.length) {
		var sets = {fade: true, arrows: false, autoplay: true, speed: 1500, autoplaySpeed: 5000, pauseOnHover: false};
		$slider.slick(sets);
		$("#sliders-02").slick(sets);
		$("#sliders-03").slick(sets);
	}

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
				disableDefaultUI: false,
				scrollwheel: false
			};
			var map = new google.maps.Map(document.querySelector('.map'), mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}

	var $othersProducts = $('div.others-products');
	if ($othersProducts.length) {
		$othersProducts.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: true
		});
	}
});