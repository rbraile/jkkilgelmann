<?php
/**
* Template Name: Tarjeta 
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="top-content clearfix">
                <div class="slider-content">
                    <?php masterslider(3); ?>
                </div>
                <div class="novedades">
                    <p>Último sorteo <strong>Tarjeta cliente amigo</strong></p>
                    <ul>
                        <li>
                            <a href="#">
                                Jorge Benavidez
                                <span class="controls">Sucursal gral paz <span></span></span>
                            </a>
                        </li>
                        <li>
                           <a href="#">
                                Jorge Benavidez
                                <span class="controls">Sucursal gral paz <span></span></span>
                           </a>
                        </li>
                    </ul>
                </div>
            </div><!-- top -->
            <div class="content-central clearfix">
                <div class="que">
                    <span>&nbsp;</span>
                    <h4>¿Qué es la tarjeta Cliente Amigo?</h4>
                    <p>
                        Podés ahorrar dinero en cada producto y participar de sorteos semanales por órdenes de compra.
                        <a href="#">Leer términos y condiciones</a>
                    </p>
                </div>
                <div class="como">
                    <span>&nbsp;</span>
                    <h4>¿Cómo consigo la tarjeta?</h4>
                    <p>
                        Podés ahorrar dinero en cada producto y participar de sorteos semanales por órdenes de compra.
                        <a href="#">Ver Sucursales cercanas</a>
                    </p>
                </div>
                <div class="beneficios">
                    <span>&nbsp;</span>
                    <h4>Beneficios de nuestra tarjeta</h4>
                    <p>Podés ahorrar dinero en cada producto y participar de sorteos semanales por órdenes de compra.</p>
                </div>
            </div><!-- content-central -->
            <div class="content-form clearfix">
                <?php echo do_shortcode('[contact-form-7 id="31" title="Tarjeta cliente amigo"]'); ?>
                <div class="ver-sucursales">
                    <span>&nbsp;</span>
                    <h4>Enviá el formulario y buscá tu tarjeta!</h4>
                    <p>
                        Recibimos tus datos, nos ponemos en contacto por teléfono para corroborarlos y
                        en 48 horas hábiles podés buscar la tarjeta por la sucursal que elegiste. 
                    </p>
                    <a href="#">VER SUCURSALES</a>
                </div>
            </div>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>