<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reborn
 */

global $web;

?>

	<footer id="colophon" class="site-footer">


        <nav class="nav_footer">
            <ul class="column1 reborn_footer">
                <li class="titre_footer">REBORN®</li>
                <li><a href="<?php echo esc_url(home_url('/')) ?>" title="">Page d'accueil</a></li>
                <li><a href="<?php echo esc_url(home_url($web['pages']['produits']['slug'])); ?>" title="">Nos produits</a></li>
                <li><a href="<?php echo esc_url(home_url($web['pages']['tresors']['slug'])); ?>" title="">Nos trésors</a></li>
                <li><a href="<?php echo esc_url(home_url($web['pages']['blog']['slug'])); ?>" title="">Blog</a></li>
            </ul>
            <ul class="column1 service_client_footer">
                <li class="titre_footer">SERVICE CLIENT</li>
                <li><a href="<?php echo esc_url(home_url($web['pages']['contact']['slug'])); ?>" title="">Nous contacter</a></li>
            </ul>
            <ul class="column1 mentions_legales_footer">
                <li class="titre_footer">MENTIONS LÉGALES</li>
                <li class="btn-menu active"><a href="<?php echo esc_url(home_url
                    ($web['pages']['mentions-legales']['slug']));
                    ?>" title="">Mentions légales</a></li>
                <li class="btn-menu active"><a href="<?php echo esc_url(home_url($web['pages']['cgu']['slug']));
                    ?>" title="">Conditions Générales d'Utilisation</a></li>
            </ul>
            <div class="reseaux_footer">
                <p class="titre_footer titre_reseaux">Réseaux</p>

                <a class="reseauF" target="_blank" href="https://www.facebook.com/Reborn-114591920282114"><img src="<?php echo
                    get_template_directory_uri();
                ?>/asset/img/facebook.png" alt="lien facebook"> Facebook</a>

                <a class="reseauI" target="_blank" href="https://www.instagram.com/reborn_france/"><img src="<?php echo
                    get_template_directory_uri();
                ?>/asset/img/instagram.png" alt="lien instagram"> Instagram</a>

                <a class="reseauL" target="_blank" href="https://www.linkedin.com/in/reborn-france-33a0911b0/"><img
                            src="<?php echo
                    get_template_directory_uri();
                ?>/asset/img/linkedin.png" alt="lien linkedin"> LinkedIn</a>

                <a class="reseauT" target="_blank" href="https://twitter.com/france_reborn"><img src="<?php echo
                    get_template_directory_uri();
                ?>/asset/img/twitter.png" alt="lien twitter"/> Twitter</a>
            </div>
        </nav>

        <p class="copyright">Copyright© Reborn - 2020 - Tous droits réservés</p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
