<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package equipe3
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="site-info">

		<div class="reseaux-sociaux">
		<img src="<?php echo get_site_url() . "/wp-content/uploads/2021/10/facebook.png" ?>"></img>
		<img src="<?php echo get_site_url() . "/wp-content/uploads/2021/10/instagram.png" ?>"></img>
		<img src="<?php echo get_site_url() . "/wp-content/uploads/2021/10/youtube.png" ?>"></img>
		<img src="<?php echo get_site_url() . "/wp-content/uploads/2021/10/maisonneuve.png" ?>"></img>

		</div>

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'equipe3' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'equipe3' ), 'WordPress' );
				?>
			</a>
			<!--<span class="sep"> | </span>--> 
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
			?>
			<div class="nomFooter"><?php echo("Techniques d'intégration Multimédia" );?> </div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
