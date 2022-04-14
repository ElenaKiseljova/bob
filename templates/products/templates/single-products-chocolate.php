<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__box product__box--<?= $key + 1; ?> parallax"
      <?php if ( ($key + 1) === 1 ) : ?>
        data-y="-30"
      <?php else : ?>
        data-y="-10"
      <?php endif; ?>
      
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 1) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__chocolate product__chocolate--1"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--2"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/corn.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--3"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--4"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--5"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--6"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--7"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--8"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/corn.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chocolate product__chocolate--9"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>