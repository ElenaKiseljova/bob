<?php 
  global $list;

  $title = get_sub_field( 'title' ) ?? '';
  $list = get_field( 'list' ) ?? [];
  $button = get_sub_field( 'button' ) ?? [];
?>
<section class="composition">
  <div class="container">
    <div class="composition__inner">
      <h2 class="composition__title title composition__title--width">
        <?= $title; ?>
      </h2>

      <div class="composition__block">
        <?php 
          get_template_part( 'templates/advantages' );
        ?>

        <div class="composition__snail">
          <svg width="128" height="101">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#snail-rotate"></use>
          </svg>
        </div>
      </div>
      
      <?php if ( $button && !empty($button ) && !is_wp_error( $button  ) ) : ?>
        <?php 
          $title = $button['title'] ?? '';
          $link = $button['link'] ?? '';
        ?>
        <?php if ( !empty($title) && !empty($link) ) : ?>
          <a href="<?= $link; ?>" class="composition__btn btn">
            <?= $title; ?>
          </a>
        <?php endif; ?> 
      <?php endif; ?>      
    </div>
  </div>

  <img
    class="icon composition__image composition__image--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grass.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon composition__image composition__image--2"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-piece.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon composition__image composition__image--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon composition__image composition__image--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon composition__image composition__image--5"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>