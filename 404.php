<?php get_header();?>


	<main>
		<h1>No se ha encontrado nada</h1>
		<?php echo get_search_form(); ?>
		<h3>También puedes mirar nuestras categorías</h3>
		<?php wp_list_categories(); ?>
		<h3>Tambien mirar nuestas etiquetas</h3>
		NO ENCONTRADO
		<?php
			    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
			    $html .= "{$tag->name}</a>";
			
			$html .= '</div>';
			echo $html;

		 ?>
	</main>
<?php get_footer();?>
