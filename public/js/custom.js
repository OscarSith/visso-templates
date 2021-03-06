window.fbAsyncInit = function() {
	FB.init({
		appId      : '1614489195537932',
		xfbml      : false,
		version    : 'v2.6'
	});
	FB.Event.subscribe('xfbml.render', function(resp) {
		$('#facebookModalId').on('show.bs.modal', function(e) {
			var $this = $(e.relatedTarget);
			$('#fbImg').attr('src', $('#productImage').attr('src'));
			$('#fbMessage').html($('#product-description').html());
		});

		$('#shareContent').on('click', function(e) {
			var $this = $(this),
				$inputs = $.merge($('#form-facebook-share :input'), $this);

			$inputs.prop('disabled', true);
			Publicar($inputs);
		});

		function initFb() {
			FB.getLoginStatus(function(resp) {
				if (resp.status === 'connected') {
					$('#facebookModalId').modal('show');
				} else {
					FB.login(function(resp) {
						console.warn(resp);
							$('#facebookModalId').modal('show');
						}, {
							scope: 'public_profile,publish_actions'
						}
					);
				}
			});
		}

		function Publicar($inputs) {
			FB.api('/me/feed', 'post', {
				message: $inputs.first().val(),
				name: $('#productName').html(),
				link: location.href,
				description: $('#product-description').text(),
				picture: $('#productImage').attr('src')
			}, function(resp) {
				$inputs.prop('disabled', false);
				if (resp.error) {
					alert(resp.error.message);
				} else {
					$('#facebookModalId').modal('hide');
					alert('El producto ha sido compartido.');
				}
			});
		}

		$('#share-fb').prop('disabled', false).on('click', initFb).children().last().text('COMPARTIR');
	});
};
// $(function() {
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
				zoom: 20,
				center: new google.maps.LatLng(-12.106991,-77.03699),
				scrollwheel: false
			};
			var map = new google.maps.Map(document.querySelector('.map'), mapOptions);

			new google.maps.Marker({
				map: map,
				draggable: false,
				position: new google.maps.LatLng(-12.107091,-77.03692)
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}

	var $othersProducts = $('div.others-products');
	if ($othersProducts.length) {
		$othersProducts.slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev"><i class="fa fa-arrow-circle-left fa-lg"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next"><i class="fa fa-arrow-circle-right fa-lg"></i></button>',
			responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				},
			},
			{
				breakpoint: 780,
				settings: {
					slidesToShow: 2
				}
			}]
		});

		$('.others-products').on('click', '.item-products', function(e) {
			e.preventDefault();
			var $this = $(this),
				$img = $this.find('img')
				data = {img: $img.data('img'), name: $img.data('name'), description: $img.data('description')};

			$this.parent().find('img').removeClass('detail-product-selected');
			$this.children().first().addClass('detail-product-selected');

			var image = $('#productImage').attr('src'),
				arrs = image.split('/');

			arrs.pop();
			if (data.name) {
				$('#productName, #breadcrumbProductName').text(data.name);
				$('#product-description').html(data.description);
			}
			$('#productImage').attr('src', arrs.join('/') + '/' + data.img);
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
			responsive: [{
				breakpoint: 780,
				settings: {
					slidesToShow: 2
				}
			}]
		});

		$othersProyects.on('click', '.item-proyects', function(e) {
			var image = $(this).data('img'),
				curremtImage = $('#productImage').attr('src'),
				arrs = curremtImage.split('/');

			arrs.pop();
			$('#productImage').attr('src', arrs.join('/') + '/' + image);
		});
	}
// });