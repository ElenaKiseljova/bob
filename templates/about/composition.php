<?php 
  global $list;

  $title = get_field( 'title' ) ?? '';
  $description = get_field( 'description' ) ?? '';
  $list = get_field( 'list' ) ?? [];
  $gallery = get_field( 'gallery' ) ?? [];
  $button = get_field( 'button' ) ?? [];
?>
<section class="composition about">
  <div class="container">
    <div class="composition__inner">
      <h2 class="composition__title title"><?= $title; ?></h2>
      <div class="about__cloud">
        <div class="about__text">
          <?= $description; ?>
        </div>
      </div>
      
      <img
        class="icon about__fruit about__fruit--1"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon about__fruit about__fruit--2"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon about__fruit about__fruit--3"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lemon.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon about__fruit about__fruit--4"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lemon-slice.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon about__fruit about__fruit--5"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/radish.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon about__fruit about__fruit--6"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon about__fruit about__fruit--7"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    </div>
  </div>
  <div class="composition__block">
    <?php 
      get_template_part( 'templates/advantages' );
    ?>

    <?php if ( $gallery && !empty($gallery) && is_array($gallery) && !is_wp_error( $gallery ) ) : ?>
      <?php foreach ($gallery as $key => $image) : ?>
        <img class="icon about__box about__box--<?= $key + 1; ?>" src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div class="container">
    <?php if ( $button && !empty($button) && is_array($button) && !is_wp_error( $button ) ) : ?>
      <div class="about__choose">
        <?php 
          $title = $button['title'] ?? '';
          $link = $button['link'] ?? '';

          $text_before = $button['text_before'] ?? '';
          $text_after = $button['text_after'] ?? '';
        ?>

        <?php if ( $text_before && !empty($text_before) ) : ?>
          <span><?= $text_before; ?></span>
        <?php endif; ?>

        <?php if ( !empty($title) && !empty($link) ) : ?>
          <div class="about__link">
            <a href="<?= $link; ?>" class="fruit-rolls__btn btn">
              <?= $title; ?>
            </a>
          </div>          
        <?php endif; ?> 
        
        <?php if ( $text_after && !empty($text_after) ) : ?>
          <span><?= $text_after; ?></span>
        <?php endif; ?>
      </div>  
    <?php endif; ?>    
  </div>

  <img
    class="icon about__animation about__animation--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/snail-skate.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>