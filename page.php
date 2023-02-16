<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<article class="page-article" itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <header class="page-article__header">
    <h1 class="page-article__title"><?php the_title(); ?></h1>
    <?php // 日付タグ
    get_template_part('tmp/date'); ?>
    <?php the_post_thumbnail(); ?>
  </header>

  <section class="page-article__content" itemprop="mainEntityOfPage">
    <?php add_filter('the_content', 'wpautop'); ?>
    <?php the_content(); ?>
  </section>

<?php endwhile; endif; ?>
</article>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
