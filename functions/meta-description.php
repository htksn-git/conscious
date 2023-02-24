<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php

function get_description() {
	if( is_front_page() ) {
		return '兵庫県神戸市でホームページ制作を行っています。ワードプレスを使用した制作実績は100サイト以上！お気軽にご相談ください。';
	}
	elseif( is_search() ) {
		return '';
	}
	elseif( is_home() ) {
		return 'ブログ一覧です。';
	}
	elseif( is_category('wordpress') ) {
		return 'ワードプレスに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('shopify') ) {
		return 'Shopifyに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('tools') ) {
		return 'ウェブ制作が捗る便利なツールなどに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('python') ) {
		return 'Pythonに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('ruby') ) {
		return 'Rubyに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('linux') ) {
		return 'Linuxに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('javascript') ) {
		return 'JavaScriptに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('hugo') ) {
		return 'HUGOに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('html') ) {
		return 'HTMLに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('css') ) {
		return 'CSSに関するブログ記事の一覧のページです。';
	}
	elseif( is_category('git-github') ) {
		return 'Git / GitHubに関するブログ記事の一覧のページです。';
	}
	elseif( has_excerpt() ) {
		return the_excerpt();
	}
	else {
		global $post;
		$summary = strip_tags($post->post_content);
		$summary = str_replace("\n", "", $summary);
		$summary = mb_substr($summary, 0, 120) . "…";
		return $summary;
	}
}

?>
