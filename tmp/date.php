<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if(get_the_time('Y/m/d') == get_the_modified_date('Y/m/d')): ?>
	<dt>Published</dt>
	<dd>
		<time class="post-date__published" itemprop="datePublished" content="<?php echo get_the_time('Y-m-d') ?>">
			<?php the_time('Y/m/d'); ?>
		</time>
	</dd>
<?php else: ?>
	<dt>Published</dt>
  <dd>
		<span class="post-date__updated" itemprop="datePublished" content="<?php echo get_the_time('Y-m-d') ?>">
			<?php the_time('Y/m/d'); ?>
		</span>
	</dd>
	<dt>Updated</dt>
  <dd>
		<time class="post-date__published" itemprop="dateModified" datetime="<?php echo get_the_modified_date('Y-m-d') ?>">
			<?php the_modified_date('Y/m/d'); ?>
		</time>
	</dd>
<?php endif; ?>
