<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */

?>

<div class="avenir">
    <h2><a <?php echo get_permalink() ?>><?php the_title(); ?></a></h2>
    <p><?php echo get_the_content() ?></p>
  
</div>