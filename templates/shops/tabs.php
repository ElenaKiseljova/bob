<?php 
  $title_1 = get_field( 'title_1' ) ?? '';
  $title_2 = get_field( 'title_2' ) ?? '';
?>

<div class="order__tabs tabs">
  <div class="tabs__btns">
    <button class="tabs__btn active" data-tab="1"><?= $title_1; ?></button>
    <button class="tabs__btn" data-tab="2"><?= $title_2; ?></button>
  </div>
  
  <div class="tabs__contents">   
    <?php 
      for ($i=1; $i <= 2; $i++) { 
        $description = get_field( 'description_' . $i ) ?? '';
        $shops = get_field( 'shops_' . $i ) ?? [];            
        ?>
          <div class="tabs__content <?= $i === 1 ? 'active' : ''; ?>" data-content="<?= $i; ?>">
            <div class="order__text">
              <?= $description; ?>
            </div>

            <?php if ( $shops && !empty($shops) && is_array($shops) && !is_wp_error( $shops ) ) : ?>
              <ul class="order__list">
                <?php foreach ($shops as $key => $shop) : ?>
                  <?php 
                    $image = $shop['image'] ?? '';
                    $button = $shop['button'] ?? [];
                  ?>
                  <li class="order__item">
                    <div class="order__logo">
                      <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
                    </div>

                    <?php if ($button && !empty($button) && !empty($button['text']) && !empty($button['link'])) : ?>
                      <a href="<?= $button['link']; ?>" class="order__btn btn"><?= $button['text']; ?></a>
                    <?php endif; ?>                        
                  </li>
                <?php endforeach; ?>                  
              </ul>
            <?php endif; ?>                
          </div>
        <?php
      }
    ?>         
  </div>
</div>