    <footer class="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="footer__left">
            <?php 
              get_template_part( 'templates/logo', 'footer' );

              get_template_part( 'templates/menu', 'footer' );
            ?>
          </div>
          <div class="footer__right">
            <span><?= __( 'Відоси, фоточки і уся смачна інфа', 'bob' ); ?></span>
            
            <?php 
              get_template_part( 'templates/social' );
            ?>
          </div>
        </div>
      </div>
    </footer>

    <?php 
      wp_footer(  );
    ?>
  </body>
</html>