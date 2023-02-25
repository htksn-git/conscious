<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php
function get_category_content() {
	$description = '<p class="category-content__description">' . get_description() . '</p>';

	if ( is_category('wordpress') ) {
		$category_reference_lists = '[ワードプレスのダウンロード](https://ja.wordpress.org/download/)
		[関数リファレンス/WP Query - WordPress Codex 日本語版](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Query)';
	}
	elseif ( is_category('shopify') ) {
		$category_reference_lists = '[Liquid reference](https://shopify.dev/docs/api/liquid)
		[Shopify Cheat Sheet — A resource for building Shopify Themes with Liquid](https://www.shopify.com/partners/shopify-cheat-sheet)
		[Liquid template language](https://shopify.github.io/liquid/?shpxid=f3f43a79-F225-4EFE-52E7-DEC27FE5761D)';
	}
	elseif ( is_category('python') ) {
		$category_reference_lists = '[3.11.2 Documentation](https://docs.python.org/ja/3/)
		[プログラミング言語 Python 総合情報サイト - python.jp](https://www.python.jp/)
		[nkmk note](https://note.nkmk.me/)';
	}
	elseif ( is_category('ruby') ) {
		$category_reference_lists = '[オブジェクト指向スクリプト言語 Ruby リファレンスマニュアル (Ruby 3.1 リファレンスマニュアル)](https://docs.ruby-lang.org/ja/3.1/doc/index.html)
		[最速Rubyリファレンスマニュアル検索！ | るりまサーチ](https://rurema.clear-code.com/)
		[TryRuby: Learn programming with Ruby](https://try.ruby-lang.org/)
		[ホワイの(感動的)Rubyガイド :: 1. この本について](http://www.aoky.net/articles/why_poignant_guide_to_ruby/chapter-1.html)
		[逆引きRuby](https://scrapbox.io/rubytips/)';
	}
	elseif ( is_category('linux') ) {
		$category_reference_lists = '[Linuxゲリラ戦記](https://web.archive.org/web/20210413184001/http://www.garunimo.com/program/linux/)';
	}
	elseif ( is_category('javascript') ) {
		$category_reference_lists = '[JavaScript ガイド - JavaScript | MDN](https://developer.mozilla.org/ja/docs/Web/JavaScript/Guide)
		[JavaScript Primer - 迷わないための入門書 #jsprimer](https://jsprimer.net/)
		[現代の JavaScript チュートリアル](https://ja.javascript.info/)
		[とほほのJavaScriptリファレンス - とほほのWWW入門](https://www.tohoho-web.com/js/index.htm)';
	}
	elseif ( is_category('hugo') ) {
		$category_reference_lists = '[Hugo Documentation | Hugo](https://gohugo.io/documentation/)
		[まくまく Hugo ノート - 天才まくまくノート](https://maku77.github.io/hugo/)';
	}
	elseif ( is_category('html') ) {
		$category_reference_lists = '[HTML Standard 日本語訳](https://momdo.github.io/html/)';
	}
	elseif ( is_category('css') ) {
		$category_reference_lists = '[Can I use... Support tables for HTML5, CSS3, etc](https://caniuse.com/)';
	}
	elseif ( is_category('git-github') ) {
		$category_reference_lists = '[GitHub Documentation](https://docs.github.com/ja)
		[Gitを使ったバージョン管理｜サル先生のGit入門【プロジェクト管理ツールBacklog】](https://backlog.com/ja/git-tutorial/intro/01/)';
	}
	elseif ( is_category('tools') ) {
		$category_reference_lists = '';
	}

	$links = explode('[', $category_reference_lists);
	array_shift($links); // 配列の先頭の要素を削除
	$html_links = '';
	foreach ($links as $link):
		$link_text = explode ('](', $link)[0];
		$link_url = explode ('](', $link)[1];
		$link_url = rtrim($link_url); // 改行削除
		$link_url = rtrim($link_url, ')');
		$html = '<li><a href="' . $link_url . '">' . $link_text . '</a></li>';
		$html_links .= $html;
	endforeach;

	if ($html_links !== '') {
		$reference = '<footer class="category-content__reference">
		<span class="category-content__reference-title">Reference</span>
		<ul class="category-content__reference-ul">'
		. $html_links .
		'</ul>
		</footer>';
	} else {
		$reference = '';
	}

	return $description . $reference;
}
?>

<section class="category-content">
	<h1 class="category-content__title"><?php echo get_category_name(); ?></h1>
	<div class="category-content__wrapper">
		<div class="category-content__icon">
			<img class="category-content__icon-img" src="<?php bloginfo('url'); ?>/wp-content/img/icon-category/<?php echo get_category_slug(); ?>.svg" alt="<?php echo get_category_name(); ?>">
		</div>
		<div class="category-content__main">
			<?php echo get_category_content(); ?>
		</div>
	</div>
</section>
