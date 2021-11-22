
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */

?>
// professeurs
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			//the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		
		 ?>
	</header><!-- .entry-header -->

	<?php equipe3_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'equipe3' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

	
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php equipe3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package equipe3
 */

?>
// professeurs

        <!-- <div class="site-prof">-->

            <article class="Professeurs">
                    
                    <!-- <div class="profs">
                        <h3 id="text-circulaire"><!?php the_title(); ?></h3>
                        <!?php the_post_thumbnail('thumbnail'); ?>
                    </div>-->

                    <div class="Denis">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Denis-1" ?>"></img>
                        <!--<p id="text-circulaire">Pellerin, Denis</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                        
                    </div>

                    <div class="Greg">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Greg-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Bony, Grégory</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>

                    <div class="Camille">
                    <img id="camille" src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Camille-1.png" ?>">
                    <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </img>
                        <!--<p id="text-circulaire">Semaan, Camille</p>-->
                        
                    </div>

                    <div class="Vincent">
                    <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Vincent-1.png" ?>"></img>
                       <!-- <p id="text-circulaire">Leblanc, Vincent</p>-->
                       <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>

                    <div class="Dominic">
                    <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Dominic-1.png" ?>"></img>
                       <!-- <p id="text-circulaire">Girard, Dominc</p>-->
                       <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>
                
                    <div class="Eddy">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Eddy-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Martin, Eddy</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>
                
                    <div class="Martin">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Martin-1.png" ?>"></img>
                        <!--<p id="text-circulaire">St-Pierre, Martin</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>

                    <div class="Vhaik">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Vhaik-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Toroussian, Vagharshak</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>

                    <div class="Manon">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Manon-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Bertrand, Manon</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>
                
                    <div class="Ahmed">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Ahmed-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Boudjani, Ahmed</p> -->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>

                    <div class="Mathieu">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Mathieu-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Dionne, Mathieu</p>--> 
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>
                
                    <div class="Caroline">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Caroline-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Martin, Caroline</p> -->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>

                    <div class="David">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/David-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Ross, David</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>
                
                    <div class="Stephanie">
                        <img src="<?php echo get_site_url() . "/wp-content/uploads/2021/11/Stephanie-1.png" ?>"></img>
                        <!--<p id="text-circulaire">Pouiliot, Stéphanie</p>-->
                        <div class="Informations">
                            <h3 class="infos">Informations supplémentaires : </h3>
                        </div>
                    </div>
            </article>
    <!--</div>-->
             
                
                <!--<div class="Stephanie">
                    <img src="<!?php echo get_site_url() . "/wp-content/uploads/2021/11/Vincent-280x300.png" ?>"></img>
                    <p id="text-circulaire">Pouiliot, Stéphanie</p>
                </div>-->

