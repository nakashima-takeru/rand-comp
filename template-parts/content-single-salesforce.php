<!DOCTYPE html>
<html lang="ja">

<head>
  <?php wp_head(); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/gtm_head.php'); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://www.rand.co.jp/common/img/ogp.png">
  <link rel="stylesheet" href="/salesforce/common/css/reset.css">
  <link rel="stylesheet" href="/salesforce/common/css/layout.css">
  <link rel="stylesheet" href="/salesforce/case/css/case.css">
  <script src="/salesforce/common/js/jquery-3.6.0.min.js"></script>
  <script src="/salesforce/common/js/common.js"></script>
</head>

<body class="case-detail <?php echo get_post_field('post_name', get_the_ID()); ?>">
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/salesforce/common/inc/header.php"); ?>
  <main>
    <div class="breadcrumbs">
      <ul class="flex breadcrumbs__list">
        <li class="breadcrumbs__list-item"><a href="/salesforce/" class="breadcrumbs__list-item-link">HOME</a></li>
        <li class="breadcrumbs__list-item"><a href="/salesforce/case/" class="breadcrumbs__list-item-link">導入事例 一覧</a></li>
        <li class="breadcrumbs__list-item"><?php the_title(); ?></li>
      </ul>
    </div>
    <section class="mainvisual">
      <div class="inner mainvisual__inner flex">
        <div class="mainvisual__left">
          <h2 class="flex mainvisual__ttl">
            <?php if (get_field('user_img_1')) { ?>
              <img src="<?php the_field('user_img_1'); ?>" alt="" class="mainvisual__logo">
            <?php } ?>
            <?php
            $company_name_font_size = get_field('company_name_font_size');
            $company_name_font_size_mobile = $company_name_font_size * 0.17307692;
            ?>
            <style>
              .mainvisual__name {
                font-size: <?php echo $company_name_font_size; ?>px;
              }

              @media screen and (max-width: 767px) {
                .mainvisual__name {
                  font-size: <?php echo $company_name_font_size_mobile; ?>vw;
                }
              }
            </style>
            <span class="mainvisual__name"><?php the_title(); ?></span>
          </h2>
          <ul class="mainvisual__desc">
            <?php if (get_field('type')) { ?>
              <li class="mainvisual__desc-item">
                <h3 class="mainvisual__desc-item-ttl">業種</h3>
                <p class="mainvisual__desc-item-txt"><?php the_field('type'); ?></p>
              </li>
            <?php } ?>
            <?php if (get_field('business')) { ?>
              <li class="mainvisual__desc-item">
                <h3 class="mainvisual__desc-item-ttl">業務</h3>
                <p class="mainvisual__desc-item-txt"><?php the_field('business'); ?></p>
              </li>
            <?php } ?>
          </ul>
        </div>
        <?php if (get_field('mainvisual')) { ?>
          <img src="<?php the_field('mainvisual'); ?>" alt="<?php the_title(); ?>" class="mainvisual__img" width="609" height="390">
        <?php } ?>
      </div>
    </section>

    <section class="case-detail-content">
      <?php if (get_field('movie_ttl')) { ?>
        <section class="case-detail-content__item">
          <div class="inner">
            <h2 class="case-detail-content__item-ttl"><?php the_field('movie_ttl'); ?></h2>
            <div class="case-detail-content__item-block">
              <?php if (get_field('movie_movie')) { ?>
                <div class="case-detail-content__item-block-part">
                  <video src="<?php the_field('movie_movie'); ?><?php if (get_field('movie_start_second')) { ?>#t=<?php the_field('movie_start_second');
                                                                                                                }  ?>" width="100%" type="video/mp4" controls></video>
                  </figure>
                </div>
              <?php } ?>
            </div>
          </div>
        </section>
      <?php } ?>
    </section>

    <section class="summary">
      <div class="inner summary__inner">
        <div class="summary__top flex">
          <h2 class="summary__ttl">事例概要</h2>
          <p class="summary__top-txt"><?php the_field('lead'); ?></p>
        </div>
        <ul class="flex summary__bottom">
          <li class="summary__bottom-item">
            <h3 class="summary__bottom-item-ttl">課題</h3>
            <ul class="summary__bottom-list">
              <?php if (get_field('summary_task1')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_task1'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_task2')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_task2'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_task3')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_task3'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_task4')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_task4'); ?></li>
              <?php } ?>
            </ul>
          </li>
          <li class="summary__bottom-item">
            <h3 class="summary__bottom-item-ttl">解決策</h3>
            <ul class="summary__bottom-list">
              <?php if (get_field('summary_solution1')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_solution1'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_solution2')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_solution2'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_solution3')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_solution3'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_solution4')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_solution4'); ?></li>
              <?php } ?>
            </ul>
          </li>
          <li class="summary__bottom-item">
            <h3 class="summary__bottom-item-ttl">効果</h3>
            <ul class="summary__bottom-list">
              <?php if (get_field('summary_effect1')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_effect1'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_effect2')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_effect2'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_effect3')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_effect3'); ?></li>
              <?php } ?>
              <?php if (get_field('summary_effect4')) { ?>
                <li class="summary__bottom-list-item"><?php the_field('summary_effect4'); ?></li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
    </section>

    <section class="case-detail-content">
      <section class="background-problem case-detail-content__item">
        <div class="inner">
          <?php if (get_field('task_ttl')) { ?>
            <h2 class="case-detail-content__item-ttl"><?php the_field('task_ttl'); ?></h2>
          <?php } ?>
          <div class="case-detail-content__item-block">
            <?php if (get_field('task_middle_ttl')) { ?>
              <h3 class="case-detail-content__item-block-ttl"><?php the_field('task_middle_ttl'); ?></h3>
            <?php } ?>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task_small_ttl')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task_small_ttl'); ?></h4>
              <?php } ?>
              <?php if (get_field('task')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task_small_ttl_2')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task_small_ttl_2'); ?></h4>
              <?php } ?>
              <?php if (get_field('task_txt_2')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task_txt_2'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task_small_ttl_3')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task_small_ttl_3'); ?></h4>
              <?php } ?>
              <?php if (get_field('task_txt_3')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task_txt_3'); ?></p>
              <?php } ?>
            </div>
            <?php if (get_field('task_img')) { ?>
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('task_img'); ?>" alt="" class="case-detail-content__figure-img">
                  <?php if (get_field('task_img_caption')) { ?>
                    <figcaption class="case-detail-content__figure-figcaption"><?php the_field('task_img_caption'); ?></figcaption>
                  <?php } ?>
                </figure>
              </div>
            <?php } ?>
            <?php if (get_field('task_txt2')) { ?>
              <div class="case-detail-content__item-block-part">
                <p class="case-detail-content__txt"><?php the_field('task_txt2'); ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="case-detail-content__item-block">
            <?php if (get_field('task2_middle_ttl')) { ?>
              <h3 class="case-detail-content__item-block-ttl"><?php the_field('task2_middle_ttl'); ?></h3>
            <?php } ?>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task2_small_ttl')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task2_small_ttl'); ?></h4>
              <?php } ?>
              <?php if (get_field('task2_txt')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task2_txt'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task2_small_ttl_2')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task2_small_ttl_2'); ?></h4>
              <?php } ?>
              <?php if (get_field('task2_txt_2')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task2_txt_2'); ?></p>
              <?php } ?>
            </div>
            <?php if (get_field('task2_img')) { ?>
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('task2_img'); ?>" alt="" class="case-detail-content__figure-img">
                  <?php if (get_field('task2_img_caption')) { ?>
                    <figcaption class="case-detail-content__figure-figcaption"><?php the_field('task2_img_caption'); ?></figcaption>
                  <?php } ?>
                </figure>
              </div>
            <?php } ?>
            <?php if (get_field('task2_txt2')) { ?>
              <div class="case-detail-content__item-block-part">
                <p class="case-detail-content__txt"><?php the_field('task2_txt2'); ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="case-detail-content__item-block">
            <?php if (get_field('task3_middle_ttl')) { ?>
              <h3 class="case-detail-content__item-block-ttl"><?php the_field('task3_middle_ttl'); ?></h3>
            <?php } ?>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task3_small_ttl')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task3_small_ttl'); ?></h4>
              <?php } ?>
              <?php if (get_field('task3_txt')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task3_txt'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('task3_small_ttl_2')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('task3_small_ttl_2'); ?></h4>
              <?php } ?>
              <?php if (get_field('task3_txt_2')) { ?>
                <p class="case-detail-content__txt"><?php the_field('task3_txt_2'); ?></p>
              <?php } ?>
            </div>
            <?php if (get_field('task3_img')) { ?>
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('task3_img'); ?>" alt="" class="case-detail-content__figure-img">
                  <?php if (get_field('task3_img_caption')) { ?>
                    <figcaption class="case-detail-content__figure-figcaption"><?php the_field('task3_img_caption'); ?></figcaption>
                  <?php } ?>
                </figure>
              </div>
            <?php } ?>
            <?php if (get_field('task3_txt2')) { ?>
              <div class="case-detail-content__item-block-part">
                <p class="case-detail-content__txt"><?php the_field('task3_txt2'); ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="solution case-detail-content__item">
        <div class="inner">
          <?php if (get_field('answer_ttl')) { ?>
            <h2 class="case-detail-content__item-ttl"><?php the_field('answer_ttl'); ?></h2>
          <?php } ?>
          <div class="case-detail-content__item-block">
            <?php if (get_field('answer_middle_ttl')) { ?>
              <h3 class="case-detail-content__item-block-ttl"><?php the_field('answer_middle_ttl'); ?></h3>
            <?php } ?>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('answer_small_ttl')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('answer_small_ttl'); ?></h4>
              <?php } ?>
              <?php if (get_field('answer_1')) { ?>
                <p class="case-detail-content__txt"><?php the_field('answer_1'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('answer_small_ttl_2')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('answer_small_ttl_2'); ?></h4>
              <?php } ?>
              <?php if (get_field('answer_txt_2')) { ?>
                <p class="case-detail-content__txt"><?php the_field('answer_txt_2'); ?></p>
              <?php } ?>
            </div>
            <?php if (get_field('answer_2_img')) { ?>
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('answer_2_img'); ?>" alt="" class="case-detail-content__figure-img">
                  <?php if (get_field('answer_img_caption')) { ?>
                    <figcaption class="case-detail-content__figure-figcaption"><?php the_field('answer_img_caption'); ?></figcaption>
                  <?php } ?>
                </figure>
              </div>
            <?php } ?>
            <?php if (get_field('answer_3')) { ?>
              <div class="case-detail-content__item-block-part">
                <p class="case-detail-content__txt"><?php the_field('answer_3'); ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="case-detail-content__item-block">
            <?php if (get_field('answer2_middle_ttl')) { ?>
              <h3 class="case-detail-content__item-block-ttl"><?php the_field('answer2_middle_ttl'); ?></h3>
            <?php } ?>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('answer2_small_ttl')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('answer2_small_ttl'); ?></h4>
              <?php } ?>
              <?php if (get_field('answer2_txt')) { ?>
                <p class="case-detail-content__txt"><?php the_field('answer2_txt'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('answer2_small_ttl_2')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('answer2_small_ttl_2'); ?></h4>
              <?php } ?>
              <?php if (get_field('answer2_txt_2')) { ?>
                <p class="case-detail-content__txt"><?php the_field('answer2_txt_2'); ?></p>
              <?php } ?>
            </div>
            <?php if (get_field('answer2_img')) { ?>
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('answer2_img'); ?>" alt="" class="case-detail-content__figure-img">
                  <?php if (get_field('answer2_img_caption')) { ?>
                    <figcaption class="case-detail-content__figure-figcaption"><?php the_field('answer2_img_caption'); ?></figcaption>
                  <?php } ?>
                </figure>
              </div>
            <?php } ?>
            <?php if (get_field('answer2_txt2')) { ?>
              <div class="case-detail-content__item-block-part">
                <p class="case-detail-content__txt"><?php the_field('answer2_txt2'); ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="case-detail-content__item-block">
            <?php if (get_field('answer3_middle_ttl')) { ?>
              <h3 class="case-detail-content__item-block-ttl"><?php the_field('answer3_middle_ttl'); ?></h3>
            <?php } ?>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('answer3_small_ttl')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('answer3_small_ttl'); ?></h4>
              <?php } ?>
              <?php if (get_field('answer3_txt')) { ?>
                <p class="case-detail-content__txt"><?php the_field('answer3_txt'); ?></p>
              <?php } ?>
            </div>
            <div class="case-detail-content__item-block-part">
              <?php if (get_field('answer3_small_ttl_2')) { ?>
                <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('answer3_small_ttl_2'); ?></h4>
              <?php } ?>
              <?php if (get_field('answer3_txt_2')) { ?>
                <p class="case-detail-content__txt"><?php the_field('answer3_txt_2'); ?></p>
              <?php } ?>
            </div>
            <?php if (get_field('answer3_img')) { ?>
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('answer3_img'); ?>" alt="" class="case-detail-content__figure-img">
                  <?php if (get_field('answer3_img_caption')) { ?>
                    <figcaption class="case-detail-content__figure-figcaption"><?php the_field('answer3_img_caption'); ?></figcaption>
                  <?php } ?>
                </figure>
              </div>
            <?php } ?>
            <?php if (get_field('answer3_txt2')) { ?>
              <div class="case-detail-content__item-block-part">
                <p class="case-detail-content__txt"><?php the_field('answer3_txt2'); ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="improvement case-detail-content__item">
        <div class="inner">
          <?php if (get_field('improvement_ttl')) { ?>
            <h2 class="case-detail-content__item-ttl"><?php the_field('improvement_ttl'); ?></h2>
          <?php } ?>
          <?php if (get_field('improvement_1')) { ?>
            <div class="case-detail-content__item-block">
              <?php if (get_field('improvement1_middle_ttl')) { ?>
                <h3 class="case-detail-content__item-block-ttl"><?php the_field('improvement1_middle_ttl'); ?></h3>
              <?php } ?>
              <div class="case-detail-content__item-block-part">
                <?php if (get_field('improvement1_small_ttl')) { ?>
                  <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('improvement1_small_ttl'); ?></h4>
                <?php } ?>
                <p class="case-detail-content__txt"><?php the_field('improvement_1'); ?></p>
              </div>
            </div>
          <?php } ?>
          <?php if (get_field('improvement_2')) { ?>
            <div class="case-detail-content__item-block">
              <div class="case-detail-content__item-block">
                <?php if (get_field('improvement2_middle_ttl')) { ?>
                  <h3 class="case-detail-content__item-block-ttl"><?php the_field('improvement2_middle_ttl'); ?></h3>
                <?php } ?>
                <div class="case-detail-content__item-block-part">
                  <?php if (get_field('improvement2_small_ttl')) { ?>
                    <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('improvement2_small_ttl'); ?></h4>
                  <?php } ?>
                  <p class="case-detail-content__txt"><?php the_field('improvement_2'); ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if (get_field('improvement_3')) { ?>
            <div class="case-detail-content__item-block">
              <div class="case-detail-content__item-block">
                <?php if (get_field('improvement3_middle_ttl')) { ?>
                  <h3 class="case-detail-content__item-block-ttl"><?php the_field('improvement3_middle_ttl'); ?></h3>
                <?php } ?>
                <div class="case-detail-content__item-block-part">
                  <?php if (get_field('improvement3_small_ttl')) { ?>
                    <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('improvement3_small_ttl'); ?></h4>
                  <?php } ?>
                  <p class="case-detail-content__txt"><?php the_field('improvement_3'); ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if (get_field('improvement_4')) { ?>
            <div class="case-detail-content__item-block">
              <div class="case-detail-content__item-block">
                <?php if (get_field('improvement4_middle_ttl')) { ?>
                  <h3 class="case-detail-content__item-block-ttl"><?php the_field('improvement4_middle_ttl'); ?></h3>
                <?php } ?>
                <div class="case-detail-content__item-block-part">
                  <?php if (get_field('improvement4_small_ttl')) { ?>
                    <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('improvement4_small_ttl'); ?></h4>
                  <?php } ?>
                  <p class="case-detail-content__txt"><?php the_field('improvement_4'); ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if (get_field('improvement_5')) { ?>
            <div class="case-detail-content__item-block">
              <div class="case-detail-content__item-block">
                <?php if (get_field('improvement5_middle_ttl')) { ?>
                  <h3 class="case-detail-content__item-block-ttl"><?php the_field('improvement5_middle_ttl'); ?></h3>
                <?php } ?>
                <div class="case-detail-content__item-block-part">
                  <?php if (get_field('improvement5_small_ttl')) { ?>
                    <h4 class="case-detail-content__item-block-part-ttl"><?php the_field('improvement5_small_ttl'); ?></h4>
                  <?php } ?>
                  <p class="case-detail-content__txt"><?php the_field('improvement_5'); ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if (get_field('improvement_img')) { ?>
            <div class="case-detail-content__item-block --figure">
              <div class="case-detail-content__item-block-part">
                <figure class="case-detail-content__figure">
                  <img src="<?php the_field('improvement_img'); ?>" alt="" class="case-detail-content__figure-img">
                </figure>
              </div>
            </div>
          <?php } ?>
        </div>
      </section>
    </section>

    <a href="/salesforce/" class="btn slide-btn back-to-top-btn"><span>Salesforce<sup>®</sup>特設サイトTOPへ戻る</span></a>
  </main>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/salesforce/common/inc/footer.php"); ?>
</body>
<?php wp_footer(); ?>

</html>