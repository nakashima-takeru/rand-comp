<?php
$tags = get_the_terms(get_the_ID(), 'case_tag');
if ($tags && !is_wp_error($tags)) {
  foreach ($tags as $tag) {
    if ($tag->slug == 'salesforce') {
      $domain = $_SERVER['HTTP_HOST'];
      $sf_case_id = get_the_ID();
      $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'))  ? "https://" : "http://";
      wp_redirect($protocol . $domain . '/salesforce/case/detail.php?id=' . $sf_case_id);
      exit;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/common/css/reset.css">
  <link rel="stylesheet" href="/common/css/common.css">
  <link rel="stylesheet" href="/case/css/case.css">
  <title><?php the_title(); ?>｜導入事例｜株式会社ランドコンピュータ</title>
  <meta name="description" content="株式会社ランドコンピュータの導入事例「<?php the_title(); ?>」を掲載しています。">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <?php get_header(); ?>
</head>

<body>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/header.php'); ?>
  <main id="detail">
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
          <li class="breadcrumb__item"><a href="/case/" class="breadcrumb__item_link">導入事例</a></li>
          <li class="breadcrumb__item"><?php the_title(); ?></li>
        </ul>
      </div>
    </div>

    <div class="inner">

      <?php
      // 投稿があるかチェック
      if (have_posts()) :
      ?>
        <?php
        // 投稿のループ
        while (have_posts()) : the_post(); ?>
          <?php
          $terms = get_the_terms(get_the_ID(), 'case_category');
          $term_name = '';
          $term_slug = '';
          if ($terms && !is_wp_error($terms) && !empty($terms)) {
            $term = $terms[0];
            // 親カテゴリーがある場合は親カテゴリーを取得
            if ($term->parent != 0) {
              $parent_term = get_term($term->parent, 'case_category');
              $term_name = esc_html($parent_term->name);
              $term_slug = esc_html($parent_term->slug);
            } else {
              $term_name = esc_html($term->name);
              $term_slug = esc_html($term->slug);
            }
          }
          ?>
          <div class="content <?php echo $term_slug; ?>">
            <h2><span><?php echo $term_name; ?></span></h2>
            <?php
            $type = get_field('type');
            $business = get_field('business');
            ?>
            <h3><?php the_title(); ?><?php if ($type) : ?><br><span class="common-txt">業種：<?php echo get_field('type'); ?><?php endif; ?><span class="pc_display">　　</span><?php if ($business) : ?><br class="sp_display">業務：<?php echo get_field('business'); ?></span><?php endif; ?> </h3>
            <?php if (get_field('user_img_1')) : ?>
              <img src="<?php the_field('user_img_1'); ?>" alt="" class="logo_img">
            <?php endif; ?>
            <?php if (get_field('lead')) : ?>
              <h4><?php echo nl2br(get_field('lead')); ?></h4>
            <?php endif; ?>
            <?php if (get_field('task_ttl')) : ?>
              <h5><?php the_field('task_ttl'); ?></h5>
            <?php endif; ?>
            <?php if (get_field('task')) : ?>
              <p class="common-txt"><?php echo nl2br(get_field('task')); ?></p>
            <?php endif; ?>
            <?php if (get_field('answer_ttl')) : ?>
              <h5><?php the_field('answer_ttl'); ?></h5>
            <?php endif; ?>
            <?php if (get_field('answer_1')) : ?>
              <p class="common-txt"><?php echo nl2br(get_field('answer_1')); ?></p>
            <?php endif; ?>
            <?php if (get_field('answer_2_img')) : ?>
              <p>
                <img src="<?php the_field('answer_2_img'); ?>" alt="" class="img">
              </p>
            <?php endif; ?>
            <?php if (get_field('answer_3')) : ?>
              <p class="common-txt"><?php echo nl2br(get_field('answer_3')); ?></p>
            <?php endif; ?>

            <?php
            $improvements = [];
            for ($i = 1; $i <= 5; $i++) {
              $improvement = get_field('improvement_' . $i);
              if ($improvement) {
                $improvements[] = $improvement;
              }
            }
            if (!empty($improvements)) : ?>
              <h5>システム導入後の改善点</h5>
              <ul>
                <?php foreach ($improvements as $improvement) : ?>
                  <li class="common-txt">・<?php echo nl2br($improvement); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (get_field('free_area_1')) : ?>
              <?php echo get_field('free_area_1'); ?>
            <?php endif; ?>
          </div><!--/content-->

      <?php
        endwhile;
      else :
        echo '<p>No posts found.</p>';
      endif;
      ?>

      <p class="btn_return"><a href="/case/" class="common-btn">導入事例一覧に戻る</a></p>

    </div><!--/inner-->


    <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/contact.php'); ?>

  </main>
  <?php require($_SERVER["DOCUMENT_ROOT"] . '/common/inc/footer.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <?php get_footer(); ?>
</body>

</html>