<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */


get_header();
?>

	<main id="primary" class="site-main">

	

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
		<div class="enteteProjet">

		<?php 	the_archive_title( '<h1 class="titleProjets">', '</h1>' );
		?>
		</div>
		</header>

		<section class="galerieProjets">
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>

				
			<?php	get_template_part( 'template-parts/content', 'projets-essai'); ?>

		<?php endwhile;?>
		<section>

		<?php endif; ?>




	</main><!-- #main -->

<?php
get_footer();
