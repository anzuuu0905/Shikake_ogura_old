<?php get_header(); ?>

<main class="main grid__content">
      <section class="shop-head__wrap">
        <div class="shop-head__text">
          <h1 class="shop__title">売店</h1>
          <span class="shop__subtitle">Shop</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="shop shop__block">
        <div class="inner shop__inner">
          <div class="shop__text">
            <p class="shop__description">
              地元の新鮮な野(山)菜、<br class="u-mobile">それらの素材を使った小林市の加工品をはじめ、<br>
              宮崎県らしいお土産などが人気です。<br>
              特産品の全国発送も行っております。
            </p>
          </div>

          <!-- スライダー -->
          <?php get_template_part('parts/subpage-slick'); ?>

          <div class="shop-time__wrap">
            <h2 class="shop-body__title">営業時間</h2>
            <p class="shop-time__text">8:00〜18:00</p>
            <a class="shop-time__link" href="#calender">定休日はこちら</a>
          </div>

          <div class="shop-info__wrap">
            <h2 class="shop-body__title">オススメ商品のご案内</h2>
            <!-- ブログカードリスト -->
            <div class="blog__items card-list">
              <?php
                $cat_id = array();
                $cat = get_category_by_slug('ys_menu');
                $cat_id[0] = $cat->cat_ID;
                $args = array(
                  'post_type' => array('post'),
                  'post_status' => array('publish'),//公開状態
                  'posts_per_page' => 4,//4件取得
                  'post__not_in' =>array( $post->ID ), //現在の記事は含めない
                  'category__in' => $cat_id,
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

              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

      <!-- 関連スタッフブログ -->
      <?php get_template_part('parts/blog-connect'); ?>



<?php get_footer(); ?>