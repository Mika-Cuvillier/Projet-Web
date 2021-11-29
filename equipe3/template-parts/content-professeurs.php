
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */

?>
        <!-- <div class="site-prof">-->
            <article class="professeurs">
                <div class="profs">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div id="Informations">
                        <h2 id="titreInfos"><?php echo get_the_content() ?></h2>
                        <!--<p id="infos"><!?php echo get_the_content() ?></p>-->
                    </div>
                </div>
            </article>
                    
                    