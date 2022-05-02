<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>
<section class="unpacking">
  <div class="unpacking__inner">
    <h2 class="title">розпаковка eat&play</h2>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <ul class="unpacking__list">
        <?php foreach ($list as $key => $item) : ?>
          <?php 
            $type = $item['type'] ?? '';

            $video_id = $item['video_id'] ?? '';
            $video_file = $item['video_file'] ?? '';

            $src = '';
          ?>
          <li class="unpacking__item">
            <div class="unpacking__video video">
              <?php if ( $type === 'vimeo' ) : 
                $src = 'https://player.vimeo.com/video/' . $video_id . '?h=e4d417a182&autoplay=1&color=7b42e9&title=0&byline=0&portrait=0';
                ?>
                <div class="video__vimeo">
                  <div style="padding:62.5% 0 0 0;position:relative;">
                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              <?php elseif( $type === 'youtube' ) : 
                $src = 'https://www.youtube.com/embed/' . $video_id . '?autoplay=1';
                ?>
                <div class="video__vimeo">
                  <iframe
                    src="https://www.youtube.com/embed/E0hnI4_egl8"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </div>
              <?php elseif( $type === 'file' ) : ?>
                <video class="video__main" controls>
                  <source src="<?= $video_file; ?>" type="video/mp4" />
                </video>
              <?php endif; ?>

              <div class="video__img" <?= ($type !== 'file') ? 'data-src="' . $src . '"' : ''; ?>">
                <img src="<?= get_template_directory_uri(  ); ?>/assets/img/eat&play/video/video-img.jpg" alt="<?= get_bloginfo( 'name' ); ?>" />
                <button class="video__btn">
                  <div class="video__overlay">
                    <svg width="16" height="17">
                      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#play"></use>
                    </svg>
                  </div>
                </button>
              </div>
            </div>
          </li>
        <?php endforeach; ?>        
      </ul>
    <?php endif; ?>    
  </div>
</section>