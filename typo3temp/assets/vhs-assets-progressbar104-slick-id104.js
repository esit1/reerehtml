
			$(document).ready(function () {
				$('#slick-id104').slick({
					autoplay: true,
					autoplaySpeed: 5000,
					infinite: true,
					dots: true,
					speed: 800,
					touchThreshold: 25,
					cssEase: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)',
					useTransform: true
				});
			});
		


			$(document).ready(function () {
				var line = new ProgressBar.Line('#loader-slick-id104', {
					color: '#27ae60',
					trailColor: '#f4f4f4',
					strokeWidth: 0.7,
					trailWidth: 0.7,
					easing: 'easeInOut',
					duration: 5000,
				});

				line.animate(1.0);

				
						$('#slick-id104').on('beforeChange', function(event, slick, currentSlide, nextSlide){
							line.set(0);
							line.animate(1.0);
						});

						$( "#slick-id104" ).mouseover(function() {
							line.stop();
						});

						$( "#slick-id104" ).mouseout(function() {
							line.animate(1.0);
						});
					
			});
		

