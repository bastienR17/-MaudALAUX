<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maudalaux
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info flex justify-around pt-12">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer'
					)
				);
			?>
			<div class="socials flex gap-7">
				<a href="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tiktok.png" alt="Logo TikTok">
				</a>
				<a href="https://www.instagram.com/maudalaux/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.png" alt="Logo Instagram">
				</a>
				<a href="https://www.facebook.com/maudalaux.ebeniste">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png" alt="Logo Facebook">
				</a>
				<a href="https://www.youtube.com/channel/UC9tARdddAEzQcVv9oh8iY3w">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ytb.png" alt="Logo YouTube">
				</a>
				<a href="https://www.linkedin.com/in/maud-alaux-a2b5064/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png" alt="Logo LinkedIn">
				</a>
				
			</div>
			<div class="expertise flex flex-col items-center gap-7">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/expfeng.png" alt="Logo Ecole de Feng Shui">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/artidart.png" alt="Logo Artisant d'art">
			</div>
		</div>
		<a class="m-auto text-white hover:text-white" href="#">@Maud Alaux 2022</a>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
