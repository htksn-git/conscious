<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php // コンテンツ
get_template_part('tmp/modal'); ?>

<footer class="footer" itemscope itemtype="https://schema.org/WPFooter">
  <div class="footer__wrap">
    <nav class="footer__nav">
      <img class="footer__logo" src="<?php bloginfo('url'); ?>/wp-content/img/common/logo.svg" alt="conscious">
      <ul class="footer__ul">
        <li><a href="https://twitter.com/htk_san">Twitter</a></li>
        <li><a href="https://github.com/htksn-git">GitHub</a></li>
      </ul>
    </nav>
    
    <nav class="footer__nav">
      <ul class="footer__ul">
        <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
        <li><a href="<?php bloginfo('url'); ?>/about/">ABOUT</a></li>
        <li><a href="<?php bloginfo('url'); ?>/info/">INFO</a></li>
        <li><a href="<?php bloginfo('url'); ?>/sitemap/">SITEMAP</a></li>
        <li><a href="<?php bloginfo('url'); ?>/privacy-pollicy/">PRIVACY POLICY</a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>

    <nav class="footer__nav">
      <h3 class="sidebar__title">Categories</h3>
      <?php // カテゴリー一覧
      $args = ['pad_counts' => true];
      get_template_part('tmp/categories-link', null, $args); ?>
    </nav>
  </div>
  <div class="footer__copyright">&copy; <?php echo date('Y'); ?> conscious</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
