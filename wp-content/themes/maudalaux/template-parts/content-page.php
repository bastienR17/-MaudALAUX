<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maudalaux
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php maudalaux_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maudalaux' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<script>
	const lirePlus = document.getElementById("lireplus")
	const txtMin = document.getElementById("text-propos-min")
	const txtMax = document.getElementById("text-propos-max")

	lirePlus.addEventListener('click', () => {
		if (txtMax.style.display == "none") {
			txtMax.style.display = "block"
			txtMin.style.display = "none"
		}else{
			txtMax.style.display = "none"
			txtMin.style.display = "block"
		}		
  	})
</script>