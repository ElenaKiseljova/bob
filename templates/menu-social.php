<?php
  $menu_name = 'social';
  $locations = get_nav_menu_locations();
  
  if( $locations && isset( $locations[ $menu_name ] ) ){
  
    // получаем элементы меню
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
  }

  $is_shelf_health = is_page_template( 'page-shelf-health.php' );
  $shelf_health_social_class = $is_shelf_health ? 'social--show' : '';
?>

<?php if ($menu_items && !empty($menu_items) && !is_wp_error( $menu_items )) : ?> 
  <!-- social--show - модификатор, чтобы показать соцсети -->
  <div class="social <?= $shelf_health_social_class; ?>">
    <ul class="social__list">
      <?php foreach ( (array) $menu_items as $key => $menu_item ) : ?>
        <li class="social__item">
          <a href="<?= $menu_item->url; ?>">
            <span class="visually-hidden">
              <?= $menu_item->title; ?> 
            </span>  
            <svg width="27" height="27" aria-label="<?= $menu_item->title; ?>">
              <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#<?= mb_strtolower( $menu_item->title ); ?>"></use>
            </svg> 
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>   
<?php endif; ?>