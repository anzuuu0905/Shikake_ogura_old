<?php get_header(); ?>

<?php 
  global $contact;
?>

<main class="main grid__content">
      <section class="subpage-head__common">
        <div class="subpage-head__text">
          <h1 class="subpage__title">採用情報</h1>
          <span class="subpage__subtitle">Recruit</span>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <section class="recruit company_block">
        <div class="recruit__wrapper">
          <div class="inner recruit__inner">
            <h2 class="recruit__title">募集職種</h2>
            <div class="recruit__content">
              <p class="recruit__description">現在、以下の職種で求人を行っています。</p>
              <div class="blog__items card-list">
                <!-- ブログカードリスト -->
                <?php
                  $args = array(
                    'post_type' => array('post'),
                    'post_status' => array('publish'),//公開状態
                    'category_name' => 'y-recruit',// 表示したいカテゴリーのスラッグを指定
                    'posts_per_page' => -1,
                    'order' => 'DESC',//降順
                    'orderby' => 'date',//日付で並び替える
                  );
                  $the_query = new WP_Query( $args );

                ?>
                <!-- ループ -->
                <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : ?>
                    <?php 
                      $the_query->the_post();
                      $post_id = get_the_ID();
                    ?>
                    <?php get_template_part('parts/blog-card'); ?>
                  <?php 
                    endwhile;
                    wp_reset_postdata();
                  ?>
                <?php endif; ?>
              </div>
            </div>
            <!-- </div> -->
            <div class="recruit__contact">
              <a href="<?php echo $contact; ?>" class="company__botton">お問い合わせ</a>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>