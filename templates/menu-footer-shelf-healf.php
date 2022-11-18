<?php
  global $menu_name, $menu_items;

  $menu_name = 'footer-shelf-healf';
  $locations = get_nav_menu_locations();
  
  if( $locations && isset( $locations[ $menu_name ] ) ){
  
    // получаем элементы меню
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
  }

  get_template_part( 'templates/nav' );
?>