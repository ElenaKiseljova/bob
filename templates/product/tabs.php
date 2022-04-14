<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' );

  $shops_page_url = bob_get_special_page( 'shops', 'url' ) ?? get_permalink(  );

  $selected = '';
?>
<div class="tabs" id="tabs">
  <h2 class="composition__title title title--width">
    <?= $title; ?>
  </h2>

  <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
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
                  $image = ($product['image'] && is_array($product['image'])) ? $product['image']['sizes']['medium'] : '';

                  $title = $product['title'] ?? '';
                  $subtitle = $product['subtitle'] ?? '';
                ?> 
                <li class="content__item">
                  <a href="<?= $shops_page_url; ?>" class="content__link">
                    <div class="content__image">
                      <img
                        src="<?= $image; ?>"
                        alt="<?= strip_tags( $title ); ?>"
                      />
                    </div>
                    <h2 class="content__title"><?= $title ;?></h2>
                    <p class="content__descr"><?= $subtitle ;?></p>
                  </a>
                </li> 
              <?php endforeach; ?>                         
            </ul>
          <?php endif; ?>          
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <a href="<?= $shops_page_url; ?>" class="tabs__link btn"><?= __( 'де купити', 'bob' ); ?></a>
</div>