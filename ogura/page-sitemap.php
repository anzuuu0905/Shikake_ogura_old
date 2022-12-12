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
    global $media;
    global $award;
    global $company;
    global $recruit;
    global $sitemap;
    global $privacypolicy;
    global $contact;
  ?>

  <main class="main grid__content">
      <section class="subpage-head__common">
        <div class="subpage-head__text">
          <h1 class="subpage__title">サイトマップ</h1>
          <span class="subpage__subtitle">Site Map</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <section class="sitemap sitemap_block">
        <div class="sitemap__wrapper">
          <div class="inner sitemap__inner">
            <ul class="sitemap__items">
              <li class="sitemap__item">
                <a href="<?php echo $facility; ?>">
                  <figure class="sitemap__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/sitemap_facility.jpg" alt="施設のご案内">
                  </figure>
                  <h2 class="sitemap__title">施設のご案内</h2>
                </a>
              </li>
              <li class="sitemap__item">
                <a href="<?php echo $restaurant; ?>">
                  <figure class="sitemap__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/sitemap_restaurant.jpg" alt="レストラン味彩">
                  </figure>
                  <h2 class="sitemap__title">レストラン味彩 <small>-あじさい-</small></h2>
                </a>
              </li>
              <li class="sitemap__item">
                <a href="<?php echo $shop; ?>">
                  <figure class="sitemap__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/sitemap_shop.jpg" alt="売店">
                  </figure>
                  <h2 class="sitemap__title">売店</h2>
                </a>
              </li>
              <li class="sitemap__item">
                <a href="<?php echo $bathhouse; ?>">
                  <figure class="sitemap__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/sitemap_bathhouse.jpg" alt="浴場">
                  </figure>
                  <h2 class="sitemap__title">浴場</h2>
                </a>
              </li>
              <li class="sitemap__item">
                <a href="<?php echo $blogs; ?>">
                  <figure class="sitemap__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/sitemap_blog.jpg" alt="スタッフブログ">
                  </figure>
                  <h2 class="sitemap__title">スタッフブログ</h2>
                </a>
              </li>
              <li class="sitemap__item">
                <a class="sitemap__link" href="<?php echo $news; ?>">お知らせ</a>
                <a class="sitemap__link" href="<?php echo $event; ?>">イベント情報</a>
                <a class="sitemap__link" href="<?php echo $media; ?>">メディア掲載</a>
                <a class="sitemap__link" href="<?php echo $award; ?>">受賞実績</a>
                <a class="sitemap__link" href="<?php echo $company; ?>">運営会社</a>
                <a class="sitemap__link" href="<?php echo $recruit; ?>">採用情報</a>
                <a class="sitemap__link" href="<?php echo $sitemap; ?>">サイトマップ</a>
                <a class="sitemap__link" href="<?php echo $privacypolicy; ?>">プライバシーポリシー</a>
              </li>
            </ul>
          </div>
        </div>
      </section>

<?php get_footer(); ?>