<?php 
  $bob_text = get_field( 'bob_text' ) ?? '';
  $text = get_field( 'text' ) ?? '';

  $buttons = get_field( 'buttons' ) ?? [];
?>
<section class="top contacts">
  <div class="container">
    <div class="contacts__inner">
      <div class="top__head top__head--dark">
        <?php 
          the_content(  );
        ?>

        <div class="contacts__snail-top">
          <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-smile.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
          <div class="contacts__snail-text">
            <p><?= $bob_text; ?></p>
          </div>
        </div>
      </div>
      
      <div class="links">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'contacts',
              'container'       => null,
              'menu_class'      => 'links__list',
              'depth'           => 0,
            )
          );	
        ?>
      </div>

      <div class="contacts__bottom">
        <p>
          <?= $text; ?>
        </p>

        <div class="contacts__btns">
          <?php if ( $buttons && !empty($buttons) && is_array($buttons) && !is_wp_error( $buttons ) ) : ?>
            <?php foreach ($buttons as $key => $button) : ?>
              <?php 
                $title = $button['title'] ?? '';  
                $link = $button['link'] ?? '';  
              ?>

              <a href="<?= $link; ?>" class="btn"><?= $title; ?></a>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  
  <img
    class="icon contacts__fruit contacts__fruit--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-big.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon contacts__fruit contacts__fruit--2"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>