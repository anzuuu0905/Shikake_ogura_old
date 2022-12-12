<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- 削除予定 -->
  <!-- <title>道の駅　ゆ〜ぱるのじり</title> -->
  <!-- 削除予定 -->

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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

  $home = esc_url(home_url('/'));
  $facility = esc_url(home_url('/facility/')); //施設のご案内
  $restaurant = esc_url(home_url('/restaurant/')); //レストラン味彩
  $shop = esc_url(home_url('/shop/')); //売店
  $bathhouse = esc_url(home_url('/bathhouse/')); //こばやしのじりの湯
  $access = esc_url(home_url('/access/')); //アクセス情報
  $blogs = esc_url(home_url('/blogs/')); //スタッフブログ
  $news = esc_url(home_url('/y-news/')); //お知らせ
  $event = esc_url(home_url('/y-event/')); //イベント情報
  $media = esc_url(home_url('/y-media/')); //メディア掲載
  $award = esc_url(home_url('/y-award/')); //受賞実績
  $company = esc_url(home_url('/company/')); //運営会社
  $recruit = esc_url(home_url('/recruit/')); //採用情報
  $sitemap = esc_url(home_url('/sitemap/')); //サイトマップ
  $privacypolicy = esc_url(home_url('/privacypolicy/')); //プライバシーポリシー
  $contact = esc_url(home_url('/contact/')); //お問い合わせ
  ?>
  <div class="grid__container">
    <header class="header header__block grid__header">
      <div class="header__inner">
        <h1 class="logo">
          <a href="<?php echo $home; ?>" class="logo__link">
            <picture>
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/header-logo_pc.svg" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/header-logo_sp.svg" alt="ゆ〜ぱるのじり">
            </picture>
          </a>
        </h1>
        <button class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- sp　ヘッダーナビ -->
        <div class="header__sp-nav sp-nav js-drawer-menu">
          <div class="sp-nav__items">
            <div class="sp-nav__content">
              <a href="<?php echo $home; ?>" class="sp-nav__item">TOP</a>
              <a href="<?php echo $facility; ?>" class="sp-nav__item">施設のご案内</a>
              <a href="<?php echo $restaurant; ?>" class="sp-nav__item">レストラン味彩 <span>-あじさい-</span></a>
              <a href="<?php echo $shop; ?>" class="sp-nav__item">売店</a>
              <a href="<?php echo $bathhouse; ?>" class="sp-nav__item">こばやしのじりの湯</a>
              <span class="sp-nav__item sp-nav__item--close">宿泊（休止中。再開未定）</span>
              <a href="<?php echo $access; ?>" class="sp-nav__item">アクセス情報</a>
              <a href="<?php echo $blogs; ?>" class="sp-nav__item">スタッフブログ</a>
            </div>
            <div class="sp-nav__subcontent">
              <a href="<?php echo $news; ?>" class="sp-nav__subitem">お知らせ</a>
              <a href="<?php echo $event; ?>" class="sp-nav__subitem">イベント情報</a>
              <a href="<?php echo $media; ?>" class="sp-nav__subitem">メディア掲載</a>
              <a href="<?php echo $award; ?>" class="sp-nav__subitem">受賞実績</a>
              <a href="<?php echo $company; ?>" class="sp-nav__subitem">運営会社</a>
              <a href="<?php echo $recruit; ?>" class="sp-nav__subitem">採用情報</a>
              <a href="<?php echo $sitemap; ?>" class="sp-nav__subitem">サイトマップ</a>
              <a href="<?php echo $privacypolicy; ?>" class="sp-nav__subitem">プライバシーポリシー</a>
              <a href="<?php echo $contact; ?>" class="sp-nav__subitem">お問い合わせ</a>
            </div>
          </div>
        </div>
        <!-- pc ヘッダーナビ -->
        <div class="header__pc-nav pc-nav">
          <div class="pc-nav__items">
            <div class="pc-nav__content">
              <a href="<?php echo $home; ?>" class="pc-nav__item <?php if (is_front_page()) : ?>pc-nav__item--orange <?php endif; ?>">TOP</a>
              <a href="<?php echo $facility; ?>" class="pc-nav__item <?php if (is_page('facility')) : ?>pc-nav__item--orange <?php endif; ?>">施設のご案内</a>
              <a href="<?php echo $restaurant; ?>" class="pc-nav__item <?php if (is_page('restaurant')) : ?>pc-nav__item--orange <?php endif; ?>">レストラン味彩 <small>-あじさい-</small></a>
              <a href="<?php echo $shop; ?>" class="pc-nav__item <?php if (is_page('shop')) : ?>pc-nav__item--orange <?php endif; ?>">売店</a>
              <a href="<?php echo $bathhouse; ?>" class="pc-nav__item <?php if (is_page('bathhouse')) : ?>pc-nav__item--orange <?php endif; ?>">こばやしのじりの湯</a>
              <span class="pc-nav__item pc-nav__item--close">宿泊（休止中。再開未定）</span>
              <a href="<?php echo $access; ?>" class="pc-nav__item <?php if (is_page('access')) : ?>pc-nav__item--orange <?php endif; ?>">アクセス情報</a>
              <a href="<?php echo $blogs; ?>" class="pc-nav__item <?php if (!is_front_page() && get_post_type() === 'post') : ?>pc-nav__item--orange <?php endif; ?>">スタッフブログ</a>
            </div>
            <div class="pc-nav__subcontent">
              <a href="<?php echo $news; ?>" class="pc-nav__subitem">お知らせ</a>
              <a href="<?php echo $event; ?>" class="pc-nav__subitem">イベント情報</a>
              <a href="<?php echo $media; ?>" class="pc-nav__subitem">メディア掲載</a>
              <a href="<?php echo $award; ?>" class="pc-nav__subitem">受賞実績</a>
              <a href="<?php echo $company; ?>" class="pc-nav__subitem">運営会社</a>
              <a href="<?php echo $recruit; ?>" class="pc-nav__subitem">採用情報</a>
              <a href="<?php echo $sitemap; ?>" class="pc-nav__subitem <?php if (is_page('sitemap')) : ?>pc-nav__item--orange <?php endif; ?>">サイトマップ</a>
              <a href="<?php echo $privacypolicy; ?>" class="pc-nav__subitem <?php if (is_page('privacypolicy')) : ?>pc-nav__item--orange <?php endif; ?>">プライバシーポリシー</a>
            </div>
            <div class="pc-nav__contact">
              <a href="<?php echo $contact; ?>" class="pc-nav__botton <?php if (is_page('contact')) : ?>pc-nav__item--orange <?php endif; ?>">お問い合わせ</a>
            </div>
          </div>
        </div>
      </div>
    </header>