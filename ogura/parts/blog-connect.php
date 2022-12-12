<?php
/*
Template Name: ブログカード
*/
?>

      <?php 
        global $blogs;
      ?>
      <!-- 関連スタッフブログ -->
      <div class="blog-connect__links">
        <div class="blog-connect__inner inner">
          <div class="blog-connect__top">
            <h2 class="blog-connect__title">関連スタッフブログ</h2>
            <span class="blog-connect__subtitle">Related Staff blog</span>
          </div>
          <div class="blog__items card-list">
            <?php
              $cat_id = array();
              if(is_page('')):
                if(is_page('restaurant')):
                  $cat = get_category_by_slug("y-restaurant");
                elseif(is_page('bathhouse')):
                  $cat = get_category_by_slug("y-bath");
                elseif(is_page('shop')):
                  $cat = get_category_by_slug("y-shop");
                else:
                  $cat = '';
                endif;
                $cat_id[0] = $cat->cat_ID;
              else:
                $categories = get_the_category($post->ID);
                foreach( $categories as $category ) {
                  array_push($cat_id, $category -> cat_ID);
                }
              endif;
              $args = array(
                'post_type' => array('post'),
                'post_status' => array('publish'),//公開状態
                'posts_per_page' => 4,//r件取得
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

              <?php endwhile;
              ?>
            <?php endif; ?>
          </div>

          <!-- ブログリンクボタン -->
          <?php 
            $cat = get_category($cat_id[0]);
            $cat_slug = $blogs.'/'.$cat->slug;
          ?>
          <div class="blog__btn">
            <a class="btn-link" href="<?php echo $cat_slug; ?>">もっと見る</a>
          </div>
        </div>
      </div>