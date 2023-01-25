<?php
/*Autor, Categoria, etiquetas, etc*/

get_header(); ?>
	<!-- _e interpreta la salida -->
	<?php //categoria
	if (is_category()) { ?>
	<h1 class="entry-title">
      <strong><?php _e('Categoría:'); ?></strong> <?php single_cat_title(); ?> 
    </h1>
	<?php } ?>

	<?php //etiqueta
	if (is_tag()) { ?>
	<h1 class="entry-title">
		<strong><?php _e('Etiqueta:'); ?></strong> <?php single_tag_title(); ?>
	</h1>
	<?php } ?>


<div class="row page-content">

    <div class="col-md-9">

    	<?php
	      // Start the loop, si hay post, empieza
	      while ( have_posts() ) : the_post();
	      ?>

			<article <?php post_class('row'); ?>>

				<div class="col-sm-4 post-thumbnail">
					<?php // chekea el post
                    if ( has_post_thumbnail() ) :
                      the_post_thumbnail('large');
                    endif ?>
				</div>

				<div class="col-sm-5">
					<div class="entry-header">
						<h2 class="entry-title">
							<a href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>
					<div class="entry-content">
						<a href="<?php echo get_permalink(); ?>">
							<?php _e('Seguir leyendo'); ?>
						</a>
					</div>
				</div>
				
			</article>
			
			<hr>	
			
			<?php the_excerpt(); ?> <!-- visualiza el contenido de la entrada de antemano-->

		<?php
          // End of the loop.
          endwhile;
        ?>
				
    </div>
	<!-- widget sidebar-->
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>