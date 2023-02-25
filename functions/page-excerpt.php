<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php
function gen_page_excerpts() {
	global $post;
	$slug = $post->post_name; //投稿スラッグを取得
		if ($slug === 'blog') {
			$excerpt = 'ウェブサイト制作や技術的なことに関するブログを掲載しています。';
		}
		elseif ($slug === 'about') {
			$excerpt = '運営者のプロフィールなどをご紹介しています。';
		}
		elseif ($slug === 'seo') {
			$excerpt = 'SEO 対策に関する基本的な内容を掲載しています。';
		}
		elseif ($slug === 'flow') {
			$excerpt = 'お仕事をご依頼いただいた場合の流れを掲載しています。';
		}
		elseif ($slug === 'price') {
			$excerpt = 'ウェブサイト制作費用に関する内容を掲載しています。';
		}
		elseif ($slug === 'wordpress') {
			$excerpt = '専門的な知識が無くてもウェブサイトの更新が容易なワードプレスの詳細を掲載しています。';
		}
		elseif ($slug === 'contact') {
			$excerpt = 'お問い合わせはこちらからご連絡ください。';
		}
		elseif ($slug === 'privacy-policy') {
			$excerpt = '当サイトにおける個人情報保護方針を掲載しています。';
		}
		elseif ($slug === 'site-map') {
			$excerpt = '当サイト全体のサイトマップを掲載しています。';
		}
	return '<p class="index-card__excerpt">' . $excerpt . '</p>';
}
?>
