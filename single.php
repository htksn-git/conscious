<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<article class="single-article" itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <header class="single-article__header" itemprop="headline">
    <div class="single-article__header-meta header-meta-icon <?php echo get_category_slug(); ?>">
      <h1 class="single-article__title"><?php the_title(); ?></h1>
      <?php // 投稿メタ情報
      get_template_part('tmp/post-meta'); ?>
    </div>
  </header>
  
  <div class="single-article__wrapper">

    <div class="single-article__content">
      <div class="single-article__content-wrapper">
        <?php // パンくずリスト
        get_template_part('tmp/breadcrumbs'); ?>
        <?php the_post_thumbnail(); ?>

        <main class="single-article__main" itemprop="mainEntityOfPage">
          <?php add_filter('the_content', 'wpautop'); ?>
          <?php the_content(); ?>
        </main>

        <?php // 参考サイト
        get_template_part('tmp/site'); ?>

      </div>
    </div>

    <?php get_sidebar(); ?>
  </div>

<?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>
