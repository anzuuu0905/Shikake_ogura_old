<?php get_header(); ?>
<?php
  global $home;
  global $sitemap;
?>
    <main class="main grid__content">
      <div class="inner notfound__inner">
        <div class="notfound-head__text">
          <h1 class="notfound-head__title">404</h1>
          <span class="notfound-head__subtitle">Page Not Found</span>
        </div>
        <div class="notfound__body">
          <h2 class="notfound__title">ページが見つかりません。</h2>
          <p class="notfound__text">サイトをご覧いただきありがとうございます。<br>
            申し訳ございませんが、お探しのページはURLの変更または削除などの理由で表示することができませんでした。<br>
            よろしければ下記ページからお探しください。</p>
        </div>
        <div class="notfound__links">
          <div class="notfound__link">
            <a href="<?php echo $home; ?>" class="notfound__btn">TOPへ戻る</a>
          </div>
          <div class="notfound__link">
            <a href="<?php echo $sitemap; ?>" class="notfound__btn">サイトマップ</a>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>