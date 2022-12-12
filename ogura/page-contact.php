<?php get_header(); ?>

  <?php
    global $home;
    global $privacypolicy;
  ?>

  <main class="main grid__content">
      <section class="subpage-head__common">
        <div class="subpage-head__text">
          <h1 class="subpage__title">お問い合わせ</h1>
          <span class="subpage__subtitle">Contact Us</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      
      <section class="contact contact_block">
        <div class="contact__wrapper">
          <div class="inner contact__inner">
            <div class="contact-head__text">
              <p class="contact-head__description">当施設へのお問い合わせは、以下の入力フォームからお願いします。<br>
                慶事や法事のご予約も入力フォームもしくは、ページ下部の電話番号からご予約ください。<br>
                お問い合わせいただいた内容に関して、5営業日以内にメールにて返事いたします。<br>
                お急ぎに場合は、ページ下部の電話番号にお電話ください。</p>
              <p class="contact-head__annotation">※お問い合わせ内容によっては、お電話差し上げる場合もございます。
              </p>
            </div>
            <section class="contact-section__wrap">
              <h2 class="contact__title">WEBでのお問い合わせ</h2>
              <p class="contact__description">空欄を入力いただき、「確認する」ボタンをクリック（タップ）してください。「<span class="contact-form__mark">*</span>」印は入力必須項目です。
              </p>
              <div class="contact-form__inner">
                  <?php the_content(); ?>
              </div>
              <p class="contact-form__description">※「送信」ボタンをクリック（タップ）していただきますと、入力いただいたメールアドレス宛に自動返信メールを送信します。自動返信メールが届かない場合はご入力いただいたメールアドレスが間違っている場合がございますので、改めて「WEBでのお問い合わせ」からお問い合わせください。</p>
            </section>
            <section class="contact-section__wrap">
              <h2 class="contact__title">お電話でのお問い合わせ</h2>
              <p class="contact__description">営業時間内にお掛けください。また、状況により電話に出られない場合もございます。予めご了承ください。
              </p>
              <a href="tel:0984-44-2210" class="contact__tel">0984-44-2210</a>
              <ul class="contact-time__items">
                <li class="contact-time__item">
                  <p class="contact-time__title">レストラン</p>
                  <span class="contact-time__body">11:00〜15:00（ラストオーダー 14:30）</span>
                </li>
                <li class="contact-time__item">
                  <p class="contact-time__title">売店</p>
                  <span class="contact-time__body">8:00〜18:00</span>
                </li>
                <li class="contact-time__item">
                  <p class="contact-time__title">浴場</p>
                  <span class="contact-time__body">11:00〜20:30 （受付終了 20:00）</span>
                </li>
              </ul>
              <p class="contact-time__description">※定休日：毎月第1水曜日（当日祝日の場合は翌日）</p>
            </section>
          </div>
        </div>
    </section>

<?php get_footer(); ?>
