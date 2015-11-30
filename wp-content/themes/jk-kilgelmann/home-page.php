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
                        <li>
                            <a href="#">
                                15% con tus tarjetas de BBVA Frances promoción válida desde 01/06/2015 
                                hasta 01/06/2015 en el caso de compras con tarjetas visa debito
                                <span class="controls">2/10/2015 <span></span></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                15% con tus tarjetas de BBVA Frances promoción válida desde 01/06/2015 
                                hasta 01/06/2015 en el caso de compras con tarjetas visa debito
                                <span class="controls">2/10/2015 <span></span></span>
                            </a>
                        </li>
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