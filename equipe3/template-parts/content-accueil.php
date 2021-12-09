<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

?>

<!-- permet de mettre le numero de la session, il c'est jamais placer il comme il faut :( -->
<!-- <divNoSession> 
    <h4><?php //echo $tPropriété['session'] ?> <h4>
</divNoSession> -->

  <!-- //content-->
<section class="sectionAccueil">
	<div class="titreEntete"> 
		<div class="titrePrincipal">L'harmonie entre la <br><span class="boldTitre">logique </span>et le <span class="boldTitre">créatif </span></div>
		<div class="sous-titre">
		Le Tim est un programme dans lequel on étudie diverses techniques en lien avec la conception et la programmation. 
		On réalise du montage vidéo, du design,des jeux vidéos,  de la programmation des sites web, de la 3D et bien plus.
	
		</div>
	</div>

	<section class="carouselAccueil"> 
		<div class="imagesCarrousel">
			<div><img class="imageUne" src="<?php echo get_site_url() . "/wp-content/uploads/2021/12/P1010672.jpg"?>"/></div>
			<div><img class="imageDeux" src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/vehicule.jpeg" ?>"/></div>
			<div><img class="imageTrois" src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/college.jpg" ?>"/></div>
		</div>
	</section>
	<section class="boutonsCarouAccueil">
		<button id="boutonCarre1"></button>
		<button id="boutonCarre2"></button>
		<button id="boutonCarre3"></button>
	</section>
	
</section>

