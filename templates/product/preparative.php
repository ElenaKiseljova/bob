<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $subtitle_1 = get_sub_field( 'subtitle_1' );
  $subtitle_2 = get_sub_field( 'subtitle_2' );
  $subtitle_3 = get_sub_field( 'subtitle_3' );
  $subtitle_4 = get_sub_field( 'subtitle_4' );
?>
<h2 class="composition__title title title--big title--width">
  <?= $title; ?>
</h2>

<div class="composition__wrapper">
  <svg
    width="100%"
    height="100%"
    style="position: absolute; top: 0; left: 0; z-index: -1"
    id="svg"
    fill="none"
  >
    <!-- M455,0  -->
    <path
      id="rect"
      d="M670,517C634.3988,452.9976,438.739,593.568,394.799,654.96,328.895,747.041,343.618,816.456,347.998,914.999,352.299,1011.779,334.549,1189.472,431.717,1237.543,511.222,1276.871,674.686,1205.767,690.137,1257.36,704.745,1306.14,697.399,1504.399,710.999,1580.999"
    />
  </svg>
  <svg
    width="100%"
    height="100%"
    style="position: absolute; top: 0; left: 0; z-index: -1"
    id="svg"
    fill="none"
  >
    <!-- M455,0  -->
    <path
      id="rect2"
      d="M664,516C871.398,526.997,878.085,567.703,920.797,629.959,992.893,735.04,977.614,939.455,985.995,1006.999,997.924,1103.137,934.864,1133.311,908.717,1149.541,840.701,1191.757,668.686,1142.766,684.137,1194.359,698.745,1243.139,677.399,1523.399,690.999,1580.999"
    />
  </svg>
  <svg
    width="100%"
    height="100%"
    style="position: absolute; top: 0; left: 0; z-index: -1"
    id="svg"
    fill="none"
  >
    <!-- M455,0  -->
    <path
      id="rect3"
      d="M782,446C564.4189,393.19835,481.047,525.398,439.274,544.371,405.095,559.894,412.699,653.847,410.798,682.959,400.979,833.281,463.612,980.454,467.993,1078.999,472.294,1175.779,526.159,1227.871,575.716,1226.541,685.551,1223.592,707.107,1182.471,748.137,1217.359,793.744,1256.139,740.399,1462.399,793.999,1520.999"
    />
  </svg>
  <div class="composition__section composition__section-1">
    <div class="composition__images composition__images--group">
      <img
        class="icon composition__icon-2 fruits"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/fruit-group/group-animation.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon composition__icon-3"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-animation.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon composition__icon-4"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-animation.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon composition__icon-5"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-animation.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    </div>
    <h3 class="composition__head"><?= $subtitle_1; ?></h3>
    <img
      class="icon composition__icon-6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon composition__icon-7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon composition__icon-8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  </div>
  <div class="composition__section composition__section-2">
    <img
      class="icon composition__icon-12"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/back-barrel.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <div class="composition__images press">
      <img
        class="icon composition__icon-9"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/foundation.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />

      <img
        class="icon composition__icon-11"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/press.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    </div>
    <img
      class="icon composition__icon-10"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/front.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />

    <h3 class="composition__head"><?= $subtitle_2; ?></h3>
    <img
      class="icon composition__icon-13"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon composition__icon-14"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  </div>
  <div class="composition__section composition__section-3">
    <div class="composition__images oven-tray">
      <img
        class="composition__icon-15"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/oven-tray.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    </div>
    <h3 class="composition__head"><?= $subtitle_3; ?></h3>

    <img
      class="icon composition__icon-16"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/cherry.svg "
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon composition__icon-17"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg "
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  </div>
  <div class="composition__section composition__section-4">
    <div class="composition__images roll">
      <img
        class="composition__icon-18"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/rolls/roll_3.png"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon composition__icon-19"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon composition__icon-20"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/papaya.svg"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    </div>
    <h3 class="composition__head">
      <?= $subtitle_4; ?>
    </h3>
    <img
      class="icon composition__icon-21"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  </div>
</div>