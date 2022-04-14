<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $bob_text = get_sub_field( 'bob_text' ) ?? '';

  $button = get_sub_field( 'button' ) ?? [];
?>

<section class="fruit-rolls">
  <div class="container">
    <div class="fruit-rolls__inner">
      <h2 class="fruit-rolls__title title"><?= $title; ?></h2>

      <?php if ( !empty($bob_text) ) : ?>
        <div class="fruit-rolls__cloud">
          <?= $bob_text; ?>
        </div>
      <?php endif; ?>
      
      <?php if ( $button && !empty($button) && !is_wp_error( $button ) ) : ?>
        <?php 
          $title = $button['title'];
        ?>
      <?php endif; ?>
      <div class="fruit-rolls__choose">
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
          <div class="fruit-rolls__link">
            <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-eating.svg" alt="<?= get_bloginfo( 'name' ); ?>">
            <a href="<?= $link; ?>" class="fruit-rolls__btn btn">
              <?= $title; ?>
            </a>
          </div>          
        <?php endif; ?> 
        
        <?php if ( $text_after && !empty($text_after) ) : ?>
          <span><?= $text_after; ?></span>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <img
    class="icon fruit-rolls__image fruit-rolls__image--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--2"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />

  <img
    class="icon fruit-rolls__image fruit-rolls__image--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_1.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--5"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--6"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_2.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--7"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_3.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--8"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--9"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />

  <img
    class="icon fruit-rolls__image fruit-rolls__image--10"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-big.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon fruit-rolls__image fruit-rolls__image--11"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>