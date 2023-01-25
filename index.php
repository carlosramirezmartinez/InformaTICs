
    <?php get_header()?> <!--header.php-->
    
    
    
<?php
// Plugin slider
echo do_shortcode('[smartslider3 slider="2"]');
?>
    <br><br>


        <div class="row mar-top-80">
          <div class="col-md-6">
            <h3>Nuestra Tienda <b>InformaTICs</b></h3>

            <p>Centrarnos en la calidad y la agilidad nos permite ofrecer una experiencia excepcional que nuestros clientes reconocen y valoran.</p>

            
            <p>Vivimos como propio el negocio de nuestros clientes y nos esforzamos por ayudarles a prosperar.</p>

            <p>El negocio en el que operamos nos obliga a ser ágiles, flexibles y con gran capacidad de respuesta.</p>

            <p>Estamos muy orgullosos del valor de transformación que nuestros clientes reconocen en nuestro trabajo.</p>
          </div>
          <div class="col-md-6">
            <h3>Dónde encontrar <b>InformaTICs</b> </h3>
            <p><a href="https://www.google.com/maps/place/IES+Tetu%C3%A1n+de+las+Victorias/@40.4731759,-3.6997766,17z/data=!3m1!4b1!4m5!3m4!1s0xd422912c3f95711:0xfd6d0a1eb67bcfc!8m2!3d40.4731759!4d-3.6975879">InformaTICs S.L. - C/ Vía Límite, 14 - Madrid 28029</a></p>
            <h3>Contacte con nosotros</h3>
            <p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="Imagen 1" class="img-fluid">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="Imagen 2" class="img-fluid">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/gmail.png" alt="Imagen 3" class="img-fluid">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/whatsapp.png" alt="Imagen 4" class="img-fluid">
            </p>

        <!-- Widgets inicio -->
        </div>
          <?php dynamic_sidebar( 'smartslider_area_1' ); ?>
        </div>

    
    <!-- Footer -->
    <?php get_footer();?> <!--footer.php-->
    
</body>

</html>