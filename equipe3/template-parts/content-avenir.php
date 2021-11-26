<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */

?>

<!-- <div class="globale">
<div class="second"> <div class="rond"> </div>creation </div>
<div class="troisieme"><div class="rond"> </div> programmation </div>
</div>  -->

<div class="avenir">
    <div class="scrollbar">
        <h2><a <?php echo get_permalink() ?>><?php the_title(); ?></a></h2>
        <p><?php echo get_the_content() ?></p>
    </div>
</div>