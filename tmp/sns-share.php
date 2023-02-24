<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<ul class="sns-share">
	<li class="sns-share__li">
		<a class="sns-share__href" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener noreferrer">
			<img class="sns-share__img" src="<?php bloginfo('url'); ?>/wp-content/img/icon-sns/facebook.svg" alt="">
		</a>
	</li>
	<li class="sns-share__li">
		<a class="sns-share__href" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="nofollow noopener noreferrer">
			<img class="sns-share__img" src="<?php bloginfo('url'); ?>/wp-content/img/icon-sns/twitter.svg" alt="">
		</a>
	</li>
	<li class="sns-share__li">
		<a class="sns-share__href" href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener noreferrer">
			<img class="sns-share__img" src="<?php bloginfo('url'); ?>/wp-content/img/icon-sns/line.svg" alt="">
		</a>
	</li>
	<li class="sns-share__li">
		<a class="sns-share__href" href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" rel="nofollow noopener noreferrer">
			<img class="sns-share__img" src="<?php bloginfo('url'); ?>/wp-content/img/icon-sns/hatena.svg" alt="">
		</a>
	</li>
</ul>
