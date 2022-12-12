<?php get_header(); ?>
<?php
  global $contact;
?>

<main class="main grid__content">
      <section class="restaurant-head__wrap">
        <div class="restaurant-head__text">
          <h1 class="restaurant__title">レストラン味彩</h1>
          <span class="restaurant__subtitle">Restaurant AJISAI</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="restaurant restaurant__block">
        <div class="inner restaurant__inner">
          <div class="restaurant__text">
            <p class="restaurant__description">
              小林市の玄関口にある道の駅のレストランとして<br class="u-mobile">小林市（野尻・小林・須木）の食材をはじめ<br>
              宮崎県の食を味わっていただける<br class="u-mobile">地産地消のお店にしていきます。<br>
              もっと綺麗で素敵なお店はたくさんありますが、<br>
              お客様に少しでも、あのお店に行ってよかったねと<br class="u-mobile">思っていただけるように、<br>
              おもてなしと美味しい食の提供に努めます。
            </p>
          </div>
          <ul class="restaurant__links">
            <li class="restaurant__link"><a href="#restaurant-time">営業時間</a></li>
            <li class="restaurant__link"><a href="#menu-general">一般来店のお客様</a></li>
            <li class="restaurant__link"><a href="#menu-group">団体ご予約のお客様</a></li>
          </ul>
          <div id="restaurant-time" class="restaurant-time__wrap">
            <h2 class="restaurant-body__title">営業時間</h2>
            <p class="restaurant-time__text">昼／11:00〜15:00<span>（L.O.14:30）
              </span></p>
            <p class="restaurant-time__text">夜／<span>（団体様のみ御予約制）</span>17:00～21:00<span>（L.O.20:30）
              </span></p>
            <p class="restaurant-time__annotation">※御宴会は、2時間（L.O.は1時間半）制</p>
            <a class="restaurant-time__link" href="#calender">定休日はこちら</a>
          </div>

          <div class="restaurant-menu__wrap">
            <div id="menu-general"></div>
            <h2 class="restaurant-body__title">メニュー（一般来店のお客様）</h2>
            <p class="restaurant-menu__description">季節限定メニューなど、定期的にメニューを追加・変更しています。現時点のメニューは、食べログの「レストラン味彩」のページをご確認ください。</p>
            <div class="restaurant-banner__warp">
              <div class="restaurant-banner__text">
                <div>
                  <h2 class="restaurant-banner__title">『わざわざ食べに<br>
                    行きたくなる定食』
                  </h2>
                  <p class="restaurant-banner__subtitle">のあるレストランを目指します。</p>
                </div>
                <p class="restaurant-banner__description">最新のメニューはこちらに掲載しています</p>
                <div class="restaurant-banner__link"><a class="restaurant-banner__btn" rel="noreferrer noopener" href="https://tabelog.com/miyazaki/A4503/A450304/45004786/dtlmenu/" target="_blank">食べログのページへ</a></div>
              </div>
            </div>
            <ul class="restaurant-menu__items restaurant__slick js-restaurant__slick">
              <?php if(have_rows('slide_area')): ?>
                <?php while(have_rows('slide_area')): the_row(); ?>
                <?php the_sub_field('sub_field_name'); ?>
                <li class="restaurant-menu__item"><img src="<?php the_sub_field('slide_img'); ?>" alt="<?php the_sub_field('slide_text'); ?>"></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class="menu-group__wrap">
            <div id="menu-group"></div>
            <h2 class="restaurant-body__title">メニュー（団体ご予約のお客様）</h2>
            <p class="menu-group__text">※表示価格は税［ 消費税（10%）］込です。</p>
            <!-- アコーディオンメニュー -->
            <ul class="menu-group__content accordion__area">
              <li class="menu-group__inner accordion__item">
                <section>
                  <div class="menu-group__tab accordion__title js-accordion__title">
                    <h3 class="menu-group__title">会席料理</h3>
                    <p class="menu-group__price"><span class="menu-group__price--small">お一人様</span> 3,500<span class="menu-group__price--small">円</span></p>
                  </div>
                  <div class="menu-group__body accordion__box js-accordion__box">
                    <picture class="menu-group__img">
                      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-3500_pc.png">
                      <img class="menu01 pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-3500_sp.png" alt="会席料理 お一人様 3,500円">
                    </picture>
                  </div>
                </section>
              </li>
              <li class="menu-group__inner accordion__item">
                <section>
                  <div class="menu-group__tab accordion__title js-accordion__title">
                    <h3 class="menu-group__title">会席料理</h3>
                    <p class="menu-group__price"><span class="menu-group__price--small">お一人様</span> 4,500<span class="menu-group__price--small">円</span></p>
                  </div>
                  <div class="menu-group__body accordion__box js-accordion__box">
                    <picture class="menu-group__img">
                      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-4500_pc.png">
                      <img class="menu01 pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-4500_sp.png" alt="会席料理 お一人様 4,500円">
                    </picture>
                  </div>
                </section>
              </li>
              <li class="menu-group__inner accordion__item">
                <section>
                  <div class="menu-group__tab accordion__title js-accordion__title">
                    <h3 class="menu-group__title">会席料理</h3>
                    <p class="menu-group__price"><span class="menu-group__price--small">お一人様</span> 5,500<span class="menu-group__price--small">円</span></p>
                  </div>
                  <div class="menu-group__body accordion__box js-accordion__box">
                    <picture class="menu-group__img">
                      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-5500_pc.png">
                      <img class="menu01 pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-5500_sp.png" alt="会席料理 お一人様 5,500円">
                    </picture>
                  </div>
                </section>
              </li>
              <li class="menu-group__inner accordion__item">
                <section>
                  <div class="menu-group__tab accordion__title js-accordion__title">
                    <h3 class="menu-group__title menu-group__title--kagezen">陰膳（折詰）</h3>
                    <p class="menu-group__price"><span class="menu-group__price--small">お一人様</span> 2,200<span class="menu-group__price--small">円</span></p>
                  </div>
                  <div class="menu-group__body accordion__box js-accordion__box">
                    <picture class="menu-group__img">
                      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-2200_pc.png">
                      <img class="menu01 pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-2200_sp.png" alt="陰膳（折詰） お一人様 2,200円">
                    </picture>
                  </div>
                </section>
              </li>
              <li class="menu-group__inner accordion__item">
                <section>
                  <div class="menu-group__tab accordion__title js-accordion__title">
                    <h3 class="menu-group__title">お飲み物</h3>
                  </div>
                  <div class="menu-group__body accordion__box js-accordion__box">
                    <picture class="menu-group__img">
                      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-drink_pc.png">
                      <img class="menu01 pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/menu-drink_sp.png" alt="お飲み物">
                    </picture>
                  </div>
                </section>
              </li>
            </ul>
            <div class="restaurant-enkai__wrap">
              <h3 class="restaurant-enkai__title">宴会場</h3>
              <p class="restaurant-enkai__description">宴会の規模によって3種類の会場をご用意しております。また、会議など会場のみのご利用も承っております。お問い合わせください。<span>※宴会ご利用時には会場費は頂いておりません。</span></p>
              <table class="restaurant-enkai__table">
                <tr>
                  <th>半日利用</th>
                  <td>研修室の利用時間を午前9時〜午後5時までの間で4時間ご利用いただけます。</td>
                </tr>
                <tr>
                  <th>１日利用</th>
                  <td>研修室の利用時間を午前9時〜午後5時までの間で4時間以上ご利用いただけます。</td>
                </tr>
              </table>
              <ul class="restaurant-enkai__items">
                <li class="restaurant-enkai__item">
                  <div class="restaurant-enkai__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/enkai-img1.jpg" alt="宴会場なつめ">
                  </div>
                  <div class="restaurant-enkai__content">
                    <h4 class="restaurant-enkai__room">なつめ</h4>
                    <span class="restaurant-enkai__text">12名収容</span>
                  </div>
                  <div class="restaurant-enkai__rentals">
                    <div class="restaurant-enkai__rental">会場レンタル<br>料金</div>
                    <div class="restaurant-enkai__moneys">
                      <p class="restaurant-enkai__money">1日：5,500円</p>
                      <p class="restaurant-enkai__money">半日：3,500円</p>
                      <p class="restaurant-enkai__money">1時間：1,500円</p>
                    </div>
                  </div>
                </li>
                <li class="restaurant-enkai__item">
                  <div class="restaurant-enkai__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/enkai-img2.jpg" alt="宴会場かりん半">
                  </div>
                  <div class="restaurant-enkai__content">
                    <h4 class="restaurant-enkai__room">かりん半</h4>
                    <span class="restaurant-enkai__text">27名収容</span>
                  </div>
                  <div class="restaurant-enkai__rentals">
                    <div class="restaurant-enkai__rental">会場レンタル<br>料金</div>
                    <div class="restaurant-enkai__moneys">
                      <p class="restaurant-enkai__money">1日：5,500円</p>
                      <p class="restaurant-enkai__money">半日：3,500円</p>
                      <p class="restaurant-enkai__money">1時間：1,500円</p>
                    </div>
                  </div>
                </li>
                <li class="restaurant-enkai__item">
                  <div class="restaurant-enkai__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/enkai-img3.jpg" alt="宴会場かりん全">
                  </div>
                  <div class="restaurant-enkai__content">
                    <h4 class="restaurant-enkai__room">かりん全</h4>
                    <span class="restaurant-enkai__text">63名収容</span>
                  </div>
                  <div class="restaurant-enkai__rentals">
                    <div class="restaurant-enkai__rental">会場レンタル<br>料金</div>
                    <div class="restaurant-enkai__moneys">
                      <p class="restaurant-enkai__money">1日：7,500円</p>
                      <p class="restaurant-enkai__money">半日：4,500円</p>
                      <p class="restaurant-enkai__money">1時間：2,000円</p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="restaurant-enkai__foot">
                <span>※宴会ご利用時には会場費は頂いておりません。</span>
                <p class="restaurant-enkai__description">上記メニューは一例です。昼の通常営業時間と夜（17:00から21:00まで）、ご予約も承っておりまして、豊富なメニューの他、会席料理、法事会席等、最大63名様までの大小宴会をご予算に応じて承ります。
                  問合せフォームまたはお電話にておたずねください。</p>
              </div>
              <div class="restaurant-enkai__link">
                <a href="<?php echo $contact; ?>" class="restaurant-enkai__btn">お申し込み・お問い合わせ</a>
              </div>
              <div class="restaurant-enkai__contact">
                <a href="tel:0984-44-2210" class="restaurant-enkai__tel">0984-44-2210</a>
                <span>※電話は、営業時間内にお掛けください。また、状況により電話に出られない場合もございます。予めご了承ください。</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 関連スタッフブログ -->
      <?php get_template_part('parts/blog-connect'); ?>

<?php get_footer(); ?>