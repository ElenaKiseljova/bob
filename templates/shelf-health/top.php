<?php 
  $button = get_field( 'button' );
?>

<!-- top--new - модификатор, чтобы изменить отступы и стили  -->
<section class="top top--new first-section" id="home">
  <div class="container container--new">
    <div class="top__inner">
      <div class="top__head top__head--dark">
        <?php 
          the_content(  );
        ?>
      </div>

      <?php if ( $button && !empty($button) && is_array($button) && !is_wp_error( $button ) ) : ?>
        <?php 
          $title = $button['title'] ?? '';

          $link = $button['link'] && !empty($button['link']) ? $button['link'] : '#tabs';
        ?>
        
        <?php if (!empty($title)) : ?>
          <a href="<?= $link; ?>" class="btn btn--new"><?= $title; ?></a>
        <?php endif; ?>        
      <?php endif; ?>
    </div>
  </div>
  
  <div class="top__vector vector">
    <svg class="vector__background vector__background--1">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/vectors/index.svg#main-vector"></use>
    </svg>
    <svg class="vector__background vector__background--circle">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/vectors/index.svg#vector-white-hero"></use>
    </svg>
  </div>
  <img
    class="icon first-section__image first-section__image--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-smart.svg"
    alt=""
  />
  <img
    class="icon first-section__image first-section__image--2"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt=""
  />
  <img
    class="icon first-section__image first-section__image--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grapefruit.svg"
    alt=""
  />
  <img
    class="icon first-section__image first-section__image--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grapefruit.svg"
    alt=""
  />
</section>