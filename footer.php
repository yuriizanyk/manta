<?php

$logo = get_field('footer_logo', 'option');
$logo = wp_get_attachment_image($logo, 'full');

$social = get_field('social', 'option');
?>
<footer id="wcl-main-footer" class="wcl-footer">
	<div class="data-container wcl-container">
		<div class="data-row">
			<div class="data-col">
				<?php if (!empty($logo)) : ?>
					<div class="data-logo">
						<?php echo $logo; ?>
					</div>
				<?php endif; ?>

				<div class="data-social">
					<div class="data-social-item">
						<a href="https://www.google.com." class="data-social-item-inner" target="_blank">
							<span class="icon-twitter"></span>
						</a>
					</div>

					<div class="data-social-item">
						<a href="https://www.google.com." class="data-social-item-inner" target="_blank">
							<span class="icon-facebook"></span>
						</a>
					</div>

					<div class="data-social-item">
						<a href="https://www.google.com." class="data-social-item-inner" target="_blank">
							<span class="icon-linkedin"></span>
						</a>
					</div>
				</div>

				<div class="data-copyright">
					<?php
					$date = date("Y");
					?>
					© <?php echo $date; ?> Manta Media Inc.
					All rights reserved.
				</div>
			</div>

			<div class="data-col">
				<?php if (is_active_sidebar('footer-sidebar')) : ?>
					<?php dynamic_sidebar('footer-sidebar'); ?>
				<?php endif; ?>
			</div>

			<div class="data-col">
				<div class="data-b1">
					<div class="data-b1-title">
						Manta Members
					</div>

					<div class="data-b1-a">
						<div class="data-b1-a-item">
							<a href="<?php echo wp_login_url(); ?>">Log In</a>
						</div>

						<div class="data-b1-a-item">
							<a href="#" class="wcl-button">Sign Up</a>
						</div>
					</div>

					<div class="data-b1-text">
						<p>Search Manta’s Directory to find the Small Business you’re looking for</p>
					</div>

					<div class="data-b1-btn">
						<a href="#" class="wcl-button">Find a Business Near You!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer> <!-- #wcl-main-footer -->

</div> <!-- .wcl-body-inner -->


<?php wp_footer(); ?>


</body>

</html>