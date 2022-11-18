<?php
  global $menu_name, $menu_items;

  $is_shelf_health = is_page_template( 'page-shelf-health.php' );
  $shelf_health_nav_class = $is_shelf_health ? 'nav--new' : '';
?>

<?php if ($menu_name && $menu_items && !empty($menu_items) && !is_wp_error( $menu_items )) : ?>    
  <!-- nav--new - модификатор, чтобы поменять стили к элементам -->
  <nav class="<?= ($menu_name === 'header' || $menu_name === 'header-shelf-healf') ? 'header__nav' : 'footer__nav'; ?> nav <?= $shelf_health_nav_class; ?>">
    <ul class="nav__list">
      <?php foreach ( (array) $menu_items as $key => $menu_item ) : ?>
        <?php 
          // Compare menu object with current page menu object
          $current = $menu_item->object_id == get_queried_object_id() ? 'nav__link--active' : '';  
        ?>
        <li class="nav__item">
          <a class="nav__link <?= $current; ?>" href="<?= $menu_item->url; ?>">
            <?= $menu_item->title; ?>    
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
<?php endif; ?>