<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__bar product__bar--<?= $key + 1; ?> parallax"
      <?php if ( ($key + 1) === 1 ) : ?>
        data-y="-20"
        data-x="-20"
      <?php elseif ( ($key + 1) === 2 ) : ?>
        data-y="-20"
      <?php elseif ( ($key + 1) === 3 ) : ?>
        data-y="-50"
      <?php endif; ?>
      
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 2) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__stripe product__stripe--1"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__stripe product__stripe--2"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__stripe product__stripe--3 parallax"
  data-y="-60"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__stripe product__stripe--4"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/peach-piece.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__stripe product__stripe--5"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__stripe product__stripe--6"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>