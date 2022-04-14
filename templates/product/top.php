<?php 
  $button = get_field( 'button' );
?>
<section class="top">
  <div class="top__inner">
    <h1 class="top__title title--big title">
      <?= get_the_title(); ?>
    </h1>
    <div class="top__descr">
      <?php the_content(); ?>
    </div>

    <?php if ( $button && !empty($button) && is_array($button) && !is_wp_error( $button ) ) : ?>
      <?php 
        $title = $button['title'] && !empty($button['title']) ? $button['title'] : __( 'знайди', 'bob' );

        $link = $button['link'] && !empty($button['link']) ? $button['link'] : '#tabs';
      ?>

      <a href=<?= $link; ?>" class="btn"><?= $title; ?></a>
    <?php endif; ?>
  </div>

  <?php if ( is_page_template( 'single-products-fruit-rolls.php' ) ) : ?>
    <img
      class="icon top__image top__image--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_1.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_2.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_3.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--9"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php endif; ?>  
</section>