<?php if ( true == get_theme_mod( 'banner_display_setting', 'on' ) ) : ?>
<!--hero section start-->
<div id="home">
	<section class="hero js_full_height base-gradient- " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/risalahshop-hero.jpg');">
		<div class="hero-content">
			<div class="container">
				<div class="row">
					<div class="col-md-5" data-wow-duration="2s" data-wow-delay="1s">
						<h1 class="hero-title"><?php echo esc_html(get_theme_mod('banner_title_setting')); ?>
						</h1>
						<a href="<?php echo esc_url(get_theme_mod('banner_link_setting')); ?>" class="hero-link"><?php echo esc_html(get_theme_mod('banner_link_text_setting')); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!--hero section end-->
<?php endif; ?>