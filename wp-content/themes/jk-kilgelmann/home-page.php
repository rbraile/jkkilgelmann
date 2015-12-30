<?php
/**
* Template Name: Home-page 
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="top-content clearfix">
                <div class="slider-content">
                    <?php masterslider(1); ?>
                </div>
                <div class="novedades">
                    <p>Novedades de <strong>JK KILGELMANN SUPERMERCADOS</strong></p>
                    <ul>
                        <?php echo do_shortcode("[mostrar_cat cat='3']"); ?>
                    </ul>
                </div>
            </div><!-- top -->
            <div class="content-central clearfix">
                <div class="ganadores">
                    <p>Ganadores de sorteo <span>tarjeta amigo</span></p>
                </div>
                <div class="tarjeta">
                    <p>Tarjeta <span>cliente amigo</span></p>
                </div>
                <div class="sucursales">
                    <p>Nuestras <span>sucursales</span></p>
                </div>
            </div><!-- content-central -->
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>