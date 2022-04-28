<?php 
  global $class;

  if ( !isset($class) ) {
    $class = '';
  }

  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' );

  $button = get_sub_field( 'button' );

  $shops_page_url = bob_get_special_page( 'shops', 'url' ) ?? get_permalink(  );

  $selected = '';
?>
<div class="tabs" id="tabs">
  <?php if ( $class === 'stripes' || $class === 'sweets' ) : ?>
    <img
      class="icon composition__fruit composition__fruit--right"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grass.svg"
      alt="<?=get_bloginfo( 'name' ); ?>"
    />
  <?php elseif ( $class === 'marmalade' ) : ?>
    <img
      class="icon composition__fruit composition__fruit--left"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?=get_bloginfo( 'name' ); ?>"
    />
  <?php elseif( $class === 'smoothies' ) : ?>
    <img
      class="icon composition__fruit composition__fruit--left"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php elseif( $class === 'chief' ) : ?>
    <img
      class="icon composition__fruit composition__fruit--left"
      src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
      alt="<?= get_bloginfo( 'name' ); ?>"
    />
  <?php endif; ?>
  

  <h2 class="composition__title title title--width">
    <?= $title; ?>
  </h2>

  <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
    <?php if ( count($list) > 1 ) : ?>
      <div class="tabs__btns">
        <?php foreach ($list as $key => $item) : ?>
          <?php 
            if ( $key === 0 ) {
              $selected = $item['text_big'] . $item['text_small'];
            }  
          ?>
          <button class="tabs__btn <?= $key === 0 ? 'active' : ''; ?>" data-tab="<?= $key + 1; ?>">
            <span class="tabs__number"><?= $item['text_big'] ?? ''; ?></span><?= $item['text_small'] ?? ''; ?>
          </button>
        <?php endforeach; ?>
      </div>

      <div class="tabs__select select" id="select-2">
        <button
          type="button"
          class="select__toggle"
          data-select="toggle"
          data-index="-1"
        >
          <span><?= $selected; ?></span>
        </button>

        <div class="select__dropdown">
          <ul class="select__options">
            <?php foreach ($list as $key => $item) : ?>
              <li
                class="select__option tabs__btn-select"
                data-select="option"
                data-value="<?= $item['text_big'] ?? ''; ?>"
                data-index="<?= $key + 1; ?>"
                data-tab="<?= $key + 1; ?>"
              >
                <span><?= $item['text_big'] ?? ''; ?><?= $item['text_small'] ?? ''; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>

    <div class="tabs__contents">
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $products = $item['products'] ?? [];
        ?>
        <div class="tabs__content content <?= $key === 0 ? 'active' : ''; ?>" data-content="<?= $key + 1; ?>">
          <?php if ( $products && !empty($products) && is_array($products) && !is_wp_error( $products ) ) : ?>
            <ul class="content__list">
              <?php foreach ($products as $key => $product) : ?>
                <?php 
                  $image = $product['image'] ?? '';

                  $title = $product['title'] ?? '';
                  
                  $subtitle = $product['subtitle'] ?? '';

                  $long_ingredients = $product['long_ingredients'];
                ?> 
                <li class="content__item">
                  <?php if ( $long_ingredients ) : ?>
                    <div class="content__wrapper">
                  <?php endif; ?>

                  <div class="content__link">
                    <div class="content__image">
                      <img
                        src="<?= $image; ?>"
                        alt="<?= strip_tags( $title ); ?>"
                      />
                    </div>
                    <h2 class="content__title"><?= $title ;?></h2>

                    <?php if ( $long_ingredients ) : ?>
                      <div class="content__bottom">
                        <span class="content__label"><?= __( 'Дивитися інгредієнти', 'bob' ); ?></span>
                        <button class="content__btn">
                          <svg width="36" height="36">
                            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#eye"></use>
                          </svg>
                        </button>
                      </div>
                    <?php else : ?>
                      <p class="content__descr"><?= $subtitle ;?></p>
                    <?php endif; ?>                    
                  </div>

                  <?php if ( $long_ingredients ) : ?>
                    <div class="content__ingredients">
                      <h3><?= __( 'Інгредієнти:', 'bob' ); ?></h3>
                      <p>
                        <?= $subtitle ;?>
                      </p>
                    </div>
                  </div>
                  <?php endif; ?>
                </li> 
              <?php endforeach; ?>                         
            </ul>
          <?php endif; ?>          
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php if ( $button && !empty($button) && isset($button['text']) && !empty($button['text']) && isset($button['link']) && !empty($button['link']) ) : ?>
    <a href="<?= $button['link']; ?>" class="tabs__link btn"><?= $button['text']; ?></a>
  <?php endif; ?>  
</div>