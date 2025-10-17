<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/common/css/reset.css">
  <link rel="stylesheet" href="/common/css/common.css">
  <title>404 NOT FOUND｜株式会社ランドコンピュータ</title>
  <meta name="description" content="株式会社ランドコンピュータの404ページを表示しています。">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <?php get_header(); 
  ?>
</head>

<body>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/header.php'); ?>
  <main>
    <section id="notfound">
      <h1>404<span class="pc_display">　</span><br class="sp_display">NOT FOUND</h1>
      <h2>お探しのページは<br class="sp_display">見つかりませんでした。</h2>
      <p>このページは削除されたか<br class="sp_display">URLが変更された可能性がございます。</p>
      <a href="/" class="common-btn">TOPページへ</a>
    </section>
    <img src="/common/img/notfound_left.png" alt="" class="left">
    <div class="right">
      <span class="right_img_wrap">
        <img src="/common/img/notfound_right.png" alt="" class="right_img">
      </span>
    </div>
  </main>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/footer.php'); ?>
  <?php get_footer(); 
  ?>
</body>

</html>