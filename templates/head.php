<?php
$cur_lang_code = function_exists('pll_current_language') ? (pll_current_language() === 'uk' ? 'ua' : pll_current_language()) : 'ua';
?>
<!DOCTYPE html>
<html lang="<?= $cur_lang_code; ?>">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  wp_head();
  ?>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W9NT4THP');
  </script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'GTM-W9NT4THP');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Hotjar Tracking Code for https://www.bob-snail.com/ -->
  <script>
    (function(h, o, t, j, a, r) {
      h.hj = h.hj || function() {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 3087821,
        hjsv: 6
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

  <!-- Meta Pixel Code -->
  <meta name="facebook-domain-verification" content="w2zlaoqeoxljwwtfljm7jdent0k2mz" />
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '949131453144286');
    fbq('track', 'PageView');

    <?php
    $facebook_track = get_field('facebook_track') ?? null;
    if ($facebook_track && !empty($facebook_track) && !is_wp_error($facebook_track)) {
      echo $facebook_track;
    }
    ?>
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=949131453144286&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <script>
    window.thanksPageUrl = '<?= bob_get_special_page('thanks', 'url') ?? get_bloginfo('url'); ?>';
  </script>

  <?php if ($cur_lang_code === 'en') : ?>
    <script async src="https://www.influ2.com/tracker?clid=ed27295a-0496-41fa-82e6-ba243bae1173"></script>
  <?php endif; ?>
</head>