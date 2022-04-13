<?php 
  $list = get_sub_field( 'list' );
?>
<?php if ($list && !empty($list) && !is_wp_error( $list )) : ?>
  <section class="slider">
    <div class="swiper swiper-js slider__container">
      <div class="swiper-wrapper slider__wrapper">
        <?php foreach ($list as $key => $slide) : ?>
          <?php 
            $banner = $slide['banner'] ?? [];
            $text = $slide['text'] ?? '';  

            $button = $slide['button'] ?? [];
          ?>
          <div class="swiper-slide slider__slide">
            <?php if ( $banner && !empty($banner) ) : ?>
              <div class="slider__banner">
                <picture>
                  <source
                    srcset="<?= $banner['sizes']['slider_desktop']; ?>"
                    media="(min-width: 767px)"
                  />
                  <img src="<?= $banner['sizes']['slider_mobile']; ?>" alt="<?= get_bloginfo( 'name'); ?>" />
                </picture>
              </div>
            <?php endif; ?>

            <div class="slider__content">
              <?= $text; ?>
            </div>
            
            <?php if ( $button && !empty($button) ) : ?>
              <div class="slider__link">
                <?php 
                  $title = $button['title'] ?? '';
                  $link = $button['link'] ?? '';

                  $bob = $button['bob'] ?? false;
                  $bob_text = $button['bob_text'] ?? '';
                ?>
                <?php if ( $bob ) : ?>
                  <div class="slider__snail">
                    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/just-snail.svg" alt="<?= get_bloginfo( 'name'); ?>" />
                    
                    <?php if ( !empty($bob_text) ) : ?>
                      <div class="slider__snail-text">
                        <p>
                          <?= $bob_text; ?>
                        </p>
                      </div>
                    <?php endif; ?>                    
                  </div>
                <?php endif; ?>
                
                <?php if ( !empty($title) && !empty($link) ) : ?>
                  <a href="<?= $link; ?>" class="slider__btn btn">
                    <?= $title; ?>
                  </a>
                <?php endif; ?>                
              </div>
            <?php endif; ?>

            <?php if ($key === 0) : ?>
              <img
                class="icon slider__image slider__image--1"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--2"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--3"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange-2.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--4"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--5"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--6"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--7"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--8"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/currant.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--9"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--10"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry-2.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--11"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-big.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--12"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--13"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/cherry.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--14"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lemon-slice.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--15"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lemon.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--16 none"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/one-cherry.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--17 none"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grass.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image slider__image--18 none"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
            <?php else : ?>
              <img
                class="icon slider__image2 slider__image2--1"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image2 slider__image2--2"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
              <img
                class="icon slider__image2 slider__image2--3"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/cherry.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />

              <img
                class="icon slider__image2 slider__image2--4"
                src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-original.svg"
                alt="<?= get_bloginfo( 'name'); ?>"
              />
            <?php endif; ?>          
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination slider__pagination"></div>
    </div>
  </section>
<?php endif; ?>
