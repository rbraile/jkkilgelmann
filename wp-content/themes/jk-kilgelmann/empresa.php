<?php
/**
* Template Name: Empresa 
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="top-content clearfix">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner-top-empresa.jpg" />
            </div><!-- top-content -->
            <div class="content-general clearfix">
                <div class="content-left">
                    <h1>Acerca de JK KILGELMANN SUPERMERCADOS</h1>
                    <p>
                        Nuestra historia comienza en el año 1943 cuando el matrimonio Jorge A. Kilgelmann(padre)
                         y Esther
                    </p> 
                </div><!-- content-left -->
                <div class="content-right">
                    <div class="jk-cercano">
                        <span></span>
                        <a href="#">Encontrá tu <br />JK más cercano <span></span></a>
                    </div>
                    <a class="banner-laboral" href="#">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner-unite.jpg">
                    </a>
                    <div class="laboral">
                        <h4>Trabajá <span> con nosotros</span></h4>
                        <p>
                            Nuestro crecimiento y desarrollo está sostenido principalmente
                            por el valioso aporte de cada una de las personas que trabajan en la
                            empresa.
                        </p>
                        <p>
                            Si estás interesado de formar parte, es muy fácil y lo podés realizar 
                            aquí mismo.
                        </p>
                        <span class="fondo"></span>
                        <span class="arrow"></span>
                    </div>
                    <div class="formuario-laboral clear">
                        <h4>Llená este formulario y formá parte de nuestra bolsa de trabajo.</h4>
                        <?php echo do_shortcode('[contact-form-7 id="34" title="Bolsa laboral"]');?>
                    </div>
                </div><!-- content-right -->
            </div><!-- content-central -->
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>