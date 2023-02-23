<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<div class="modal" role="complementary">
  <nav class="modal__open">
    <span class="modal__open-btn"></span>
  </nav>
  <div class="modal__area">
    <div class="modal__bg"></div>
    <div class="modal__wrapper">
      <aside class="modal__content">

				<?php // カテゴリー一覧
				$args = ['pad_counts' => false];
				get_template_part('tmp/categories-link', null, $args); ?>

      </aside>
    </div>
  </div>
</div>
