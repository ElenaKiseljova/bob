<section class="top order">
  <div class="top__inner">
    <div class="top__head top__head--dark">
      <?php 
        the_content(  );
      ?>
    </div>

    <?php 
      get_template_part( 'templates/shops/tabs' );
    ?>
  </div>

  <img
    class="icon order__fruit order__fruit--1"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon order__fruit order__fruit--2"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon order__fruit order__fruit--3"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon order__fruit order__fruit--4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon order__fruit order__fruit--5"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    class="icon order__fruit order__fruit--6"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-big.svg"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>