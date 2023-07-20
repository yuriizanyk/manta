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

				<?php if (have_rows('social', 'option')) : ?>
					<div class="data-social">
						<?php while (have_rows('social', 'option')) : the_row(); ?>
							<?php
							$icon = get_sub_field('icon');
							$link = get_sub_field('link');
							?>
							<div class="data-social-item">
								<?php if (!empty($link)) : ?>
									<a href="<?php echo $link; ?>" class="data-social-item-inner" target="_blank">
										<?php if (!empty($icon)) : ?>
											<?php echo $icon; ?>
										<?php endif; ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<div class="data-copyright">
					<?php
					$date = date("Y");
					?>
					© <?php echo $date; ?> Manta Media Inc.
					All rights reserved.
				</div>
			</div>

			<div class="data-col">
				<div class="data-sidebar">
					<?php if (is_active_sidebar('footer-sidebar')) : ?>
						<?php dynamic_sidebar('footer-sidebar'); ?>
					<?php endif; ?>
				</div>

				<div class="data-sidebar mod-two">
					<?php if (is_active_sidebar('footer-sidebar-mobile')) : ?>
						<?php dynamic_sidebar('footer-sidebar-mobile'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="data-a">
			<div class="data-a-row">
				<div class="data-a-col">
					<div class="data-b1">
						<div class="data-b1-title">
							Manta Business Listing Members
						</div>

						<div class="data-b1-a">
							<div class="data-b1-a-item">
								<a href="<?php echo wp_login_url(); ?>">Log In</a>
							</div>

							<div class="data-b1-a-item">
								<a href="#" class="wcl-button">Sign Up</a>
							</div>
						</div>
					</div>
				</div>

				<div class="data-a-col">
					<div class="data-b1">
						<div class="data-b1-text">
							Search Manta’s Directory to find the <em>Small Business</em> you’re looking for
						</div>

						<div class="data-b1-btn">
							<a href="#" class="wcl-button">Find a Business Near You!</a>
						</div>
					</div>
				</div>

				<div class="data-a-col">
					<div class="data-b1">
						<div class="data-b1-text">
							Create a Free Online Business Listing and Improve your SEO Rankings
						</div>

						<div class="data-b1-btn">
							<a href="#" class="wcl-button">FREE Business Listing</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="data-b2">
			<?php wp_nav_menu(
				array(
					'container'      => '',
					'items_wrap'     => '<ul class="data-b2-menu">%3$s</ul>',
					'theme_location' => 'footer-mobile',
					'depth'          => 1,
					'fallback_cb'    => '',
				)
			); ?>
		</div>

		<div class="data-b3">
			<div class="data-copyright">
				<?php
				$date = date("Y");
				?>
				© <?php echo $date; ?> Manta Media Inc.
				All rights reserved.
			</div>

			<?php if (have_rows('social', 'option')) : ?>
				<div class="data-social">
					<?php while (have_rows('social', 'option')) : the_row(); ?>
						<?php
						$icon = get_sub_field('icon');
						$link = get_sub_field('link');
						?>
						<div class="data-social-item">
							<?php if (!empty($link)) : ?>
								<a href="<?php echo $link; ?>" class="data-social-item-inner" target="_blank">
									<?php if (!empty($icon)) : ?>
										<?php echo $icon; ?>
									<?php endif; ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer> <!-- #wcl-main-footer -->

</div> <!-- .wcl-body-inner -->


<?php wp_footer(); ?>


</body>

</html>