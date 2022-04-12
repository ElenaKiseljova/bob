<?php 
  global $place;
?>

<?php if (isset($place)) : ?>
  <a href="<?= get_bloginfo( 'url' ); ?>" class="<?= $place === 'header' ? 'header__logo' : 'footer__logo'; ?>">
    <svg width="140" height="40">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#logo"></use>
    </svg>
  </a>
<?php endif; ?>
