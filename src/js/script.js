jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });


  //ナビバートグル
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      // $('.js-drawer-menu').fadeOut();
      $('.js-drawer-menu').removeClass('is-open');
      $(this).removeClass('is-open');
    } else {
      // $('.js-drawer-menu').fadeIn();
      $('.js-drawer-menu').addClass('is-open');
      $(this).addClass('is-open');
    }
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    // headerサイズが大きいため0とする
    // let header = $('header').innerHeight();
    let header = 0;
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });

  //TOPページスライド
  var $slider5 = $('#js-slider-top');

  $slider5.slick({
    arrows: false, // 前・次のボタンを表示しない
    dots: true, // ドットナビゲーションを表示する
    appendDots: $('.dots-top'), // ドットナビゲーションの生成位置を変更
    fade: true, // スライド切り替えをフェード
    autoplay: false, //自動再生させない
    slidesToShow: 1, // 表示させるスライド数
    fade: true,
    speed: 2000,
  });

  /*--- プログレスバー設定 -----------------------*/
  var
    time = 2,
    $bar = $('.dots-top .slick-dots li.slick-active button'),
    isPause,
    tick,
    percentTime;

  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }

  function interval() {
    if (isPause === false) {
      percentTime += 0.5 / (time + 0.1);
      $bar = $('.dots-top .slick-dots li.slick-active button');
      $bar.css({
        width: percentTime + "%"
      });
      if (percentTime >= 100) {
        $slider5.slick('slickNext');
        startProgressbar();
      }
    }
  }

  function resetProgressbar() {
    $bar = $('.dots-top .slick-dots li.slick-active button');
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
  }
  startProgressbar();

  // カーソルが乗ったら止める
  $slider5.on({
    mouseenter: function () {
      isPause = true;
    },
    mouseleave: function () {
      isPause = false;
    }
  });

  // ドットがクリックされたら再発火(スライド切り替え前のイベント)
  $slider5.on('beforeChange', function (slick, currentSlide, nextSlide) {
    startProgressbar();
  });

  var wp_temp_uri = tmp_path.temp_uri;
  // 売店ページ　スライド
  $('.js-subpage__slick').slick({
    autoplay: true, //自動再生
    // slidesToShow: 1, // 表示させるスライド数
    // fade: true,
    autoplaySpeed: 2000, //自動再生のスピード
    speed: 1000, //スライドするスピード
    dots: true, //スライド下のドット
    infinite: true, //永久にループさせる
    prevArrow: '<img src="' + wp_temp_uri + '/assets/images/common/slick-arrow1.png" alt="" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="' + wp_temp_uri + '/assets/images/common/slick-arrow2.png" alt="" class="slide-arrow next-arrow">', 
  });


  //アコーディオンをクリックした時の動作
  $('.js-accordion__title').on('click', function () { //タイトル要素をクリックしたら
    var findElm = $(this).next(".js-accordion__box"); //直後のアコーディオンを行うエリアを取得し
    $(findElm).slideToggle(); //アコーディオンの上下動作

    if ($(this).hasClass('close')) { //タイトル要素にクラス名closeがあれば
      $(this).removeClass('close'); //クラス名を除去し
    } else { //それ以外は
      $(this).addClass('close'); //クラス名closeを付与
    }
  });

  //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
  $(window).on('load', function () {
    $('.accordion__area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
    $(".open").each(function (index, element) { //openクラスを取得
      var Title = $(element).children('.title'); //openクラスの子要素のtitleクラスを取得
      $(Title).addClass('close'); ///タイトルにクラス名closeを付与し
      var Box = $(element).children('.box'); //openクラスの子要素boxクラスを取得
      $(Box).slideDown(500); //アコーディオンを開く
    });
  });

  // レストランページ　スライド
  function sliderSetting() {
    var width = $(window).width();

    if (width <= 767) {
      $('.js-restaurant__slick').not('.slick-initialized').slick({
        autoplay: true, //自動再生
        autoplaySpeed: 3000, //自動再生のスピード
        speed: 1000, //スライドするスピード
        dots: true, //スライド下のドット
        infinite: true, //永久にループさせる
        prevArrow: '<img src="' + wp_temp_uri + '/assets/images/common/slick-arrow1.png" alt="" class="slide-arrow prev-arrow">',
        nextArrow: '<img src="' + wp_temp_uri + '/assets/images/common/slick-arrow2.png" alt="" class="slide-arrow next-arrow">',         
        centerMode: true,
        centerPadding: "15%"
      });
    } else {
      $('.js-restaurant__slick.slick-initialized').slick('unslick');
    }
  }

  sliderSetting();

  $(window).resize(function () {
    sliderSetting();
  });
});

// TOPへ戻るボタン
const pagetop_btn = document.querySelector(".pagetop");

// .pagetopをクリックしたら
pagetop_btn.addEventListener("click", scroll_top);

// ページ上部へスムーズに移動
function scroll_top() {
  window.scroll({
    top: 0,
    behavior: "smooth"
  });
}

// スクロールされたら表示
window.addEventListener("scroll", scroll_event);

function scroll_event() {
  if (window.pageYOffset > 100) {
    pagetop_btn.style.opacity = "1";
  } else if (window.pageYOffset < 100) {
    pagetop_btn.style.opacity = "0";
  }
}
