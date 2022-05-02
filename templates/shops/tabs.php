<?php 
  $title_1 = get_field( 'title_1' ) ?? '';
  $title_2 = get_field( 'title_2' ) ?? '';
?>

<div class="order__tabs tabs">
  <?php if ( !empty($title_1 ) && !empty($title_2) ) : ?>
    <div class="tabs__btns">
      <button class="tabs__btn active" data-tab="1"><?= $title_1; ?></button>
      <button class="tabs__btn" data-tab="2"><?= $title_2; ?></button>
    </div>
  <?php endif; ?>  
  
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
                    $link = $shop['link'] ?? '';
                  ?>
                  <li class="order__item">
                    <?php if ( !empty($link) ) : ?>
                      <a class="order__logo" href="<?= $link; ?>">
                        <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
                      </a>
                    <?php else : ?>
                      <div class="order__logo">
                        <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
                      </div>
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