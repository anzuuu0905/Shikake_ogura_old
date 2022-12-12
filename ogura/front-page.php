<?php get_header(); ?>
<?php
  global $home;
  global $facility;
  global $restaurant;
  global $shop;
  global $bathhouse;
  global $access;
  global $blogs;
  global $news;
  global $event;
  global $company;
  global $recruit;
  global $sitemap;
  global $privacypolicy;
  global $contact;
?>
    <main class="main grid__content">
      <section class="mainview mainview__wrap">
        <div class="slider-top__wrap">
          <div class="slider-top" id="js-slider-top">
          <?php if(wp_is_mobile()): ?>
            <?php if(have_rows('slide_area_sp',99)): ?>
              <?php while(have_rows('slide_area_sp',99)): the_row(); ?>
                <div><img src="<?php the_sub_field('slide_img_sp',99); ?>" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php else: ?>
            <?php if(have_rows('slide_area',99)): ?>
              <?php while(have_rows('slide_area',99)): the_row(); ?>
                <div><img src="<?php the_sub_field('slide_img',99); ?>" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php endif; ?>
          </div>
        </div>
        <div class="dots-top"></div>
        <div class="mainview__text">
          <h2 class="mainview__title">のじりのいい湯と<br>
            ここだけグルメ。</h2>
        </div>
      </section>
      <div class="top-info  top-info__block">
        <div class="top-info__inner inner">

          <!-- 変更はこの部分です -->
          <div class="top-info__wrap">
            <h3 class="top-info__title">営業時間のご案内</h3>
            <table class="top-info__wrap">
              <tbody>
                <tr class="top-info__table">
                  <th>レストラン味彩</th>
                  <td><span class="top-info__small"> 昼/</span>11:00 ~ 15:00<span class="top-info__small">（L.O. 14:30）</span><br>
                    <span class="top-info__small">夜/</span>団体様のみの御予約制<br>
                    <span class="top-info__small">17:00~21:00（L.O. 20:30）</span><br>
                    <span class="top-info__midium">※御宴会は、2時間（L.O. は1時間半）制</span>
                  </td>
                </tr>
                <tr class="top-info__table">
                  <th>売店</th>
                  <td>08:00 ~ 18:00</td>
                </tr>
                <tr class="top-info__table">
                  <th>こばやしのじりの湯</th>
                  <td>11:00 ~ 20:30 <span class="top-info__small">（最終受付 20:00）</span> </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- 変更はここまで -->
          <div class="top-info__wrap">
            <h3 class="top-info__title">定休日</h3>
            <div class="top-info__textbox">
              <p class="top-info__close">毎月第1水曜日 <span class="top-info__text">(当日祝日の場合は翌日)</span></p>
              <a href="#calender" class="top-info__calender">営業日カレンダーを見る</a>
            </div>
            <div class="top-info__description">
              <?php
              $page_obj = get_page_by_path('index');
              $page_id = $page_obj->ID;
              the_field('eigyo', $page_id);
              ?>
            </div>
          </div>
        </div>
      </div>

      <section class="blog blog__block">
        <div class="blog__wrapper">
          <div class="inner blog__inner">
            <div class="blog__head">
              <div class="blog__top">
                <h2 class="blog__title">スタッフブログ</h2>
                <span class="blog__subtitle">Staff blog</span>
              </div>
              <p class="blog__description">「道の駅」メンバーの日々の出来事や、小林市の紹介など<br class="u-desktop">スタッフの視点でいろいろな情報をブログで発信しています。</p>
            </div>
            <!-- ブログカードリスト -->
            <div class="blog__items card-list">
            <?php
                if(wp_is_mobile()){
                  $blog_cnt = 4;
                }else{
                  $blog_cnt = 8;
                }
                $args = array(
                  'post_type' => array('post'),
                  'post_status' => array('publish'),//公開状態
                  'category__not_in' => array(1, 5),//お知らせ（y-news)、イベント情報（y-event）以外
                  'posts_per_page' => $blog_cnt,
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

            <!-- ブログリンクボタン -->
            <!-- <div class="blog__btn-wrap"> -->
              <div class="blog__btn">
                <a class="btn-link" href="<?php echo $blogs; ?>">もっと見る</a>
                <div class="blog__search">
                <?php get_search_form(); ?>
              </div>
              <!-- </div> -->
              <!-- 検索窓 -->
            </div>
          </div>
        </div>
      </section>
      <section class="facility facility__block">
        <div class="facility__inner inner">
          <div class="facility__textbox">
            <p class="facility__description">レストラン・売店・入浴施設を完備した<br class="u-mobile">「道の駅ゆ～ぱるのじり」。<br>
              新鮮な野菜や加工品などのお土産はもちろん、<br class="u-mobile">疲れを癒す入浴施設も併設。<br>
              レストラン味彩では、小林市や宮崎県らしさを<br class="u-mobile">感じる新メニューが続々追加されています。<br>
              小林市、宮崎県の食材を楽しめる<br class="u-mobile">〝わざわざ行きたくなる〟「道の駅」を目指します。</p>
          </div>
          <div class="section__head">
            <h2 class="section__title">施設のご案内</h2>
            <span class="section__subtitle">Facility Information</span>
          </div>
          <div class="facility__items">
            <div class="facility__item">
              <figure class="facility__img1">
                <div class="facility__text facility__text--ajisai">
                  <h3 class="facility__title">レストラン味彩</h3>
                  <div class="facility__link"><a class="facility__btn" href="<?php echo $restaurant; ?>">詳しく見る</a></div>
                </div>
              </figure>
            </div>
            <div class="facility__item">
              <figure class="facility__img2">
                <div class="facility__text">
                  <h3 class="facility__title">売店</h3>
                  <div class="facility__link"><a class="facility__btn" href="<?php echo $shop; ?>">詳しく見る</a></div>
                </div>
              </figure>
            </div>
            <div class="facility__item">
              <figure class="facility__img3">
                <div class="facility__text">
                  <h3 class="facility__title">こばやしのじりの湯</h3>
                  <div class="facility__link"><a class="facility__btn" href="<?php echo $bathhouse; ?>">詳しく見る</a></div>
                </div>
              </figure>
            </div>
            <div class="facility__item">
              <figure class="facility__img4 facility__img--closed">
                <div class="facility__text">
                  <h3 class="facility__title">宿泊(休業中／再開未定)</h3>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <section class="news news__block">
        <div class="news__inner inner">
          <div class="section__head">
            <h2 class="section__title">お知らせ</h2>
            <span class="section__subtitle">Information</span>
          </div>
          <div class="news__wrapper">
            <div class="news__lists">
              <ul>
              <?php
                $args = array(
                  'post_type' => array('post'),
                  'post_status' => array('publish'),//公開状態
                  // 'cat' => '1', 
                  'category_name' => 'y-news',// 表示したいカテゴリーのスラッグを指定
                  'posts_per_page' => 4,//4件取得
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
                  ?>
                    <li class="news__list">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </li>

                  <?php 
                  endwhile;
                  wp_reset_postdata();
                ?>
              <?php endif; ?>
            </ul>
              <!-- ブログリンクボタン -->
              <div class="news__btn">
                <a class="btn-link" href="<?php echo $news; ?>">もっと見る</a>
              </div>
            </div>
            <div class="news-sns__area">
              <iframe class="news-sns__img u-desktop" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fyuparunojiri%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=445718773341488" width="340" height="369" style="border:none;overflow:hidden" allowfullscreen allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
              <iframe class="news-sns__img u-mobile" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fyuparunojiri%2F&tabs=timeline&width=290&height=426&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=445718773341488" width="290" height="426" style="border:none;overflow:hidden" allowfullscreen allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <p class="news-sns__text">※現在、Facebookアプリの問題で、「シェアする」のボタンが機能していません。</p>
            </div>
          </div>
        </div>
      </section>

      <section class="event event__block">
        <div class="event__wrapper">
          <div class="event__inner inner">
            <div class="section__head">
              <h2 class="section__title">イベント情報</h2>
              <span class="section__subtitle">Event Information</span>
            </div>
            <!-- ブログカードリスト -->
            <div class="event__items card-list">
              <?php
                $args = array(
                  'post_type' => array('post'),
                  'post_status' => array('publish'),//公開状態
                  'category_name' => 'y-event', // 表示したいカテゴリーのスラッグを指定
                  // 'category' => 5, 
                  'posts_per_page' => 4,//8件取得
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

            <!-- ブログリンクボタン -->
            <div class="news__btn">
              <a class="btn-link" href="<?php echo $event; ?>">もっと見る</a>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
