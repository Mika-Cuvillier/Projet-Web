<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<!-- 
<p> php echo $tPropriété['sigle'] .  ' <i class="far fa-edit"></i>'. $tPropriété['nbHeure'] ; ?></p> -->
  
<article>
	
	<p><?php echo $tPropriété['sigle'] . $tPropriété['nbHeure'] ; ?></p>
	<a class="<?php echo $tPropriété['typeCours'] ; ?>" href="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a>
	<p>Session : <?php echo $tPropriété['session']; ?></p>
</article>
 


