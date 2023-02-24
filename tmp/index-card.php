<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if( is_single() || is_home() ): ?>
<a class="index-card__href index-card__icon icon-<?php echo get_category_slug(); ?>" href="<?php the_permalink(); ?>">
<?php else: ?>
<a class="index-card__href" href="<?php the_permalink(); ?>">
<?php endif; ?>
  <h3 class="index-card__title"><?php the_title(); ?></h3>
  <dl class="post-meta">
		<?php if( is_single() || is_home() ): ?>
			<dt>Category</dt>
			<dd><?php echo get_category_name(); ?></dd>
			<?php if (get_tag_name() != ''): ?>
				<dt>Tags</dt>
				<dd><?php echo get_tag_name(); ?></dd>
			<?php endif; ?>
    <?php endif; ?>
		<?php get_template_part('tmp/date'); ?>
  </dl>
</a>
