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
 <h1 class="titreCours"> cours</h1>
	<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

		<section class="gabaritCours">
		<?php
			/* Start the Loop */
			$precedent = 0;
			//echo '<section>';
			while ( have_posts() ) :
				the_post();
				convertirTableau($tPropriété);
				if ($precedent != $tPropriété['session']){ //commence une nouvelle session
					echo '</section>';
					echo '<div class="enteteSession">' . $tPropriété['session'] . '</div>';
					echo '<section class="session">';
					//echo $tPropriété['session'];
				}
				$precedent = $tPropriété['session'];
				get_template_part( 'template-parts/content', 'cours');

				//if ($precedent != $tPropriété['session']){ }	//si est différent
					//echo '</section>';
				

			endwhile;?>

			<section>

		
		<?php endif; ?>
		

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-6,6);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	//$tPropriété['typeCours'] = get_field('type_de_cours');
}
