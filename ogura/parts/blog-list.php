<?php
/*
Template Name: ブログ記事一覧
*/
?>

<section class="blog-page blog-page__block">
  <div class="blog-page__wrapper">
    <div class="inner blog__inner">
      <!-- ブログカードリスト -->
      <div class="blog__items card-list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        ?>
        <?php get_template_part('parts/blog-card'); ?>
        <?php endwhile; ?>
        <?php else: ?>
          <p class="blogpage__notfound">該当の記事はありませんでした。</p>
        <?php endif; ?>
      </div>
      <?php if(function_exists('wp_pagenavi')): ?>
        <div class="blog__pagenavi wp-pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>