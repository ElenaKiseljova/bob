<?php 
  global $place;

  $is_shelf_health = is_page_template( 'page-shelf-health.php' );
?>

<?php if (isset($place)) : ?>
  <a href="<?= $is_shelf_health ? '#home' : get_bloginfo( 'url' ); ?>" class="<?= $place === 'header' ? 'header__logo' : 'footer__logo'; ?>">
    <svg width="132" height="31">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#logo"></use>
    </svg>
  </a>
<?php endif; ?>
