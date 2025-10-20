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
  <title>導入事例 一覧｜株式会社ランドコンピュータ</title>
  <meta name="description" content="株式会社ランドコンピュータのSalesforce<sup>®</sup>ソリューション特設サイトです。Salesforce<sup>®</sup>を活用したシステム開発、セミナー開催などを行っています。">
  <meta name="keywords" content="ランドコンピュータ,Salesforce<sup>®</sup>,クラウド,システムインテグレーター,SI,IT">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Salesforce®ソリューション｜株式会社ランドコンピュータ">
  <meta property="og:description" content="株式会社ランドコンピュータのSalesforce<sup>®</sup>ソリューション特設サイトです。Salesforce<sup>®</sup>を活用したシステム開発、セミナー開催などを行っています。">
  <meta property="og:url" content="https://www.rand.co.jp/salesforce/">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <link rel="stylesheet" href="/salesforce/common/css/reset.css">
  <link rel="stylesheet" href="/salesforce/common/css/layout.css">
  <link rel="stylesheet" href="/salesforce/case/css/case.css">
  <script src="/salesforce/common/js/jquery-3.6.0.min.js"></script>
  <script src="/salesforce/common/js/common.js"></script>
</head>

<body class="case-index second-index">
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/salesforce/common/inc/header.php"); ?>
  <main>
    <div class="breadcrumbs">
      <ul class="flex breadcrumbs__list">
        <li class="breadcrumbs__list-item"><a href="/salesforce/" class="breadcrumbs__list-item-link">HOME</a></li>
        <li class="breadcrumbs__list-item">導入事例 一覧</li>
      </ul>
    </div>
    <section class="mainvisual flex">
      <div class="inner mainvisual__inner flex">
        <h2 class="mainvisual__ttl">導入事例一覧</h2>
      </div>
    </section>
    <section class="pages">
      <div class="inner pages__inner">
        <h3 class="pages__ttl">導入事例一覧</h3>
        <ul class="pages-list">
          <?php
          $args = array(
            'post_type' => 'case',
            'tax_query' => array(
              array(
                'taxonomy' => 'case_category',
                'field' => 'term_id',
                'terms' => 38,
              ),
            ),
            'posts_per_page' => -1 // 必要に応じて表示する投稿数を調整してください
          );
          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
              get_template_part('template-parts/content-salesforce', get_post_format());
            endwhile;
            wp_reset_postdata(); // ループ後にクエリをリセット
          else :
            echo '投稿が見つかりませんでした。';
          endif;
          ?>

        </ul>
      </div>
    </section>
  </main>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/salesforce/common/inc/footer.php"); ?>
</body>

</html>