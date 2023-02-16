<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if(get_the_time('Y/m/d') == get_the_modified_date('Y/m/d')): ?>
  <time class="post-date__published" itemprop="datePublished" content="<?php echo get_the_time('Y-m-d') ?>">
    <?php the_time('Y/m/d'); ?>
  </time>
<?php else: ?>
  <time class="post-date__published" itemprop="dateModified" datetime="<?php echo get_the_modified_date('Y-m-d') ?>">
    <?php the_modified_date('Y/m/d'); ?>
  </time> /
  <span class="post-date__updated" itemprop="datePublished" content="<?php echo get_the_time('Y-m-d') ?>">
    <?php the_time('Y/m/d'); ?>
  </span>
<?php endif; ?>
