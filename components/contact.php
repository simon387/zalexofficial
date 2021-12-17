<section id="contact" class="contact">
	<div class="container">
		<div class="section-title">
			<h2><?= tr('contact') ?></h2>
			<p><?= tr('contact_me') ?></p>
		</div>
		<div class="row mt-2">
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="info-box">
					<i class="bx bx-map"></i>
					<h3><?= tr('my_address') ?></h3>
					<p>Arezzo</p>
				</div>
			</div>
			<div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
				<div class="info-box">
					<i class="bx bx-share-alt"></i>
					<h3><?= tr('social_profiles') ?></h3>
					<div class="social-links">
						<a href="<?=facebook_link ?>" class="facebook"><i class="bi bi-facebook"></i></a>
						<a href="<?=instagram_link ?>" class="instagram"><i class="bi bi-instagram"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 mt-4 d-flex align-items-stretch">
				<div class="info-box">
					<i class="bx bx-envelope"></i>
					<h3><?= tr('email_me') ?></h3>
					<p>contact@example.com</p>
				</div>
			</div>
<!--			<div class="col-md-6 mt-4 d-flex align-items-stretch">-->
<!--				<div class="info-box">-->
<!--					<i class="bx bx-phone-call"></i>-->
<!--					<h3>Call Me</h3>-->
<!--					<p>+1 5589 55488 55</p>-->
<!--				</div>-->
<!--			</div>-->
		</div>
		<form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
			<div class="row">
				<div class="col-md-6 form-group">
					<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
				</div>
				<div class="col-md-6 form-group mt-3 mt-md-0">
					<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
				</div>
			</div>
			<div class="form-group mt-3">
				<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
			</div>
			<div class="form-group mt-3">
				<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
			</div>
			<div class="my-3">
				<div class="loading">Loading</div>
				<div class="error-message"></div>
				<div class="sent-message">Your message has been sent. Thank you!</div>
			</div>
			<div class="text-center">
				<button type="submit">Send Message</button>
			</div>
		</form>
	</div>
</section>
