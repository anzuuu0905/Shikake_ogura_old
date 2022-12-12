<?php get_header(); ?>

<?php
  global $home;
  global $contact;
?>

<main class="main grid__content">
  <section class="subpage-head__common">
    <div class="subpage-head__text">
      <h1 class="subpage__title">運営会社</h1>
      <span class="subpage__subtitle">Company</span>
    </div>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <section class="company company_block">
    <div class="company__wrapper">
      <div class="inner company__inner">
        <h2 class="company__title">会社概要</h2>
        <table class="company-table company__tables">
          <tr class="company-table__item">
            <th class="company-table__head">社名</th>
            <td class="company-table__body">ハーメックのじり株式会社</td>
          </tr>
          <tr class="company-table__item">
            <th class="company-table__head">所在地</th>
            <td class="company-table__body">〒886-0212<br>
              &emsp;宮崎県小林市野尻町東麓5160番地<br>
              &emsp;<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/tel-icon.png" alt="電話" class="company-table__icon"><a href="tel:0984-44-2210" class="company-table__tel">0984-44-2210</a></td>
          </tr>
          <tr class="company-table__item">
            <th class="company-table__head">設立</th>
            <td class="company-table__body">1998年8月</td>
          </tr>
          <tr class="company-table__item">
            <th class="company-table__head">代表者</th>
            <td class="company-table__body">代表取締役&emsp;金山 宏樹</td>
          </tr>

          <tr class="company-table__item">
            <th class="company-table__head">事業内容</th>
            <td class="company-table__body">
            <a rel="noreferrer noopener" href="<?php echo $home; ?>">道の駅ゆ～ぱるのじり</a>、
              <a rel="noreferrer noopener" href="https://nojiri-kopia.com/" target="_blank">のじりこぴあ</a>の運営
            </td>
          </tr>
        </table>
        <div class="company__contact">
          <a href="<?php echo $contact; ?>" class="company__botton">お問い合わせ</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>