<?php
/**
* Template Name: contacto 
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="top-content clearfix">
               <img src="<?php echo get_bloginfo('template_url'); ?>/images/bk-contacto.jpg" />
               
            </div><!-- top -->
            <div class="contacto-central clearfix">
               <div class="casa-central">
                <span class="ic"></span>
                   <h4>casa central</h4>
                   <p><strong>Av. Blas Pareda 7901</strong></p>
                   <p><strong>teléfono</strong> 489 8300</p>
                   <p><strong>horario</strong></p>
                   <p>Lunes a Sábados</p>
                   <p>8 a 12,30 hs / 16,30 a 21 hs.</p>
                   <p>Domingos de 8 a 12,30 hs.</p>
                   <a href="#">[ver en google map]</a> 
               </div>

               <div class="ponete-contacto">
                    <span class="ic"></span>
                    <h4>ponete en contacto con</h4>
                    <p><strong>administración</strong></p>
                    <p>teléfono 489 8300 (lineas rot.)</p>
                    <p>mail rrhh@kilgelmannsrl.com.ar</p>
                    
                    <p><strong>recursos humanos</strong></p>
                    <p>teléfono 489 8300 (lineas rot.)</p>
                    <p>mail rrhh@kilgelmannsrl.com.ar</p>

                    <p><strong>ventas</strong></p>
                    <p>teléfono 489 8300 (lineas rot.)</p>
                    <p>mail rrhh@kilgelmannsrl.com.ar</p>
               </div>

               <div class="jk-cercano">
                    <span class="ic"></span>
                    <h3>Encontrá tu <br /> JK más cercano</h3>
                    <p>
                        Contamos con ocho locales distribuídos en las ciudades de Santa Fe, santo Tomé
                         y San Carlos. Buscá el que te quede más cómodo y visitanos.
                         <a href="#" class="ver">Ver Sucursales <span></span></a> 
                    </p>
               </div>
            </div><!-- content-central -->

            <div class="contacto-box clearfix">
                <div class="contacto-formulario">
                    <?php echo do_shortcode('[contact-form-7 id="52" title="Esperamos tu consulta a través de este formulario"]'); ?>
                </div>
                 <div class="ver-sucursales">
                 <span>&nbsp;</span>
                 <h4>trabajá con nosotros</h4>
                 <p>
                     Nuestro crecimiento y desarrollo está sostenido principalmente por el 
                     valioso aporte de cada una de las personas que trabajan en  la empresa.
                 </p>
                 <p>
                     Si estás interesado de formar parte, es muy fácil y lo podés realizar aquí mismo.
                 </p>
                 <a href="#">MANDANOS TU CV</a>
             </div>
            </div>

        </div><!-- #content -->
    </div><!-- #primary --> 

<?php get_sidebar(); ?>
<?php get_footer(); ?>