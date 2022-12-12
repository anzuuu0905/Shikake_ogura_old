<?php get_header(); ?>
<?php
  global $restaurant;
  global $shop;
  global $bathhouse;
?>

  <main class="main grid__content">
      <section class="facilitypage-head__wrap">
        <div class="facilitypage-head__text">
          <h1 class="facilitypage__title">施設のご案内</h1>
          <span class="facilitypage__subtitle">Facility Information</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="facilitypage facilitypage__block">
        <div class="inner facilitypage__inner">
          <div class="facilitypage__text">
            <h3 class="facilitypage__head">「道の駅ゆ～ぱるのじり」は、心も体もゆったりと癒してくれる快適空間。</h3>
            <p class="facilitypage__description">
              「道の駅ゆ～ぱるのじり」は、<br class="u-mobile">
              ここならではなグルメや地元生鮮や加工品をはじめ、
              宮崎県らしいお土産など、食を楽しめる施設です。<br>
              お風呂もご用意していますので、入浴してから
              食を楽しんでいただくのもツウな施設の使い方。
            </p>
          </div>

          <div class="facilitypage-calender__wrap">
            <h2 class="facilitypage-body__title">営業日カレンダー</h2>
            <div class="facilitypage-info__sp">
              <div class="facilitypage-info__text">
              <?php
              $page_obj = get_page_by_path( 'index' );
              $page_id = $page_obj->ID;
              the_field('eigyo', $page_id);
            ?>
              </div>
            </div>
            <div class="facilitypage-info__wrap">
              <div class="facilitypage-calender__block">

          <!-- XO Event Calendar プラグイン -->
            <?php echo do_shortcode( '[xo_event_calendar holidays="regular-holiday" navigation="false" months="2"]' ); ?>
              </div>
              <div class="facilitypage-info__pc">
                <div class="facilitypage-info__text">
                  <?php
                    $page_obj = get_page_by_path( 'index' );
                    $page_id = $page_obj->ID;
                    the_field('eigyo', $page_id);
                  ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="facilitypage__block">
        <div class="inner facilitypage-map__inner">
          <!-- 館内マップ　SP -->
          <div class="facilitypage-map__wrap u-mobile">
            <div class="facilitypage-map__1f">
              <div class="facilitypage-map__img1f">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map1f_sp.png" alt="ゆ〜ぱるのじり施設案内1階">
              </div>
              <div class="facilitypage__items">
                <a href="<?php echo $restaurant; ?>" class="facilitypage__item facilitypage-item">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img1.jpg" alt="レストラン味彩">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title">レストラン味彩</h3>
                    <p class="facilitypage-item__description">昼／11:00〜15:00<span class="facilitypage-item__description--small">（L.O. 14:30）</span></p>
                    <p class="facilitypage-item__description">夜／団体様のみの御予約制 17:00～21:00<span class="facilitypage-item__description--small">（L.O. 20:30）</span></p>
                    <span class="facilitypage-item__text">※御宴会は、2時間（L.O.は1時間半）制</span>
                  </div>
                </a>
                <a href="<?php echo $shop; ?>" class="facilitypage__item facilitypage-item">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img2.jpg" alt="売店">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title">売店</h3>
                    <p class="facilitypage-item__description">8:00〜18:00</p>
                  </div>
                </a>
                <a href="<?php echo $bathhouse; ?>" class="facilitypage__item facilitypage-item">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img3.jpg" alt="こばやしのじりの湯">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title">こばやしのじりの湯</h3>
                    <p class="facilitypage-item__description">11:00〜20:30<span class="facilitypage-item__description--small">（最終受付 20:00）</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="facilitypage-map__2f u-mobile">
            <div class="facilitypage-map__img2f">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map2f_sp.png" alt="ゆ〜ぱるのじり施設案内2階">
            </div>
            <div class="facilitypage__items">
              <div class="facilitypage__item facilitypage-item">
                <figure class="facilitypage-item__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img4.jpg" alt="宿泊（休業中／再開未定）">
                </figure>
                <div class="facilitypage-item__textbox">
                  <h3 class="facilitypage-item__title facilitypage-item__title--close">宿泊（休業中／再開未定）</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- 館内マップ pc -->
          <div class="facilitypage-map__wrap u-desktop">
            <div class="facilitypage-map__1f">
              <div class="facilitypage__items">
                <a href="<?php echo $restaurant; ?>" class="facilitypage__item facilitypage-item__restaurant">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img1.jpg" alt="レストラン味彩">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title">レストラン味彩</h3>
                    <p class="facilitypage-item__description">昼／11:00〜15:00<span class="facilitypage-item__description--small">（L.O. 14:30）</span></p>
                    <p class="facilitypage-item__description">夜／団体様のみの御予約制 17:00～21:00<span class="facilitypage-item__description--small">（L.O. 20:30）</span></p>
                    <span class="facilitypage-item__text">※御宴会は、2時間（L.O.は1時間半）制</span>
                  </div>
                </a>
                <a href="<?php echo $shop; ?>" class="facilitypage__item facilitypage-item__shop">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img2.jpg" alt="売店">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title">売店</h3>
                    <p class="facilitypage-item__description">8:00〜18:00</p>
                  </div>
                </a>
              </div>
              <div class="facilitypage-map__img1f">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map1f_pc.png" alt="ゆ〜ぱるのじり施設案内1階">
              </div>
            </div>
            <div class="facilitypage-map__2f u-desktop">
              <div class="facilitypage__items">
                <div class="facilitypage__item facilitypage-item__hotel">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img4.jpg" alt="宿泊（休業中／再開未定）">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title facilitypage-item__title--close">宿泊（休業中／再開未定）</h3>
                  </div>
                </div>
                <a href="<?php echo $bathhouse; ?>" class="facilitypage__item facilitypage-item__bathhouse">
                  <figure class="facilitypage-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map-img3.jpg" alt="こばやしのじりの湯">
                  </figure>
                  <div class="facilitypage-item__textbox">
                    <h3 class="facilitypage-item__title">こばやしのじりの湯</h3>
                    <p class="facilitypage-item__description">11:00〜20:30<span class="facilitypage-item__description--small">（最終受付 20:00）</span></p>
                  </div>
                </a>
              </div>
              <div class="facilitypage-map__img2f">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/facility-map2f_pc.png" alt="ゆ〜ぱるのじり施設案内2階">
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>