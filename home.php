<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>エステテンプレート1 | ホーム</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.header -->
    <main id="main-contents">
      <section class="top-view">
        <div class="hero bg">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@pc.jpg" />
              </div>
            </div>
          </div>
          <div class="hero__text">
            <h2 class="clip-js1 skew">毎日でも<br>通いたくなる場所<br>
              RivRound</h2>
          </div>
          <div class="scrolldown">
            <span>scroll</span>
          </div>
        </div>
      </section>
      <!-- /.top-view -->
      <section class="p-first">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">FIRST</span>
            <span class="ja">初めての方へ</span>
          </h2>
          <div class="p-first__container">
            <div class="p-first__img">
              <ul>
                <li><img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/model_2@sp.jpg" alt=""></li>
                <li><img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/model_1@sp.jpg" alt=""></li>
              </ul>
            </div>
            <div class="p-first__txt appear up">
              <div class="p-first__desc item">
                <h3 class="c-txt-md">誰もが憧れる身体づくりを</h3>
                <p class="c-txt-sm">
                  一瞬だけではない長い人生を
                  健康的に、そして魅力的に生き抜く本質を見据えた
                  誠実なカラダづくり。<br>
                  美しいプロポーションは、心とカラダの健康があってこそ。<br>そして、一度手に入れた理想の肌とカラダを持続させること、このシンプルな原点と真剣に向き合うことから生まれたのが
                  RivRoundです。
                </p>
              </div>
              <div class="more-btn item">
                <a href=" <?php echo esc_url( home_url('/first')); ?>" class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">初めての方へ</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-first -->
      <section class="p-aicatch">
        <div class="p-aicatch__wrap">
          <div class="p-aicatch__img">
            <img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/este_1@pc.jpg" alt="">
          </div>
          <div class="c-container">
            <div class="p-aicatch__desc">
              <p class="c-txt-sm">もうエステ選びで後悔してほしくない<br>そんな想いからRivRoundは誕生しました。</p>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-staff -->
      <section class="p-concept">
        <div class="p-concept__wrap">
          <div class="p-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/este_2@sp.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">CONCEPT</span>
              <span class="ja">コンセプト</span>
            </h2>
            <div class="p-concept__wrap">
              <div class="p-concept__txt appear up">
                <div class="p-concept__desc item">
                  <p class="c-txt-sm">お客様ひとりひとりの体型、肌質に合わせたパーソナルな施術を心がけております。
                    【とにかく結果を出す、継続して通いやすい】というRivRoundのコンセプトがお客様にご好評頂いております。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-concept -->
      <section class="p-staff">
        <div class="p-staff__wrap appear up">
          <div class="p-staff__img cover-slide">
            <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/staff_1@pc.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">STAFF</span>
              <span class="ja">スタッフ紹介</span>
            </h2>
            <div class="p-staff__wrap">
              <div class="p-staff__txt">
                <div class="p-staff__desc item">
                  <p class="c-txt-sm">お肌は着替えの効かない一生付き合う宝物。
                    是非自分のお肌を知り、好きになり、上手に付き合い、一生の財産を手に入れてほしいと思います。
                  </p>
                </div>
                <div class="more-btn">
                  <a href=" <?php echo esc_url( home_url('/staff')); ?>" class="more-btn__link slide-bg animsition-link">
                    <span class="c-txt-sm">スタッフ紹介へ</span>
                    <span class="bg"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-staff -->
      <section class="p-price">
        <div class="p-price__flex">
          <div class="p-price__left">
            <div class="p-price__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_1@pc.jpg" alt="">
            </div>
            <div class="more-btn view-pc">
              <a href="/contact/contact.html" class="more-btn__link slide-bg animsition-link">
                <span class="c-txt-sm">メニュー詳細へ</span>
                <span class="bg"></span></a>
            </div>
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">PRICE</span>
              <span class="ja">料金案内</span>
            </h2>
            <div class="p-price__wrap">
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">痩身<span>Slimming</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000円~<span
                    class="tax">(税込)</span></dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">フェイシャル<span>Facial</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000円~<span
                    class="tax">(税込)</span>
                </dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">ヘッド<span>Head</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000円~<span
                    class="tax">(税込)</span>
                </dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">トリートメント<span>Treatment</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000円~<span
                    class="tax">(税込)</span>
                </dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">ボディケア・マッサージ<span>Body Care</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>12,000円~<span
                    class="tax">(税込)</span>
                </dd>
              </dl>
              <div class="more-btn view-sp">
                <a href=" <?php echo esc_url( home_url('/price')); ?>" class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">メニュー詳細へ</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-price -->
      <section class="p-access">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">ACCESS</span>
            <span class="ja">店舗案内</span>
          </h2>
          <div class="p-access__wrap appear up">
            <div class="p-access__img item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/bet.jpg
              " alt="">
            </div>
            <div class="p-access__txt item">
              <div class="p-access__desc">
                <p class="c-txt-sm">住所:福岡県福岡市博多区3-27-25-9F</p>
                <a href="tel:092-686-7954" class="tel">
                  <span class="c-txt-sm">電話番号:0120-123-456</span>
                </a>
                <p class="c-txt-sm">定休日:水曜日</p>
                <p class="c-txt-sm">平日:9:00~20:00</p>
                <p class="c-txt-sm">土日祝:9:00~19:00</p>
              </div>
              <div class="p-access__map item">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1634181349900!5m2!1sja!2sjp"
                  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="more-btn">
                <a target="_blank" href="https://goo.gl/maps/dtVSzDV7JT8DrTzo6"
                  class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">Google Map</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-access -->
      <section class="p-instagram">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">INSTAGRAM</span>
            <span class="ja">インスタグラム</span>
          </h2>
          <div class="p-instagram__img item">
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/face_1@pc.jpg" alt=""></a>
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/top_2@pc.jpg" alt=""></a>
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/towel_1@pc.jpg" alt=""></a>
          </div>
          <div class="p-instagram__desc item">
            <p class="c-txt-sm">インスタグラムはお客様のビフォーアフター等をアップしてますので是非一度ご覧下さい。</p>
          </div>
          <div class="more-btn item">
            <a target="_blank" href="https://www.instagram.com/?hl=ja" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">Follow Us</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.p-instagram -->
      <section class="p-voices">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">VOICES</span>
            <span class="ja">お客様の声</span>
          </h2>
          <ul>
            <li id="voice01" class="p-voices__item item">
              <div class="p-voices__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-woman.png" alt="">
              </div>
              <div class="p-voices__desc">
                <p class="name c-txt-sm">R.O様 / 42才 主婦女性</p>
                <p class="tit c-txt-sm">10年くらい前に戻った感じがします。<br></p>
                <p class="desc c-txt-sm">
                  当初の目的はダイエットでしたが、体重減と体脂肪低下に加えて、何よりの成果だと思うのは、肌質が変わりました。ついつい鏡をよく見るようになりました。<br>
                </p>
              </div>
            </li>
            <li id="voice02" class="p-voices__item item">
              <div class="p-voices__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-woman.png" alt="">
              </div>
              <div class="p-voices__desc">
                <p class="name c-txt-sm">A.I様 / 32才 会社員女性</p>
                <p class="tit c-txt-sm">キレイを実感できる喜びを感じています!<br></p>
                <p class="desc c-txt-sm">
                  久しぶりに会った友人が昔とあまり変わっていないので驚きでした。<br>その友人がエステに通っていると聞いて私も行ってみたくなりました何よりお肌のハリ・ツヤの違いには感動しました。
                </p>
              </div>
            </li>
          </ul>
          <div class="more-btn item">
            <a href=" <?php echo esc_url( home_url('/faq')); ?>" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">よくあるご質問へ</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.p-voices -->
      <section class="p-news">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">news</span>
            <span class="ja">お知らせ</span>
          </h2>
          <ul class="p-news__list item">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <a class="animsition-link" href="<?php the_permalink() ;?>">
                  <span class="p-news__date"><?php the_date(); ?></span>
                  <p class="p-news__content"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="readmore item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">
              <span>お知らせ一覧</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-news -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <!-- <script src="/scripts/vendor/pace.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/hero-slider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/simpleParallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>