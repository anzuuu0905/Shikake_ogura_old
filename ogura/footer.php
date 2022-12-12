<?php
        global $home;
        global $facility;
        global $restaurant;
        global $shop;
        global $bathhouse;
        global $access;
        global $blogs;
        global $news;
        global $media;
        global $award;
        global $event;
        global $company;
        global $recruit;
        global $sitemap;
        global $privacypolicy;
        global $contact;
        ?>
        <?php if (!is_page('access') && !is_page('privacypolicy')) : ?>
          <section class="access access__block">
            <div class="access__inner inner">
              <div class="access__head">
                <div class="section__head">
                  <h2 class="section__title">アクセス情報</h2>
                  <span class="section__subtitle">Access Information</span>
                </div>
                <div class="access__btn">
                  <a class="btn-link__access" href="<?php echo $access; ?>">もっと見る</a>
                </div>
              </div>
              <div class="access__text">
                <p class="access__description">「のじりこぴあ」や「萩の茶屋」が有名な花街道、国道268号沿。75台収容の大駐車場を完備。宮崎交通のバス停もございます。</p>
                <span class="access__root">宮崎道高原ICより県道29、R268経由で約20分 ・宮崎空港よりお車にて約70分</span>
                <div class="access__info">
                  <p class="access__adress">宮崎県小林市野尻町三ケ野山4347-1</p>
                  <div class="access__flex">
                    <a href="tel:0984-44-2210" class="access__tel">0984-44-2210</a>
                    <a class="access__link" href="<?php echo $contact ?>">お問い合わせ</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="access__maparea">
            <iframe class="access__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321781.9511000005!2d130.8897005230243!3d31.974470077870958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f3857a01c1eeb%3A0x3c64e421f0886e2a!2z6YGT44Gu6aeF44KG772e44Gx44KL44Gu44GY44KK!5e0!3m2!1sja!2sjp!4v1669696167321!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- <iframe class="access__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d866527.41199627!2d131.07994661514894!3d31.964349981225006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f3857a01c1eeb%3A0x3c64e421f0886e2a!2z6YGT44Gu6aeF44KG772e44Gx44KL44Gu44GY44KK!5e0!3m2!1sja!2sjp!4v1656287670952!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>

          </section>
        <?php endif; ?>
        </main>
        </div>
        <footer class="footer footer__block grid__footer">
          <div class="pagetop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/page_top.png" alt="page top"></div>
          <nav class="footer__nav navi">
            <ul class="navi-large__items">
              <li class="navi-large__item"><a href="<?php echo $facility; ?>">施設のご案内</a></li>
              <li class="navi-large__item"><a href="<?php echo $restaurant; ?>">レストラン味彩</a></li>
              <li class="navi-large__item"><a href="<?php echo $shop; ?>">売店</a></li>
              <li class="navi-large__item"><a href="<?php echo $bathhouse; ?>">こばやしのじりの湯</a></li>
              <li class="navi-large__item navi-large__item--closed">宿泊（休業中／再開未定）</li>
              <li class="navi-large__item"><a href="<?php echo $access; ?>">アクセス情報</a></li>
              <li class="navi-large__item"><a href="<?php echo $blogs; ?>">スタッフブログ</a></li>
            </ul>
            <ul class="navi-small__items">
              <li class="navi-small__item"><a href="<?php echo $news; ?>">お知らせ</a></li>
              <li class="navi-small__item"><a href="<?php echo $event; ?>">イベント情報</a></li>
              <li class="navi-small__item"><a href="<?php echo $media; ?>">メディア掲載</a></li>
              <li class="navi-small__item"><a href="<?php echo $award; ?>">受賞実績</a></li>
              <li class="navi-small__item"><a href="<?php echo $company; ?>">運営会社</a></li>
              <li class="navi-small__item"><a href="<?php echo $recruit; ?>">採用情報</a></li>
              <li class="navi-small__item"><a href="<?php echo $privacypolicy; ?>">プライバシーポリシー</a></li>
              <li class="navi-small__item"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
            </ul>
          </nav>
          <div class="footer__inner inner">
            <div class="footer__left">
              <div class="footer__textbox">
                <p class="footer__description">国土交通省・「道の駅」の第17回（2001.8）登録にて<br class="u-desktop">宮崎県内10駅目</p>
                <h2 class="footer__logo">道の駅ゆ〜ぱるのじり</h2>
                <p class="footer__adress">〒886-0213<br>
                  宮崎県小林市野尻町三ケ野山4347-1</p>
                <a href="tel:0984-44-2210" class="footer__tel">TEL&#xFF1A;0984-44-2210</a>
                <span class="footer__tel">&ensp;FAX&#xFF1A;0984-44-2231</span>
                <p class="footer__holiday">定休日&#xFF1A;毎月第1水曜日<span class="footer__holiday--small">（当日祝日の場合は翌日）</span></p>
              </div>
              <div class="footer__info">
                <h3 class="footer__title">営業時間のご案内</h3>
                <table class="footer-time__wrap">
                  <tr class="footer-time__table">
                    <th>レストラン味彩</th>
                    <td><span class="footer-time__small"> 昼/</span>11:00 ~ 15:00<span class="footer-time__small">（L.O. 14:30）</span><br>
                      <span class="footer-time__small">夜/</span>団体様のみの御予約制<br>
                      <span class="footer-time__small">17:00~21:00（L.O. 20:30）</span><br>
                      <span class="footer-time__midium">※御宴会は、2時間（L.O. は1時間半）制</span>
                    </td>
                  </tr>
                  <tr class="footer-time__table">
                    <th>売店</th>
                    <td>08:00 ~ 18:00</td>
                  </tr>
                  <tr class="footer-time__table">
                    <th>こばやしのじりの湯</th>
                    <td>11:00 ~ 20:30 <span class="footer-time__small">（最終受付 20:00）</span> </td>
                  </tr>
                </table>
                <div class="footer-time__close">
                  宿泊(休業中/再開未定)
                </div>
              </div>
            </div>
            <div class="footer__right">
              <h3 id="calender" class="footer__title">営業日カレンダー</h3>
              <div class="top-info__description">
                <?php
                $page_obj = get_page_by_path('index');
                $page_id = $page_obj->ID;
                the_field('eigyo', $page_id);
                ?>
              </div>
              <div class="footer-calender__area">
                <!-- XO Event Calendar プラグイン -->
                <?php echo do_shortcode('[xo_event_calendar holidays="regular-holiday" navigation="false" months="2" id="fotter_calender"]'); ?>
              </div>

              <div class="footer-link__wrapper footer__links">
                <div class="footer__link1">
                  <?php
                  $page_obj = get_page_by_path('index');
                  // var_dump($page_obj);
                  $page_id = $page_obj->ID;
                  $cnt = 1;
                  ?>
                  <?php
                  while ($cnt <= 2) :
                    $fb_img_id = 'fb_0' . $cnt;
                    $fb_link_id = 'fb_0' . $cnt . '_link';
                    if (get_field($fb_img_id, $page_id)) :
                      $fb_link = get_field($fb_link_id, $page_id);
                      $fb_img = get_field($fb_img_id, $page_id);
                      $fb_wp_id = attachment_url_to_postid($fb_img);
                      $fb_wp_rec = get_post($fb_wp_id);
                      $fb_wp_discts = $fb_wp_rec->post_content;
                  ?>
                      <a href="<?php echo $fb_link; ?>" class="footer-link__item1" target="_blank" rel="noreferrer noopener">
                        <img src="<?php echo $fb_img; ?>" alt="<?php echo $fb_wp_discts; ?>">
                      </a>
                    <?php endif; ?>
                  <?php
                    $cnt += 1;
                  endwhile;
                  ?>
                </div>

                <div class="footer__link2">
                  <a href="https://www.city.kobayashi.lg.jp/" class="footer-link__item2" target="_blank" rel="noreferrer noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/banner-kobayashishi.jpg" alt="小林市ホームページ">
                  </a>
                  <a href="https://kobayashi-machi.com/" class="footer-link__item2" target="_blank" rel="noreferrer noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/banner-kankou.jpg" alt="まちづくり×観光 小林市の今と未来を支える。">
                  </a>
                  <a href="https://www.michi-no-eki.jp/" class="footer-link__item2" target="_blank" rel="noreferrer noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/banner-michinoeki1.jpg" alt="全国「道の駅」連絡会公式サイト">
                  </a>
                  <a href="http://qo-renrakukai.jp/" class="footer-link__item2" target="_blank" rel="noreferrer noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/banner-michinoeki2.jpg" alt="九州・沖縄道の駅連絡会。九州エリアの総合案内所">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-overview__wrapper">
            <ul class="footer-overview__links">
              <li><a href="<?php echo $home ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-yupalnojiri.png" alt="ゆ～ぱるのじり"></a></li>
              <li><a href="https://nojiri-kopia.com/" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-nojirikopia.png" alt="のじりこぴあ"></a></li>
            </ul>
            <div class="footer-overview__wrap">
              <div class="footer-overview__logo">
                <a href="<?php echo $company; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-hermecnojiri.png" alt="ハーメックのじり株式会社"></a>
              </div>
              <div class="footer-overview__adress">
                <p class="footer-overview__text">〒886-0212<br>
                  宮崎県 小林市 野尻町東麓5160</p>
              </div>
            </div>
            <div class="footer__copy">
              <small>Copyright &copy; 2022 Hermec Nojiri Co.,Ltd. All rights reserved.</small>
            </div>
          </div>
        </footer>

        <?php wp_footer(); ?>
        </body>

        </html>