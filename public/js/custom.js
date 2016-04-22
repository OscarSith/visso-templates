$(function() {
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});
	new WOW().init();

	var $slider = $("#sliders-01");
	if ($slider.length) {
		var sets = {fade: true, arrows: false, autoplay: true, speed: 1800, autoplaySpeed: 5000, pauseOnHover: false};
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
				zoom: 17,
				center: new google.maps.LatLng(-12.1072999,-77.0398141),
				scrollwheel: false
			};
			var map = new google.maps.Map(document.querySelector('.map'), mapOptions);

			new google.maps.Marker({
				map: map,
				draggable: false,
				position: new google.maps.LatLng(-12.1072999,-77.0376141)
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}

	var $othersProducts = $('div.others-products');
	if ($othersProducts.length) {
		$othersProducts.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: true,
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev"><i class="fa fa-arrow-circle-left fa-lg"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next"><i class="fa fa-arrow-circle-right fa-lg"></i></button>',
		});

		$('.others-products').on('click', '.item-products', function(e) {
			e.preventDefault();
			var $this = $(this),
				$hidden = $this.children().last(),
				data = {name: $hidden.data('name'), description: $hidden.val(), image: $hidden.data('img')};

			$this.parent().find('img').removeClass('detail-product-selected');
			$this.children().first().addClass('detail-product-selected');

			$('#productName, #breadcrumbProductName').text(data.name);
			$('#product-description').html(data.description);
			var image = $('#productImage').attr('src'),
				arrs = image.split('/');

			arrs.pop();
			$('#productImage').attr('src', arrs.join('/') + '/' + data.image);
		});
	}

	var $othersProyects = $('div.others-proyects');
	if ($othersProyects.length) {
		$othersProyects.slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev"><i class="fa fa-arrow-circle-left fa-lg"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next"><i class="fa fa-arrow-circle-right fa-lg"></i></button>',
		});

		$othersProyects.on('click', '.item-proyects', function(e) {
			var image = $(this).data('img'),
				curremtImage = $('#productImage').attr('src'),
				arrs = curremtImage.split('/');

			arrs.pop();
			$('#productImage').attr('src', arrs.join('/') + '/' + image);
		});
	}
});