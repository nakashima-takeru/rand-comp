<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/common/css/reset.css">
  <link rel="stylesheet" href="/common/css/common.css">
  <link rel="stylesheet" href="/news/css/news.css">
  <title><?php echo get_query_var('year'); ?>｜ニュースリリース｜株式会社ランドコンピュータ</title>
  <meta name="description" content="">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <?php get_header(); ?>
</head>

<body>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/header.php'); ?>
  <main>
    <section id="underlayer-mv">
      <div class="inner underlayer-mv__inner">
        <h1 class="underlayer-mv__ttl">ニュースリリース</h1>
      </div>
      <p class="left"><img src="/common/img/title_left.png" alt=""></p>
      <p class="right"><span><img src="/common/img/title_right.png" alt=""></span></p>
    </section>
    <div class="breadcrumb">
      <div class="inner breadcrumb__inner">
        <ul class="breadcrumb__list flex">
          <li class="breadcrumb__item"><a href="/" class="breadcrumb__item_link">TOP</a></li>
          <li class="breadcrumb__item"><a href="/news/" class="breadcrumb__item_link">ニュースリリース</a></li>
          <li class="breadcrumb__item"><?php echo get_query_var('year'); ?></li>
        </ul>
      </div>
    </div>

    <?php get_template_part('template-parts/template', 'news'); ?>

  </main>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/footer.php'); ?>
  <?php get_footer(); ?>
</body>

</html>