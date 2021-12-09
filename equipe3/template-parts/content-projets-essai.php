<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */
global $tPropriété;

?>



<article class="projets">

<a class="<?php echo $tPropriété['typeProjets']; ?>" href="<?php echo get_permalink() ?>">  <?php echo $tPropriété['titre']; ?><?php the_title(); ?></a>

   <!--  <div class="containerPrincipal">
    <div class="containerProjet"> -->
    <?php the_post_thumbnail('thumbnail'); ?>
        
   <!--  </div> -->



<!-- </div> -->
</article>

