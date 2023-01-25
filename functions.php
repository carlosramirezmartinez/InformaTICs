<?php
//Menu
register_nav_menus( array(
    'top' => __('Top Menu', 'informatics'),
));

function informatics_menu_classes($classes, $item, $args){ //devolver valores ordenados en el header
    if($args->theme_location == 'top'){ //item es necesario para filtrar despues
        $classes[] = 'list-inline-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class','informatics_menu_classes',1,3); //filtra para que salgan en linea y no se desordenen


//Mostrar stock total
add_action( 'woocommerce_after_shop_loop_item_title', 'dcms_show_stock_list_products' );
function dcms_show_stock_list_products() {
	global $product;

    if ( $product->is_in_stock() ) {
        echo '<div class="stock" >' . $product->get_stock_quantity() . ' en stock</div>';
    } else {
        echo '<div class="out-stock" >No hay stock</div>';
    }
}

//Sidebar Blog
function informatics_sidebar() {
    register_sidebar(array(
        'name' => 'informatics_sidebar',
        'id'   => 'customsidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '</h2>',
        'after_title' => '</h2>'
    ));
}
add_action( 'widgets_init','informatics_sidebar');

//Sidebar Tienda, cuenta
function informatics_publi(){
    register_sidebar(array(
        'name' => 'informatics_publi',
        'id'   => 'custompubli',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '</h2>',
        'after_title' => '</h2>'
));
}
add_action( 'widgets_init','informatics_publi');