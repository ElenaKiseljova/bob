<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__marmalade product__marmalade--<?= $key + 1; ?> parallax"
      <?php if ( ($key + 1) === 1 ) : ?>
        data-y="-10"
        data-x="-30"
      <?php elseif ( ($key + 1) === 2 ) : ?>
        data-y="-20"
        data-x="-20"
      <?php elseif ( ($key + 1) === 3 ) : ?>
        data-y="-30"
        data-x="30"
      <?php elseif ( ($key + 1) === 4 ) : ?>
        data-y="-40"
        data-x="20"
      <?php endif; ?>
      
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 3) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__icon product__icon--1"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__icon product__icon--2"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/marmelad-2.png"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__icon product__icon--3"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__icon product__icon--4"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-original.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__icon product__icon--5"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__icon product__icon--6"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/marmelad.png"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__icon product__icon--7"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>