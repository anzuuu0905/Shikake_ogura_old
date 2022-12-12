<?php get_header(); ?>

      <main class="main grid__content">
      <section class="subpage-head__common">
        <div class="subpage-head__text">
          <h1 class="subpage__title">アクセス情報</h1>
          <span class="subpage__subtitle">Access Information</span>
        </div>
      </section>
      
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <section class="accesspage accesspage_block">
        <div class="inner accesspage__inner">
          <div class="accesspage__wrapper">
            <h2 class="accesspage__title">お車・バイクでお越しの場合</h2>
              <iframe class="accesspage__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321781.9511000005!2d130.8897005230243!3d31.974470077870958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f3857a01c1eeb%3A0x3c64e421f0886e2a!2z6YGT44Gu6aeF44KG772e44Gx44KL44Gu44GY44KK!5e0!3m2!1sja!2sjp!4v1669696167321!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="accesspage-body__wrap">
              <div class="accesspage-body__left">
                <p class="accesspage-body__text">・宮崎道高原ICより県道29、R268経由で約20分 </p>
                <p class="accesspage-body__text">・宮崎空港よりお車にて約70分</p>
                <p class="accesspage-body__annotaiton">※カーナビには「ゆ～ぱるのじり」と入力してください。 </p>
              </div>
              <div class="accesspage-body__right">
                <p class="accesspage-body__address">宮崎県小林市野尻町三ケ野山4347-1</p>
                <a href="tel:0984-44-2210" class="accesspage-body__tel">0984-44-2210</a>
              </div>
            </div>
            <div class="accesspage__contact">
            <a href="https://goo.gl/maps/W6ZoEyg8hQ952Aj16" class="accesspage__btn" target="_blank" rel="noreferrer noopener">Google マップで見る</a>
            </div>
            <div class="accesspage-parking__wrap">
              <h3 class="accesspage-content__title">駐車場のご案内</h3>
              <p class="accesspage-content__text">75台収容の大駐車場を完備</p>
            </div>
          </div>
          <div class="accesspage__wrapper">
            <h2 class="accesspage__title">公共交通機関でお越しの場合</h2>
            <div class="accesspage-__public">
              <h3 class="accesspage-content__title">宮崎交通（路線バス）</h3>
              <p class="accesspage-content__text">「ゆ～ぱるのじり前」バス停下車すぐ。出発・到着時刻と運賃をお調べいただけます。 <br>
                下のボタンをクリックしていただくと、NAVITIMEのサイトに移動します。</p>
              <table class="accesspage__table accesspage-table">
                <tr class="accesspage-table__item">
                  <th class="accesspage-table__head">JR宮崎駅から<span>高千穂口（西口）、西3乗り場</span></th>
                  <td class="accesspage-table__body"><a href="https://www.navitime.co.jp/bustransit/search?orvStationName=%E5%AE%AE%E5%B4%8E%E9%A7%85&amp;orvStationCode=00080560&amp;dnvStationName=%E3%82%86%E3%83%BC%E3%81%B1%E3%82%8B%E3%81%AE%E3%81%98%E3%82%8A%E5%89%8D#search-area" target="_blank" rel="noopener noreferrer">出発・到着時刻、<br class="u-mobile">運賃</a></td>
                </tr>
                <tr class="accesspage-table__item">
                  <th class="accesspage-table__head">JR小林駅から<span>北側出口、2番乗り場</span></th>
                  <td class="accesspage-table__body"><a href="https://www.navitime.co.jp/bustransit/search?orvStationName=%E5%B0%8F%E6%9E%97%E9%A7%85%28%E5%AE%AE%E5%B4%8E%E7%9C%8C%29&amp;orvStationCode=00384902&amp;dnvStationName=%E3%82%86%E3%83%BC%E3%81%B1%E3%82%8B%E3%81%AE%E3%81%98%E3%82%8A%E5%89%8D#search-area" target="_blank" rel="noopener noreferrer">出発・到着時刻、<br class="u-mobile">運賃</a></td>
                </tr>
                <tr class="accesspage-table__item">
                  <th class="accesspage-table__head">宮崎空港から<span>1番乗り場</span></th>
                  <td class="accesspage-table__body"><a href="https://www.navitime.co.jp/bustransit/search?orvStationName=%E5%AE%AE%E5%B4%8E%E7%A9%BA%E6%B8%AF&amp;orvStationCode=&amp;dnvStationName=%E3%82%86%E3%83%BC%E3%81%B1%E3%82%8B%E3%81%AE%E3%81%98%E3%82%8A%E5%89%8D#search-area" target="_blank" rel="noopener noreferrer">出発・到着時刻、<br class="u-mobile">運賃</a></td>
                </tr>
                <tr class="accesspage-table__item accesspage-table__item--bus">
                  <th class="accesspage-table__head">最寄りのバス停から<span>バス停を指定して検索していただけます</span></th>
                  <td class="accesspage-table__body"><a href="https://www.navitime.co.jp/bustransit/?dnvStationCode=00384974&amp;dnvStationName=%E3%82%86%E3%83%BC%E3%81%B1%E3%82%8B%E3%81%AE%E3%81%98%E3%82%8A%E5%89%8D&amp;from=busroute.result.dnv" target="_blank" rel="noopener noreferrer">出発・到着時刻、<br class="u-mobile">運賃</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>


<?php get_footer(); ?>