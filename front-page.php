<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/common/css/reset.css">
  <link rel="stylesheet" href="/common/css/common.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <link rel="stylesheet" href="/common/js/slick/slick.css">
  <link rel="stylesheet" href="/common/js/slick/slick-theme.css">
  <link rel="stylesheet" href="/css/top.css?20240610-1">
  <title>株式会社ランドコンピュータ</title>
  <meta name="description" content="株式会社ランドコンピュータの公式サイトです。高度なシステム構築力と最新技術でお客様とともに新たな価値を創造します。">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <?php get_header(); ?>
</head>

<body class="header-transparent">
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/header.php'); ?>
  <main>
    <section id="mv">
      <h1 class="mv__ttl">
        <picture>
          <source srcset="/img/mv_ttl_img.webp" media="(min-width: 768px)">
          <img src="/img/mv_ttl_img_sp.webp" alt="" class="mv__ttl_img" width="750" height="750">
        </picture>
        <span class="mv__ttl_txt_img">
          <picture>
            <source srcset="/img/mv_title.svg" media="(min-width: 768px)" width="300" height="26">
            <img src="/img/mv_title_sp.svg" alt="Support your IT challenge" width="438" height="161">
          </picture>
        </span>
        <span class="mv__ttl_txt">私たちは解決策を創造し続ける <br class="sp_display">あなたのITパートナーです。</span>
      </h1>
      <p class="person"><img src="/img/person.webp" alt="" width="500" height="1645"></p>
      <p class="left"><img src="/img/line_blue.png" alt="" width="817" height="149"></p>
      <p class="right">
        <span>
          <picture>
            <source srcset="/img/line_orange.png" media="(min-width: 768px)" width="1905" height="411">
            <img src="/img/line_orange_sp.png" alt="" width="750" height="209">
          </picture>
        </span>
      </p>
    </section>
    <section id="main_slider">
      <div class="splide main_slider__splide" aria-label="スライダー">
        <div class="splide__track main_slider__splide_track">
          <ul class="splide__list main_slider__splide_list">
            <li class="splide__slide main_slider__splide_slide">
              <img src="/img/mv_splide_slide_img01.webp" alt="" class="main_slider__splide_slide_img">
              <p class="main_slider__splide_slide_ttl">サステナビリティ</p>
              <p class="main_slider__splide_slide_txt">2030年のSDGsゴールに向け、<br>ESGを重視した企業経営を推進し、<br class="sp_display">新たな事業創出に取り組んでまいります。</p>
              <a href="/sustainability/" class="main_slider__splide_slide_btn common-btn">詳しく見る</a>
            </li>
            <li class="splide__slide main_slider__splide_slide">
              <img src="/img/mv_splide_slide_img03.webp" alt="" class="main_slider__splide_slide_img">
              <p class="main_slider__splide_slide_ttl">ランドコンピュータ<br class="sp_display">について</p>
              <p class="main_slider__splide_slide_txt">ランドコンピュータの強みや<br class="sp_display">大切にしている考え方をご案内します。</p>
              <a href="/aboutrand/" class="main_slider__splide_slide_btn common-btn">詳しく見る</a>
            </li>
            <li class="splide__slide main_slider__splide_slide">
              <img src="/img/mv_splide_slide_img02.webp" alt="" class="main_slider__splide_slide_img">
              <p class="main_slider__splide_slide_ttl">導入事例</p>
              <p class="main_slider__splide_slide_txt">あらゆる業種のお客様からの様々な<br class="sp_display">ご要望に合わせたソリューションの<br class="sp_display">導入支援はもちろん、<br>システム開発からカスタマイズまで<br class="sp_display">多数事例をご紹介。</p>
              <a href="/case/" class="main_slider__splide_slide_btn common-btn">詳しく見る</a>
            </li>
          </ul>
        </div>
        <div class="main_slider__splide_bar">
          <div class="main_slider__splide_bar_gauge"></div>
        </div>
      </div>
    </section>

    <section id="our_service">
      <div class="inner">
        <h2 class="flex common_ttl_a">
          <span class="common_ttl_a__ja">サービス･ソリューション</span>
          <span class="common_ttl_a__en">OUR SERVICE</span>
        </h2>
        <p class="common-txt">お客様のビジネスをワンストップで。<br class="sp_display">ビジネスを動かすITに、<br class="sp_display">スピード、品質、安全性を。</p>
        <div class="img">
          <picture>
            <source srcset="/img/our_service_img_sp.png" media="(max-width: 768px)">
            <img src="/img/our_service_img.png" alt="RAND">
          </picture>
          <ul class="link_list">
            <li><a href="/servicesolution/systemintegration.php">System<br>Integration</a></li>
            <li><a href="/servicesolution/infrasolution.php">INFRA<br>Solution</a></li>
            <li><a href="/servicesolution/packagebasedsi.php">Package base<br>SI & Service</a></li>
          </ul>
          <ul class="txt_list">
            <li>
              <p>システムインテグレーション</p>ビジネスの課題解決に向けた<br>システムをトータルに提供
            </li>
            <li>
              <p>インフラ<br class="sp_display">ソリューション</p>基盤となるハードウェア、<br class="sp_display">ネットワーク、<br>データベースなどを構築
            </li>
            <li>
              <p>パッケージベース<br class="sp_display">SI<span class="pc_display"> </span>&サービス</p>各種パッケージの導入支援<br>およびカスタマイズ<br class="sp_display">サービスを提供
            </li>
          </ul>
        </div><!--/img-->
        <!-- <div class="search">
          <h3 id="search-tablist-label">サービス･ソリューションを探す</h3>
          <ul class="tab-area" role="tablist" aria-labelledby="search-tablist-label">
            <li class="tab active"><button id="search-tab1" type="button" role="tab" aria-controls="search-tab-panel1">課題から探す</button></li>
            <li class="tab"><button id="search-tab2" type="button" role="tab" aria-controls="search-tab-panel2">業種から探す</button></li>
          </ul>
          <div class="panel-area">
            <div id="search-tab-panel1" class="panel active" role="tabpanel" aria-labelledby="search-tab1">
              <ul>
                <li><a href="#" class="common-btn">インターネット<br class="sp_display">セキュリティ強化</a></li>
                <li><a href="#" class="common-btn">職場環境の<br class="sp_display">健康管理･安全管理</a></li>
                <li><a href="#" class="common-btn">AI･クラウド環境の活用</a></li>
                <li><a href="#" class="common-btn">事業領域拡大</a></li>
                <li><a href="#" class="common-btn">AI･クラウド環境の活用</a></li>
                <li><a href="#" class="common-btn">事業領域拡大</a></li>
              </ul>
            </div>
            <div id="search-tab-panel2" class="panel" role="tabpanel" aria-labelledby="search-tab2">
              <ul>
                <li><a href="#" class="common-btn">インターネット<br class="sp_display">セキュリティ強化</a></li>
                <li><a href="#" class="common-btn">職場環境の<br class="sp_display">健康管理･安全管理</a></li>
                <li><a href="#" class="common-btn">AI･クラウド環境の活用</a></li>
                <li><a href="#" class="common-btn">事業領域拡大</a></li>
                <li><a href="#" class="common-btn">AI･クラウド環境の活用</a></li>
                <li><a href="#" class="common-btn">事業領域拡大</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div><!--/inner-->
    </section>

    <section id="recommend">
      <h2 class="flex common_ttl_a">
        <span class="common_ttl_a__ja">おすすめコンテンツ</span>
        <span class="common_ttl_a__en">PICK UP</span>
      </h2>

      <div class="pickup splide">
        <div class="inner pickup__inner splide__track pickup__track">
          <ul class="splide__list pickup__list">
            <li class="splide__slide pickup__slide">
              <a href="/salesforce/" class="pickup__slide_link">
                <img src="/img/slick_slide_01.webp" alt="" class="pickup__slide_img">
                <div class="pickup__slide_content">
                  <h3 class="pickup__slide_ttl"><span>Salesforce<sup>®</sup></span>特設サイト</h3>
                  <p class="pickup__slide_txt common-txt">情報を有効活用しビジネスを加速させるSalesforce<sup>®</sup>。<br>ランドコンピュータではSalesforce<sup>®</sup>認定コンサルタントによる導入支援を実施しています。</p>
                </div>
              </a>
            </li>
            <li class="splide__slide pickup__slide">
              <a href="/case/" class="pickup__slide_link">
                <img src="/img/slick_slide_02.webp" alt="" class="pickup__slide_img">
                <div class="pickup__slide_content">
                  <h3 class="pickup__slide_ttl">導入事例</h3>
                  <p class="pickup__slide_txt common-txt">あらゆる業種のお客様からの様々なご要望に合わせたソリューションの導入支援はもちろん、システム開発からカスタマイズまで多数事例をご紹介。</p>
                </div>
              </a>
            </li>
            <li class="splide__slide pickup__slide">
              <a href="/rand50th/" class="pickup__slide_link" target="_blank" rel="noopener">
                <img src="/img/slick_slide_03.webp" alt="50 R&D COMPUTER 50th Anniversary Since 1971 ランドコンピュータ 50年史" class="pickup__slide_img">
                <div class="pickup__slide_content">
                  <h3 class="pickup__slide_ttl">50thコンテンツ</h3>
                  <p class="pickup__slide_txt common-txt">ランドコンピュータは2023年に創立50周年を迎えました。<br>歩んできた50年の歴史を詳細な年表にし、次の50年に向けた未来のR&Dを掲げています。</p>
                </div>
              </a>
            </li>
          </ul>
        </div><!--/inner-->
        <div class="pickup__splide_bar">
          <div class="pickup__splide_bar_gauge"></div>
        </div>
      </div><!--/slider-->
    </section><!--/recommend-->

    <section id="links">
      <div class="inner links__inner">
        <ul class="index-page-links links__list flex">
          <li class="index-page-links__item index-page-links__item--quarter links__list_item">
            <a href="/corporate/" class="index-page-links__item_link links_item_link hover-box-shadow">
              <img src="/img/links_item_img01.webp" alt="" class="index-page-links__item_img links__list_item_img">
              <h4 class="index-page-links__item_ttl links__list_item_ttl">企業情報</h4>
            </a>
          </li>
          <li class="index-page-links__item index-page-links__item--quarter links__list_item">
            <a href="/ir/management/message.php" class="index-page-links__item_link links_item_link hover-box-shadow">
              <img src="/img/links_item_img02.webp" alt="" class="index-page-links__item_img links__list_item_img">
              <h4 class="index-page-links__item_ttl links__list_item_ttl">株主･投資家の皆さまへ</h4>
            </a>
          </li>
          <li class="index-page-links__item index-page-links__item--quarter links__list_item">
            <a href="/recruit/" class="index-page-links__item_link links_item_link hover-box-shadow" target="_blank" rel="noopener">
              <img src="/img/links_item_img03.webp" alt="" class="index-page-links__item_img links__list_item_img">
              <h4 class="index-page-links__item_ttl links__list_item_ttl">採用サイト</h4>
            </a>
          </li>
          <li class="index-page-links__item index-page-links__item--quarter links__list_item">
            <a href="/partner/" class="index-page-links__item_link links_item_link hover-box-shadow">
              <img src="/img/links_item_img04.webp" alt="" class="index-page-links__item_img links__list_item_img">
              <h4 class="index-page-links__item_ttl links__list_item_ttl">パートナー企業募集<br class="sp_display">について</h4>
            </a>
          </li>
        </ul>
        <div class="links__banner_area">
          <h3 class="links__banner_area_ttl">連結子会社</h3>
          <ul class="links__banner_area_list flex">
            <li class="links__banner_area_item">
              <a href="https://www.infree.co.jp/" class="links__banner_area_item_link" target="_blank" rel="noopener">
                <span class="links__banner_area_item_img_wrap">
                  <img src="/img/links_banner_area_item_img01.webp" alt="" class="links__banner_area_item_img">
                </span>
                <span class="links__banner_area_item_ttl">株式会社インフリー</span>
              </a>
            </li>
            <li class="links__banner_area_item">
              <a href="https://www.technigate.co.jp/" class="links__banner_area_item_link" target="_blank" rel="noopener">
                <span class="links__banner_area_item_img_wrap">
                  <img src="/img/links_banner_area_item_img02.webp" alt="" class="links__banner_area_item_img">
                </span>
                <span class="links__banner_area_item_ttl">株式会社テクニゲート</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="news">
      <div class="inner">
        <div class="flex">
          <h3 id="news-tablist-label">お知らせ<br><span>NEWS</span></h3>
          <div>
            <div class="tab_area_wrap">
              <ul class="tab-area" role="tablist" aria-labelledby="news-tablist-label">
                <li class="tab active" role="tab" id="news-tab1" aria-controls="news-tab-panel1" aria-selected="true">
                  <button type="button" class="common-btn">新着情報</button>
                </li>
                <li class="tab" role="tab" id="news-tab2" aria-controls="news-tab-panel2" aria-selected="false">
                  <button type="button" class="common-btn">プレス・更新</button>
                </li>
                <li class="tab" role="tab" id="news-tab3" aria-controls="news-tab-panel3" aria-selected="false">
                  <button type="button" class="common-btn">イベント・セミナー</button>
                </li>
                <li class="tab" role="tab" id="news-tab4" aria-controls="news-tab-panel4" aria-selected="false">
                  <button type="button" class="common-btn">IR情報</button>
                </li>
              </ul>

              <p class="go_list"><a href="/news/">一覧を見る</a></p>
            </div><!--/tab_area_wrap-->
            <div class="panel-area">
              <?php
              /*====================================================
              * カテゴリー名に基づいて投稿を取得し表示する関数
              * @param array $category_names カテゴリー名の配列
              * @param string $no_content_message コンテンツがない場合に表示するメッセージ
              *====================================================*/
              function display_recent_posts_by_categories($category_names) {
                // カテゴリー名をカンマで結合
                $category_names_string = implode(', ', $category_names);

                $args = array(
                  'post_status' => 'publish',
                  'posts_per_page' => 3,
                  'category_name' => $category_names_string,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) : ?>
                  <ul>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                      <li>
                        <?php
                        $link_url = get_field('file') ? get_field('file') : get_field('link_url');
                        $target = get_field('target');
                        $target_attr = ($target === '_blank') ? ' target="_blank" rel="noopener"' : '';
                        $terms = get_the_terms(get_the_ID(), 'category');
                        $term_name = ($terms && !is_wp_error($terms)) ? $terms[0]->name : '';
                        ?>
                        <?php if ($link_url) : ?>
                          <a href="<?php echo esc_url($link_url); ?>" <?php echo $target_attr; ?> class="content">
                            <div class="meta">
                              <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                              <span class="icon"><?php echo esc_html($term_name); ?></span>
                            </div>
                            <p><?php the_title(); ?></p>
                          </a>
                        <?php else : ?>
                          <div class="content">
                            <div class="meta">
                              <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                              <span class="icon"><?php echo esc_html($term_name); ?></span>
                            </div>
                            <p><?php the_title(); ?></p>
                          </div>
                        <?php endif; ?>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php
                  wp_reset_postdata();
                else :
                ?>
                  <p>No content found</p>
              <?php
                endif;
              }
              ?>
              <div class="panel active" id="news-tab-panel1" role="tabpanel" aria-labelledby="news-tab1">
                <?php
                display_recent_posts_by_categories([]);
                ?>
              </div><!--/panel-->

              <div class="panel" id="news-tab-panel2" role="tabpanel" aria-labelledby="news-tab2">
                <?php
                display_recent_posts_by_categories(['press', 'update']);
                ?>
              </div><!--/panel-->

              <div class="panel" id="news-tab-panel3" role="tabpanel" aria-labelledby="news-tab3">
                <?php
                display_recent_posts_by_categories(['event']);
                ?>
              </div><!--/panel-->

              <div class="panel" id="news-tab-panel4" role="tabpanel" aria-labelledby="news-tab4">
                <!-- E-IR Parts -->
                <div class="eir" data-area-name="area_top_030"></div>
                <script type="text/javascript" src="/ir/eir/eir_v5.js" charset="utf-8"></script>
                <script type="text/javascript">
                  scriptLoader.setSrc(eirPassCore + 'eir_common.js');
                  scriptLoader.load(
                    function() {
                      setParts('file_top_035');
                    }, showMaintenanceMessage);
                </script>
                <!-- /E-IR Parts -->
              </div><!--/panel-->
            </div><!--/panel-area-->
          </div>
        </div><!--/flex-->
      </div><!--/inner-->
    </section><!--/news-->


    <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/contact.php'); ?>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/footer.php'); ?>
  <script src="/js/top.js"></script>
  <?php get_footer(); ?>
</body>

</html>