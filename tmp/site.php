<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if(post_custom('acf_site')): ?>
<dl class="article-site">
  <dt class="article-site__dt">参考サイト</dt>
  <dd class="article-site__dd">
    <ul class="article-site__ul">
    <?php
      $sites = explode ('- [', (post_custom('acf_site'))); // 文字列を分割
      $del = array_splice($sites, 0, 1); // 配列の最初の要素を削除
    ?>

    <?php foreach ($sites as &$site): ?>
      <?php
        $link_text = explode ('](', $site)[0];
        $link_url = explode ('](', $site)[1];
        $link_url = rtrim($link_url); // 改行削除
        $link_url = rtrim($link_url, ')');
      ?>
      <li class="article-site__list">
        <a href="<?php echo $link_url; ?>" class="article-site__href" target="_blank" rel="noopener noreferrer"><?php echo $link_text; ?></a>
      </li>
      <?php unset($site); // 要素の参照を解除 ?>
    <?php endforeach; ?>

    </ul>
  </dd>
</dl>
<?php endif; ?>
