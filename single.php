<!-- Articulos-->

<?php get_header(); ?>

        <div class="row">
          <div class="col-md-12">

            <?php while ( have_posts() ) : the_post();?>

                <article <?php post_class(); ?>>

                  <div class="row">

                    <div class="col-sm-9">

                      <!--Titulo-->
                      <div class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                      </div>

                      <!-- Contenido-->
                      <div class="entry-content">
                        <?php the_content(); ?>
                      </div>
                      <!--Comentarios-->
                      <?php
                        if ( comments_open() || get_comments_number() ) :
                          comments_template();
                        endif;
                      ?>

                    </div>

                    <!-- widget sidebar-->
                    <?php get_sidebar(); ?>
                  </div>
                </article>
              <?php
              endwhile;
            ?>

          </div>
        </div>

<?php get_footer(); ?>