	
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-sec-one">
					<p class="lineone">Speak with an advisor</p>
					<p class="linetwo">Call <a href="tel:01614407272">0161 440 7272</a></p>
					<p class="linethree">Monday to Friday 8am to 8pm</p>

					<ul class="list-inline footer-socials">
						<li><a href=""><i class="fab fa-facebook-f"></i></li>
						<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-2 footer-sec-two">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Personal Lease</a></li>
						<li><a href="">Business Lease</a></li>
						<li><a href="">Contact Us</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Random Link</a></li>
					</ul>
				</div>
				<div class="col-lg-6 footer-sec-three">
					<h2>Receive our latest offers and news</h2>
					<form action="" class="pull-right">
						<label for="" class="pull-right">Name</label><br>
						<input type="text" placeholder="Your Name..." ><br>
						<label for="" class="pull-right">Email</label><br>
						<input type="text" placeholder="Your Email..." ><br>
						<button><i class="fas fa-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
		<div class="container footer">
			<div class="row">
				<div class="col-lg-4">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Footer Logo" id="footer-logo"></a>
				</div>
				<div class="col-lg-4">
					<address>
						17 Stoney Ln, Wilmslow SK9 6LG
					</address>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	<!-- JS Files -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>