<?php
require($_SERVER["DOCUMENT_ROOT"] . '/wp/wp-load.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ニュースリリース｜株式会社ランドコンピュータ</title>
  <meta name="description" content="株式会社ランドコンピュータのSalesforceソリューション特設サイトです。Salesforce<sup>®</sup>を活用したシステム開発、セミナー開催などを行っています。">
  <meta name="keywords" content="ランドコンピュータ,Salesforce,クラウド,システムインテグレーター,SI,IT">
  <meta property="og:type" content="website">
  <meta property="og:title" content="ニュースリリース｜株式会社ランドコンピュータ">
  <meta property="og:description" content="株式会社ランドコンピュータのSalesforceソリューション特設サイトです。Salesforce<sup>®</sup>を活用したシステム開発、セミナー開催などを行っています。">
  <meta property="og:url" content="https://www.rand.co.jp/salesforce/">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <link rel="stylesheet" href="/salesforce/common/css/reset.css">
  <link rel="stylesheet" href="/salesforce/common/css/scroll-hint.css">
  <link rel="stylesheet" href="/salesforce/common/css/layout.css">
  <link rel="stylesheet" href="/salesforce/news/css/news.css">
  <script src="/salesforce/common/js/jquery-3.6.0.min.js"></script>
  <script src="/salesforce/common/js/scroll-hint.min.js"></script>
  <script src="/salesforce/common/js/common.js"></script>
</head>
<body class="news-index second-index">
  <?php include($_SERVER["DOCUMENT_ROOT"]."/salesforce/common/inc/header.php"); ?>
  <main>
    <div class="breadcrumbs">
      <ul class="flex breadcrumbs__list">
        <li class="breadcrumbs__list-item"><a href="/salesforce/" class="breadcrumbs__list-item-link">HOME</a></li>
        <li class="breadcrumbs__list-item">ニュースリリース</li>
      </ul>
    </div>
    <section class="mainvisual flex">
      <div class="inner mainvisual__inner flex">
        <h2 class="mainvisual__ttl">ニュースリリース</h2>
      </div>
    </section>
    <section class="pages">
      <div class="inner pages__inner news__inner">
        <h3 class="pages__ttl">ニュースリリース一覧</h3>
        <ul class="news-list">
        <?php
          $args = array(
          'post_type' => 'post',
          'meta_key' => 'flg_sf',
          'meta_value' => '1',
          'posts_per_page' => '-1',//暫定処理 2016.10.31
          );
          query_posts( $args );
          if (have_posts()) : while (have_posts()) : the_post();
          get_template_part( 'template-parts/content-salesforce-news', get_post_format() );
          endwhile; endif;
        ?>
        </ul>
      </div>
    </section>
  </main>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/salesforce/common/inc/footer.php"); ?>
</body>
</html>