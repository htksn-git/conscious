<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<!DOCTYPE HTML>
<html lang="ja">
<?php if( is_front_page() ): ?>
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
<?php else: ?>
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
<?php endif; ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<meta name="referrer" content="no-referrer-when-downgrade">
<meta name="format-detection" content="telephone=no">
<meta name="robots" content="max-image-preview:large" />
<!-- title / description  -->
<title><?php wp_title(' - ',true,'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php echo get_description(); ?>" />
<!-- canonical -->
<link rel="canonical" href="<?php the_permalink(); ?>">
<link rel="alternate" hreflang="ja" href="<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
<!-- OGP -->
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:description" content="<?php echo get_description(); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:image" content="<?php bloginfo('url'); ?>/wp-content/img/common/thumbnail.png">
<?php if( is_front_page() ): ?>
<meta property="og:type" content="website">
<?php else: ?>
<meta property="og:type" content="article">
<?php endif; ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<!-- // -->
<?php if( ! is_user_logged_in() ): // アナリティクス ?>
<?php endif; ?>
<?php get_template_part('tmp/include-head'); // head追加読み込み ?>
<?php wp_head(); ?>
</head>

<body itemscope itemtype="https://schema.org/WebPage">

<header class="header" itemscope="" itemtype="https://schema.org/WPHeader">
  <div class="header__wrap" itemscope="" itemtype="https://schema.org/WebSite">
    <a href="<?php bloginfo('url'); ?>/" class="header__logo-href" itemprop="url">
      <img class="header__logo" src="<?php bloginfo('url'); ?>/wp-content/img/common/logo.svg" alt="conscious" itemprop="name about">
    </a>

    <?php // 検索フォーム
    // get_template_part('tmp/search-form'); ?>

    <nav class="header__nav">
      <ul class="header__ul">
        <li><a href="<?php bloginfo('url'); ?>/about/">プロフィール</a></li>
        <li><a href="<?php bloginfo('url'); ?>/blog/">技術ブログ</a></li>
        <li><a href="<?php bloginfo('url'); ?>/menu/">メニュー</a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="scroll-header">
	<div class="scroll-header__wrapper">
		<a href="<?php bloginfo('url'); ?>/" class="scroll-header__logo-href">
			<img class="scroll-header__logo" src="<?php bloginfo('url'); ?>/wp-content/img/common/logo.svg" alt="conscious">
		</a>
    <?php // 検索フォーム
    get_template_part('tmp/search-form'); ?>
	</div>
</div>
