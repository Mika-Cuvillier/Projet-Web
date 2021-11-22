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

<!-- permet de mettre le numero de la session, il c'est jamais placer il comme il faut :( -->
<!-- <divNoSession> 
    <h4><?php //echo $tPropriété['session'] ?> <h4>
</divNoSession> -->

  
<article>
	
	<p><?php echo $tPropriété['sigle'] .  ' <i class="far fa-edit"></i>'. $tPropriété['nbHeure'] ; ?></p>
	<a class="<?php echo $tPropriété['typeCours']; ?>" href="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a>
	<p>Session : <?php echo $tPropriété['session']; ?></p>
</article>
 


