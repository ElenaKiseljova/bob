<?php 
  $color_header = get_field( 'color_header' ) ?? '';
?>

<header class="header <?= !empty($color_header) ? $color_header : ''; ?>">
  <div class="container">
    <div class="header__inner">
      <?php 
        get_template_part( 'templates/logo', 'header' );
      ?>

      <div class="header__overlay">
        <div class="header__wrapper">
          <?php 
            get_template_part( 'templates/menu', 'header' );

            get_template_part( 'templates/lang' );

            get_template_part( 'templates/menu', 'social' );
          ?>

          <button class="header__close header__close--nav">
            <svg width="45" height="45">
              <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
        </div>
      </div>
      <div class="header__hamburger hamburger">
        <button class="hamburger__btn">
          <svg width="30" height="30">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#hamburger"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>