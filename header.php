<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<meta name="referrer" content="no-referrer-when-downgrade">
<meta name="format-detection" content="telephone=no">
<meta name="robots" content="max-image-preview:large" />
<!-- title / description  -->
<title><?php wp_title(' - ',true,'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="ここにmeta descriptionが入ります" />
<!-- canonical -->
<link rel="canonical" href="https://example.com/">
<link rel="alternate" hreflang="ja" href="<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
<!-- OGP -->
<?php if(!is_user_logged_in()): // アナリティクス ?>
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
    get_template_part('tmp/search-form'); ?>

    <nav class="header__nav">
      <ul class="header__ul">
        <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
        <li><a href="<?php bloginfo('url'); ?>/blog/">BLOG</a></li>
        <li><a href="<?php bloginfo('url'); ?>/info/">INFO</a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>
  </div>
</header>
