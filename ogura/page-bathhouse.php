<?php get_header(); ?>

<main class="main grid__content">
      <section class="bathhouse-head__wrap">
        <div class="bathhouse-head__text">
          <h1 class="bathhouse__title">こばやしのじりの湯</h1>
          <span class="bathhouse__subtitle">Kobayashi Nojiri no Yu</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="bathhouse bathhouse__block">
        <div class="inner bathhouse__inner">
          <div class="bathhouse__text">
            <p class="bathhouse__description">
              ジェットバス、遠赤外線サウナやマッサージ機などの施設が充実。<br>
              ぜひ「癒しの湯」でリラックスしてください。<br>
              <span>※当施設のお風呂は徹底して水質検査等を行っております。どうぞ安心してご利用ください。</span>
            </p>
          </div>

          <!-- スライダー -->
          <?php get_template_part('parts/subpage-slick'); ?>


          <div class="bathhouse-time__wrap">
            <h2 class="bathhouse-body__title">営業時間・入浴料</h2>
            <p class="bathhouse-time__text">11:00〜20:30<span>（受付終了20:00）</span> </p>
            <a class="bathhouse-time__link" href="#calender">定休日はこちら</a>
            <h3 class="bathhouse-body__subtitle">
              入浴料<span>（税込）</span>
            </h3>

            <table class="bathhouse__table bathhouse-price">
              <thead>
                <tr>
                  <th></th>
                  <th class="bathhouse-price__right">1回利用</th>
                  <th class="bathhouse-price__center">1日利用</th>
                  <th class="bathhouse-price__left">回数券（11枚綴り）</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="bathhouse-price__head">大人</th>
                  <td class="bathhouse-price__right">500円</td>
                  <td class="bathhouse-price__center">620円</td>
                  <td class="bathhouse-price__left">1回利用 5,000円<br class="bathhouse__br"> / 1日利用 6,200円</td>
                </tr>
                <tr>
                  <th class="bathhouse-price__head">小人<span>※</span></th>
                  <td class="bathhouse-price__right">300円</td>
                  <td class="bathhouse-price__center">410円</td>
                  <td class="bathhouse-price__left">1回利用 3,000円<br class="bathhouse__br"> / 1日利用 4,100円</td>
                </tr>
              </tbody>
            </table>
            <p class="bathhouse__annotation">※小人は3才から小学生までです。</p>



          </div>

          <div class="bathhouse-info__wrap">
            <h2 class="bathhouse-body__title">施設のご案内</h2>
            <div class="bathhouse-info__items">
              <div class="bathhouse-info__item">
                <div class="bathhouse-info__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/nojirinoyu-info1.jpg" alt="サウナ">
                </div>
                <div class="bathhouse-info__text">
                  <h3 class="bathhouse-info__title">サウナ</h3>
                  <p class="bathhouse-info__description">遠赤外線のドライサウナとミストサウナの２つのサウナ設備。水風呂もありますので、じっくりと汗をかいて「整う」ことができます。</p>
                </div>
              </div>
              <div class="bathhouse-info__item">
                <div class="bathhouse-info__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/nojirinoyu-info2.jpg" alt="マッサージチェア">
                </div>
                <div class="bathhouse-info__text">
                  <h3 class="bathhouse-info__title">マッサージチェア</h3>
                  <p class="bathhouse-info__description">お風呂上がりにマッサージはいかがでしょうか？</p>
                </div>
              </div>
              <div class="bathhouse-info__item">
                <div class="bathhouse-info__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/nojirinoyu-info3.jpg" alt="休憩室（あけび）">
                </div>
                <div class="bathhouse-info__text">
                  <h3 class="bathhouse-info__title">休憩室（あけび）</h3>
                  <p class="bathhouse-info__description">入浴された方は無料でご利用いただけます。お風呂上がりはゆっくりとおくつろぎください。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 関連スタッフブログ -->
      <?php get_template_part('parts/blog-connect'); ?>


<?php get_footer(); ?>