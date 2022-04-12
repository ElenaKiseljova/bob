<?php
  global $menu_name, $menu_items;
?>

<?php if ($menu_name && $menu_items && !empty($menu_items) && !is_wp_error( $menu_items )) : ?>    
  <nav class="<?= $menu_name === 'header' ? 'header__nav' : 'footer__nav'; ?> nav">
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