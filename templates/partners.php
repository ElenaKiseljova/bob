<script>
  window.thanksPageUrl = '<?= bob_get_special_page( 'thanks', 'url' ) ?? get_bloginfo( 'url' ); ?>';
</script>

<section class="partners">
  <div class="container container__fluid">
    <div class="partners__inner">
      <div class="partners__text">
        <?php the_content(); ?>
      </div>
      <?= 
        do_shortcode( '[contact-form-7 id="248" title="Партнерам"]' );
      ?>     
    </div>
  </div>
</section>