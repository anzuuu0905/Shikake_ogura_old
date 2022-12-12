<?php get_header(); ?>
    <main class="main grid__content">
      <section class="blog-article blog-article__block">
        <!-- パンくずリスト -->
        <?php get_template_part('parts/breadcrumb'); ?>
        <!-- ブログナビメニュー -->
        <?php get_template_part('parts/category-nav'); ?>
        <div class="inner blog-article__inner">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : 
              $thumbID = get_post_thumbnail_id( $post->ID );
              $thumbAlt = get_post_meta( $thumbID, '_wp_attachment_image_alt', true );
            ?>
              <figure class="blog-article__mainimg">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $thumbAlt;?>">
              </figure>
            <?php endif; ?>
            <div class="blog-article__wrapper">
              <div class="blog-article__titlebox">
                <h2 class="blog-article__title"><?php the_title(); ?></h2>
                <div class="blog-article__info">
                  <div class="blog-article__author">
                    <?php the_author_nickname(); ?>
                  </div>
                  <time class="blog-article__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time>
                </div>
                <?php the_tags('<ul><li class="blog-article__tag">', '</li><li class="blog-article__tag">', '</li></ul>'); ?>
              </div>

              <div class="blog-article__textbox">
                <?php the_content(); ?>
              </div>
            </div>


            <!-- SNS LINK -->
            <div class="blog-article__sns shareBox">
              <div class="blog-article__snstext">
                <span>Share!!</span>
              </div>
              <div class="blog-article__snslist">
                <?php echo do_shortcode('[addtoany]'); ?>
              </div>
            </div>
            <div class="blog-author__block">
              <div class="blog-author__wrap">
                <div class="blog-author__namebox">
                  <div class="blog-author__img">
                  <?php echo get_avatar( get_the_author_id(), 130 ); ?>
                </div>
                  <p class="blog-author__name"><span>この記事を書いた人</span><?php the_author_nickname(); ?></p>
                </div>
                <div class="blog-author__linkpc"><a class="btn-link__blog" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">この人の他の記事を読む</a></div>
              </div>
              <p class="blog-author__description"><?php the_author_meta('user_description'); ?></p>
              <div class="blog-author__linksp">
              <a class="btn-link__blog" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">この人の他の記事を読む</a>
              </div>
            </div>
            <?php 
              endwhile;
              wp_reset_postdata();
              endif; ?>
        </div>
      </section>
      <!-- 関連スタッフブログ -->
      <!-- ブログカードリスト -->
      <?php get_template_part('parts/blog-connect'); ?>

<?php get_footer(); ?>