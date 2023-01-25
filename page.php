<?php
/** Web dinamicas, la tienda, mi cuenta */

get_header(); ?>

        <div class="row page-content">
          <div class="col-md-9">
          
          <?php
          //Mostrar informacion dinamica, accede BD
              while ( have_posts() ) : the_post(); //Si hay contenido, empieza a mostrarlo
              ?>
                <article <?php post_class(); ?>> <!-- Indexa articulos del propio WP-->
                  <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                  </div>
                  
                  <div class="entry-content">
                  
                    <?php the_content(); ?>
                    
                  </div>
                  
                </article>
                
              <?php
              endwhile;
            ?>

          
          </div>
          <?php get_sidebar(); ?>
          </div>
        </div>

<?php get_footer(); ?>