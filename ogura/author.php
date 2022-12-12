<?php get_header(); ?>

    <main class="main grid__content">
      <section class="blogpage-head__wrap">
        <div class="blogpage-head__text">
          <h1 class="blogpage__title">スタッフブログ</h1>
          <span class="blogpage__subtitle">Staff blog</span>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <!-- ブログナビメニュー -->
      <?php get_template_part('parts/category-nav'); ?>

      <div class="blogpage__seach">「<?php echo get_the_author(); ?>」の記事一覧</div>

      <!-- ブログ一覧 -->
      <?php get_template_part('parts/blog-list'); ?>

<?php get_footer(); ?>