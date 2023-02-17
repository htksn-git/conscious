<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if (!is_home() && !is_front_page()) : ?>
  <nav class="breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb__ol" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="item">
          <span itemprop="name">HOME</span>
        </a>
        <meta itemprop="position" content="1" />
      </li>
      <?php if (is_category() || is_single()) : ?>
        <?php $categories = get_the_category(); ?>
        <?php if ($categories) : ?>
          <?php $category = $categories[0]; ?>
          <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="<?php echo get_category_link($category->term_id); ?>" itemprop="item">
              <span itemprop="name"><?php echo $category->name; ?></span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
        <?php endif; ?>
        <?php if (is_single('投稿タイトルも表示する場合')) : ?>
          <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="3" />
          </li>
        <?php endif; ?>
      <?php elseif (is_page()) : ?>
        <?php $ancestors = get_post_ancestors($post); ?>
        <?php if ($ancestors) : ?>
          <?php $ancestors = array_reverse($ancestors); ?>
          <?php foreach ($ancestors as $key => $ancestor) : ?>
            <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a href="<?php echo get_permalink($ancestor); ?>" itemprop="item">
                <span itemprop="name"><?php echo get_the_title($ancestor); ?></span>
              </a>
              <meta itemprop="position" content="<?php echo $key + 2; ?>" />
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php the_title(); ?></span>
          <meta itemprop="position" content="<?php echo count($ancestors) + 2; ?>" />
        </li>
      <?php endif; ?>
    </ol>
  </nav>
<?php endif; ?>
