<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<form method="get" id="searchform" class="search-form" action="<?php bloginfo('url'); ?>">
  <input type="text" name="s" id="s" class="search-form__input" placeholder="">
  <button type="submit" class="search-form__button">
		<img class="search-form__icon" src="<?php bloginfo('url'); ?>/wp-content/img/common/search.svg" alt="conscious">
	</button>
</form>
