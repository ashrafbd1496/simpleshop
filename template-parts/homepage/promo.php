<?php if ( true == get_theme_mod( 'promo_display_setting', 'on' ) ) : ?>
	<!--promo section start-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="promo-box space-3">
						<div class="promo-img rounded bg-overlay" data-overlay="1"
						     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/kalama-dorshon.jpg);"></div>
						<div class="container">
							<div class="row justify-content-center align-items-center text-center">
								<div class="col-md-8">
									<!-- heading -->
									<h2 class="text-white mb-0 promo-title">
										Sale
									</h2>
									<h3 class="text-white promo-sub-title mt-0"><?php echo get_theme_mod('promo_title_setting'); ?></h3>

									<a href="<?php echo get_theme_mod('promo_button_link_setting'); ?>" class="promo-link"><?php echo get_theme_mod('promo_link_text_setting'); ?></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--promo section end-->
	<?php endif; ?>