<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<div class="modal" role="complementary">
  <nav class="modal__open">
    <span class="modal__open-btn"></span>
  </nav>
  <div class="modal__area">
    <div class="modal__bg"></div>
    <div class="modal__wrapper">
      <aside class="modal-content">

				<h3 class="modal-content__title">Categories</h3>
				<?php // カテゴリー一覧
				$args = ['pad_counts' => false];
				get_template_part('tmp/categories-link', null, $args); ?>

				<?php // 検索フォーム
				get_template_part('tmp/search-form'); ?>

				<nav class="modal-content__nav">
					<ul class="modal-content__ul">
						<li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about/">ABOUT</a></li>
						<li><a href="<?php bloginfo('url'); ?>/menu/">MENU</a></li>
						<li><a href="<?php bloginfo('url'); ?>/blog/">BLOG</a></li>
						<!-- <li><a href="<?php bloginfo('url'); ?>/sitemap/">SITEMAP</a></li> -->
						<li><a href="<?php bloginfo('url'); ?>/privacy-policy/">PRIVACY POLICY</a></li>
						<li><a href="<?php bloginfo('url'); ?>/contact/">CONTACT</a></li>
					</ul>
				</nav>

      </aside>
    </div>
  </div>
</div>
