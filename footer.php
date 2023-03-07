<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if ( ! is_page('contact') ): ?>
<nav class="bottom-nav__category">
  <?php // カテゴリー一覧
  $args = ['pad_counts' => false];
  get_template_part('tmp/categories-link', null, $args); ?>
</nav>
<?php endif; ?>

<?php // コンテンツ
get_template_part('tmp/modal'); ?>

<footer class="footer" itemscope itemtype="https://schema.org/WPFooter">
  <div class="footer__wrap">
    <nav class="footer__nav">
			<img class="footer__logo" src="<?php bloginfo('url'); ?>/wp-content/img/common/logo.svg" alt="conscious">
      <ul class="footer__ul">
        <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
        <li><a href="<?php bloginfo('url'); ?>/about/">ABOUT</a></li>
        <li><a href="<?php bloginfo('url'); ?>/menu/">MENU</a></li>
        <li><a href="<?php bloginfo('url'); ?>/blog/">BLOG</a></li>
        <!-- <li><a href="<?php bloginfo('url'); ?>/sitemap/">SITEMAP</a></li> -->
        <li><a href="<?php bloginfo('url'); ?>/privacy-policy/">PRIVACY POLICY</a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>

  </div>
  <div class="footer__copyright">&copy; <?php echo date('Y'); ?> conscious</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
