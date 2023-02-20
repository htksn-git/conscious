<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<nav class="prev-next-link">
	<ul class="prev-next-link__ul">
		<?php previous_post_link('<li class="prev-next-link__li--prev">%link</li>', '%title', 'true'); ?>
		<?php next_post_link('<li class="prev-next-link__li--next">%link</li>', '%title', 'true'); ?>
	</ul>
</nav>
