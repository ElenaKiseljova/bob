<?php 
  $list = get_field( 'list' ) ?? [];

  $description = get_field( 'description' ) ?? '';
?>
<section class="composition recipes">
  <div class="container">
    <div class="composition__inner">  
      <?php if ( $list && is_array($list) && !empty($list) && !is_wp_error( $list ) ) : ?>
        <div class="accordion">
          <ul class="accordion__list">
            <?php foreach ($list as $key => $recipe) : ?>
              <?php 
                $title = $recipe['title'] ?? '';   
                $text = $recipe['text'] ?? '';

                $title_1 = $recipe['title_1'] ?? '';   
                $content_1 = $recipe['content_1'] ?? '';

                $title_2 = $recipe['title_2'] ?? '';
                $content_2 = $recipe['content_2'] ?? '';
              ?>
              <li class="accordion__item">
                <div class="accordion__top">
                  <div class="accordion__wrapper">
                    <h3><?= $title; ?></h3>
                    <span><?= $text; ?></span>
                  </div>
                  <button class="accordion__btn">
                    <svg width="15" height="8">
                      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow-down-white"></use>
                    </svg>
                  </button>
                </div>
                <div class="accordion__bottom">
                  <div class="accordion__block">
                    <h4><?= $title_1; ?></h4>
                    
                    <?= $content_1; ?>
                  </div>
                  <div class="accordion__block">
                    <h4>
                      <?= $title_2; ?>
                    </h4>
                    <div class="accordion__text">
                      <?= $content_2; ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="recipes__info">
        <?= $description; ?>
      </div>
    </div>
  </div>
</section>