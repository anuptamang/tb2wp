<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tb2wp
 */

?>

		<footer id="footer" class="pt-md-12">
			<div class="footer-holder bg-gradient-pink">
				<div class="container">
					<div class="text-block text-center text-md-left pt-8 pt-md-10 pb-md-10">
						<h4 class="h1 md text-white mb-md-0 mr-md-4 font-weight-normal">Join our mailing list</h4>
						<a href="#" class="btn btn-white">Sign up <i class="fas fa-arrow-right"></i></a>
						<div class="img-holder pt-8 pt-md-0"><img src="<?php bloginfo('template_url');?>/images/img1.png" alt="image description"></div>
					</div>
				</div>
			</div>
			<div class="footer-frame bg-black text-white text-center">
				<div class="container py-6">
					<ul class="list-inline justify-content-center social-networks mb-4">
						<li><a href="#" class="facebook text-reset"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" class="twitter text-reset"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" class="instagram text-reset"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" class="linkedin text-reset"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
					<ul class="list-unstyled list-footer font-weight-medium">
						<li><a class="text-reset" href="#">Advertise with Us</a></li>
						<li><a class="text-reset" href="#">Terms of Use</a></li>
						<li><a class="text-reset" href="#">Privacy Policy</a></li>
						<li><a class="text-reset" href="#">FAQs</a></li>
						<li><a class="text-reset" href="#">Contact Us</a></li>
						<li class="copyright"> © 2019 <a class="text-reset" href="#">Network Ten Pty Limited</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url');?>/js/jquery-3.3.1.min.js"><\/script>')</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.main.js"></script>

</body>
</html>
