<?php 
  $bob_text = get_field( 'bob_text' ) ?? '';
?>
<section class="top about">
  <div class="container">
    <div class="top__inner">
      <div class="top__head">
        <?php 
          the_content(  );
        ?>
        <div class="about__snail">
          <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-smile.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
          <div class="about__snail-text" <?= $bob_text === '' ? 'style="visibility: hidden;"' : '' ?>>
            <p>
              <?= $bob_text; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <img
    class="icon about__image about__image--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon about__image about__image--2"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon about__image about__image--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-big.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon about__image about__image--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon about__image about__image--5"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>