<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php

function get_description() {
	if ( is_front_page() ) {
		return '兵庫県神戸市でホームページ制作を行っています。ワードプレスを使用した制作実績は100サイト以上！お気軽にご相談ください。';
	}
	elseif ( is_search() ) {
		return '';
	}
	elseif ( is_home() ) {
		return 'ブログ一覧です。';
	}
	elseif ( is_category('wordpress') ) {
		return 'ワードプレス (WordPress) のカスタマイズに関する記事一覧のページです。ワードプレスは、ウェブサイト制作に関する特別な知識が無くても、手軽にホームページの更新などが行えるシステムのことです。また、ワードプレスに標準で用意されている関数に加え、プログラミング言語の PHP や JavaScript を加えることで、サイトにより多彩な表現をもたせることが可能です。';
	}
	elseif ( is_category('shopify') ) {
		return 'Shopifyに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('tools') ) {
		return 'ウェブ制作が捗る便利なツールなどに関する記事を掲載しています。';
	}
	elseif ( is_category('python') ) {
		return 'Python（パイソン）は、主に自動化プログラムや AI（人工知能）の開発、アプリケーション開発などに利用されることが多い、世界的に人気の高いプログラミング言語です。Python を使うことによって手作業で行えば数ヶ月かかるようなタスクであっても、「ものの数秒」で完了できることもあります。例えば、Excel のデータを加工してウェブサイトのコンテンツを生成するといったこともお手のもので、毎回繰り返し行うルーチン作業を自動化する際に大きな威力を発揮します。';
	}
	elseif ( is_category('ruby') ) {
		return 'Rubyに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('linux') ) {
		return 'Linuxに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('javascript') ) {
		return 'JavaScriptに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('hugo') ) {
		return 'HUGOに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('html') ) {
		return 'HTMLに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('css') ) {
		return 'CSSに関するブログ記事の一覧のページです。';
	}
	elseif ( is_category('git-github') ) {
		return 'Git / GitHubに関するブログ記事の一覧のページです。';
	}
	elseif ( has_excerpt() ) {
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
