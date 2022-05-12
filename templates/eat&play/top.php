<?php 
  $top_bob_text = get_field( 'top_bob_text' ) ?? '';

  $button = get_field( 'button' );

  $images = get_field( 'images' ) ?? [];
?>
<section class="top play">
  <div class="container">
    <div class="top__inner">
      <div class="top__head top__head--dark">
          <?php 
            the_content(  );
          ?>
        <div class="play__snail">
          <img src="<?= get_template_directory_uri(  ); ?>/assets/img/eat&play/snail.png" alt="<?= get_bloginfo( 'name' ); ?>" />
          <div class="play__snail-text">
            <p>
              <?= $top_bob_text; ?>
            </p>
          </div>
        </div>
      </div>

      <?php if ( $button && !empty($button) && is_array($button) && !is_wp_error( $button ) ) : ?>
        <?php 
          $title = $button['title'] && !empty($button['title']) ? $button['title'] : __( 'смакуй, замовляй', 'bob' );

          $link = $button['link'] && !empty($button['link']) ? $button['link'] : '#tabs';
        ?>

        <a href="<?= $link; ?>" class="btn"><?= $title; ?></a>
      <?php endif; ?>
    </div>
  </div>  

  <?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
    <?php foreach ($images as $key => $image) : ?>
      <img
        class="icon play__image play__image--<?= $key + 1; ?>"
        src="<?= $image; ?>"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    <?php endforeach; ?>
  <?php endif; ?>

  <img
    class="icon play__image play__image--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_3.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--5"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--6"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_2.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--7"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/eat&play/snail-sleigh.png"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--8"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--9"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-big.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon play__image play__image--10"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>
