<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/common/css/reset.css">
  <link rel="stylesheet" href="/common/css/common.css">
  <link rel="stylesheet" href="/case/css/case.css">
  <title>導入事例｜株式会社ランドコンピュータ</title>
  <meta name="description" content="株式会社ランドコンピュータの導入事例を掲載しています。">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <?php get_header(); ?>
</head>

<body>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/header.php'); ?>
  <main>
    <section id="underlayer-mv">
      <div class="inner underlayer-mv__inner">
        <h1 class="underlayer-mv__ttl">導入事例</h1>
      </div>
      <p class="left"><img src="/common/img/title_left.png" alt=""></p>
      <p class="right"><span><img src="/common/img/title_right.png" alt=""></span></p>
    </section>
    <div class="breadcrumb">
      <div class="inner breadcrumb__inner">
        <ul class="breadcrumb__list flex">
          <li class="breadcrumb__item"><a href="/" class="breadcrumb__item_link">TOP</a></li>
          <li class="breadcrumb__item">導入事例</li>
        </ul>
      </div>
    </div>

    <?php get_template_part('template-parts/template', 'case'); ?>


    <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/contact.php'); ?>

  </main>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/footer.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <?php get_footer(); ?>
</body>

</html>