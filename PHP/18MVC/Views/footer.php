<div class="copy">
		<div class="logo two">
			<a href="index.html">
				<h3>Day Spa</h3>
			</a>
		</div>
		<ul class="s_social two">
			<li><a href=""> <i class="fb1"> </i> </a></li>
			<li><a href=""><i class="tw1"> </i> </a></li>
			<li><a href=""><i class="linked1"> </i> </a></li>
			<li><a href=""><i class="google1"> </i> </a></li>
		</ul>

		<p>&copy; 2015 Day Spa. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
	<!--start-smoth-scrolling-->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!--start-smoth-scrolling-->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
					containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>

</body>

</html>