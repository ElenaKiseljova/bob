<?php 
  global $class;

  $button = get_field( 'button' );

  $color_top = get_field( 'color_top' ) ?? '';

  $class = '';
  if ( is_page_template('single-products-stripes.php') ) {
    $class = 'stripes';
  } else if ( is_page_template('single-products-marmalade.php') ) {
    $class = 'marmalade';
  } else if ( is_page_template('single-products-chocolate.php') ) {
    $class = 'sweets';
  } else if ( is_page_template('single-products-smoothies.php') ) {
    $class = 'smoothies';
  } else if ( is_page_template('single-products-cocos.php') ) {
    $class = 'desserts';
  } else if ( is_page_template('single-products-baby-puree.php') ) {
    $class = 'baby';
  } else if ( is_page_template('single-products-chef-puree.php') ) {
    $class = 'chief';
  } else if ( is_page_template('single-products-party-box.php') ) {
    $class = 'party';
  }
?>
<section class="top <?= $class; ?>">
  <div class="top__inner">
    <h1 class="top__title title--big title <?= !empty($color_top) ? $color_top : ''; ?>">
      <?= get_the_title(); ?>
    </h1>
    <div class="top__descr <?= !empty($color_top) ? $color_top : ''; ?>">
      <?php the_content(); ?>
    </div>

    <?php if ( $button && !empty($button) && is_array($button) && !is_wp_error( $button ) ) : ?>
      <?php 
        $title = $button['title'] && !empty($button['title']) ? $button['title'] : __( 'Знайди свій смак', 'bob' );

        $link = $button['link'] && !empty($button['link']) ? $button['link'] : '#tabs';
      ?>

      <a href="<?= $link; ?>" class="btn"><?= $title; ?></a>
    <?php endif; ?>
  </div>

  <?php if ( $class === '' ) : ?>
    <img
      class="icon top__image top__image--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_1.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_2.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_3.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon top__image top__image--9"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'stripes' ) : ?>
    <img
      class="icon stripes__line stripes__line--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/stripes/stripe-1.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__line stripes__line--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/stripes/stripe-2.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__line stripes__line--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/stripes/stripe-3.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__line stripes__line--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/stripes/stripe-4.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__line stripes__line--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/stripes/stripe-5.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__line stripes__line--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/stripes/stripe-6.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lime.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/peach-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />

    <img
      class="icon stripes__fruit stripes__fruit--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon stripes__fruit stripes__fruit--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-original.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'marmalade' ) : ?>
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_rectangle-1.png"
      class="icon marmalade__image marmalade__image--1"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_chia.png"
      class="icon marmalade__image marmalade__image--2"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_red.png"
      class="icon marmalade__image marmalade__image--3"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_rectangle-2.png"
      class="icon marmalade__image marmalade__image--4"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_orang.png"
      class="icon marmalade__image marmalade__image--5"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_chia-2.png"
      class="icon marmalade__image marmalade__image--6"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      class="icon marmalade__image marmalade__image--7"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      class="icon marmalade__image marmalade__image--8"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-original.svg"
      class="icon marmalade__image marmalade__image--9"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/peach-piece.svg"
      class="icon marmalade__image marmalade__image--10"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
      class="icon marmalade__image marmalade__image--11"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      class="icon marmalade__image marmalade__image--12"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'sweets' ) : ?>
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
      class="icon sweets__image sweets__image--1"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/corn.svg"
      class="icon sweets__image sweets__image--2"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/sweets/marmalade-with-eyes.png"
      class="icon sweets__image sweets__image--3"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/sweets/chocolate-marmalade-1.png"
      class="icon sweets__image sweets__image--4"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/sweets/chocolate-marmalade-3.png"
      class="icon sweets__image sweets__image--5"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
      class="icon sweets__image sweets__image--6"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/corn.svg"
      class="icon sweets__image sweets__image--7"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grain.svg"
      class="icon sweets__image sweets__image--8"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'smoothies' ) : ?>
    <img
      class="icon smoothies__image smoothies__image--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/smoothies/smoothies-1.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/smoothies/smoothies-2.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--9"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon smoothies__image smoothies__image--10"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'desserts' ) : ?>
    <img
      class="icon desserts__image desserts__image--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/desserts/coconut-1.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/desserts/coconut-2.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />

    <img
      class="icon desserts__image desserts__image--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/papaya.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-original.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--9"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grass.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon desserts__image desserts__image--10"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'baby' ) : ?>
    <img class="icon baby__image baby__image--1" src="<?= get_template_directory_uri(  ); ?>/assets/img/baby/1.png" alt="<?= get_bloginfo( 'name' ); ?>" />
    <img class="icon baby__image baby__image--2" src="<?= get_template_directory_uri(  ); ?>/assets/img/baby/2.png" alt="<?= get_bloginfo( 'name' ); ?>" />
    <img
      class="icon baby__image baby__image--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lime.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon baby__image baby__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon baby__image baby__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon baby__image baby__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-original.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon baby__image baby__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon baby__image baby__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'chief' ) : ?>
    <img class="icon chief__image chief__image--1" src="<?= get_template_directory_uri(  ); ?>/assets/img/baby/1.png" alt="<?= get_bloginfo( 'name' ); ?>" />
    <img class="icon chief__image chief__image--2" src="<?= get_template_directory_uri(  ); ?>/assets/img/baby/2.png" alt="<?= get_bloginfo( 'name' ); ?>" />
    <img class="icon chief__image chief__image--3" src="<?= get_template_directory_uri(  ); ?>/assets/img/boxs/20.png" alt="<?= get_bloginfo( 'name' ); ?>" />
    <img
      class="icon chief__image chief__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lime.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon chief__image chief__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon chief__image chief__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon chief__image chief__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-original.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon chief__image chief__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon chief__image chief__image--9"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif( $class === 'party' ) : ?>
    <div id="confetti"></div>

    <img
      class="icon party__image party__image--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_1.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img class="icon party__image party__image--2" src="<?= get_template_directory_uri(  ); ?>/assets/img/baby/3.png" alt="<?= get_bloginfo( 'name' ); ?>" />
    <img
      class="icon party__image party__image--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_chia.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--9"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--10"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/sweets/chocolate-marmalade-3.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--11"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/fruit-group/pair-lemon-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon party__image party__image--12"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/marmalade/marmelad_orang.png"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php endif; ?> 
  
  <?php 
    get_template_part( 'templates/product/top', 'bob' );
  ?>
</section>