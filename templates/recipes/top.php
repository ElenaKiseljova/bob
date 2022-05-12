<?php 
  $bob_text = get_field( 'bob_text' ) ?? '';

  $gallery = get_field( 'gallery' ) ?? [];
?>
<section class="top recipes">
  <div class="container">
    <div class="top__inner">
      <div class="top__head top__head--dark">
        <?php 
          the_content(  );
        ?>

        <div class="recipes__snail">
          <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-cook.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
          <div class="recipes__snail-text">
            <p><?= $bob_text; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <?php if ( $gallery && !empty($gallery) && is_array($gallery) && !is_wp_error( $gallery ) ) : ?>
    <?php foreach ($gallery as $key => $image) : ?>
      <img
        class="icon recipes__image recipes__image--<?= $key + 1; ?>"
        src="<?= $image; ?>"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    <?php endforeach; ?>
  <?php endif; ?>

  <img
    class="icon recipes__image recipes__image--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/smoothies/smoothies-3.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--5"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--6"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--7"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--8"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--9"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--10 recipes__image--hide"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--11 recipes__image--hide"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon recipes__image recipes__image--12 recipes__image--hide"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>