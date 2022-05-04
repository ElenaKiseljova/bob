<?php 
  $slides = get_sub_field( 'slides' ) ?? [];

  $bob_text_left = get_sub_field( 'bob_text_left' ) ?? '';

  $image = get_sub_field( 'image' ) ?? '';
  $bob_image_text = get_sub_field( 'bob_image_text' ) ?? '';
?>
<section class="composition play">
  <div class="container">
    <div class="composition__inner">
      <?php if ( $slides && !empty($slides) && is_array($slides) && !is_wp_error( $slides ) ) : ?>
        <div class="play__slider swiper">
          <div class="play__wrapper swiper-wrapper">
            <?php foreach ($slides as $key => $slide) : ?>
              <?php 
                $background = $slide['background'] ?? '';
                $title = $slide['title'] ?? '';
                $text = $slide['text'] ?? '';

                $list = $slide['list'] ?? [];

                $button = $slide['button'] ?? [];
              ?>
              <div class="play__slide swiper-slide" <?= !empty($background) ? 'style="background-color: ' . $background . ';"' : ''; ?>>
                <div class="play__head">
                  <h2 class="title"><?= $title; ?></h2>

                  <?= $text; ?>
                </div>

                <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
                  <div class="play__toys toys">
                    <ul class="toys__list">
                      <?php foreach ($list as $key => $toy) : ?>
                        <?php 
                          $toy_title = $toy['title'] ?? '';
                          $toy_description = $toy['description'] ?? '';
                          $toy_image = $toy['image'] ?? '';
                        ?>
                        <li class="toys__item">
                          <div class="toys__image">
                            <img src="<?= $toy_image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
                          </div>
                          <h3><?= $toy_title; ?></h3>
                          <p><?= $toy_description; ?></p>
                        </li>
                      <?php endforeach; ?>                    
                    </ul>
                  </div>
                  <?php if ( $button && !empty($button) && isset($button['text']) && !empty($button['text']) && isset($button['link']) && !empty($button['link']) ) : ?>
                    <a href="<?= $button['link']; ?>" class="play__link btn"><?= $button['text']; ?></a>
                  <?php endif; ?>  
                <?php endif; ?>                
              </div>
            <?php endforeach; ?>            
          </div>
          <div class="play__btns">
            <button class="play__btn play__btn--prev btn">
              <svg width="12" height="8">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow-down-white"></use>
              </svg>
            </button>
            <button class="play__btn play__btn--next btn">
              <svg width="12" height="8">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow-down-white"></use>
              </svg>
            </button>
          </div>         
        </div>
      <?php endif; ?>      
    </div>
  </div>
  <div class="composition__block">
    <div class="play__center">
      <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />

      <div class="play__snail play__snail--box">
        <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-sings.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
        <div class="play__snail-text">
          <p><?= $bob_image_text; ?></p>
        </div>
      </div>
    </div>
    <img
      class="icon play__fruit play__fruit--1"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-original.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon play__fruit play__fruit--2"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon play__fruit play__fruit--3"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon play__fruit play__fruit--4"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/cherry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />    
    <img
      class="icon play__fruit play__fruit--5"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon play__fruit play__fruit--6"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon play__fruit play__fruit--7"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
    <img
      class="icon play__fruit play__fruit--8"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  </div>
  <div class="play__left">
    <div class="play__left-text">
      <p>
        <?= $bob_text_left; ?>
      </p>
    </div>
    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-sings.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
  </div>
</section>