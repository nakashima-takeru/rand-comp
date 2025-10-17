<div class="inner">
  <section id="search">
    <dl>
      <div>
        <dt>サービスライン<br class="pc_display">から探す</dt>
        <dd>
          <?php
          // case_category のタームを取得
          $terms = get_terms(array(
            'taxonomy' => 'case_category',
            'hide_empty' => false,
            'orderby' => 'term_order',
          ));

          if (!empty($terms) && !is_wp_error($terms)) :
          ?>
            <ul class="large">
              <?php foreach ($terms as $term) : ?>
                <?php if ($term->parent != 0) continue; // 1階層目のカテゴリーのみを表示
                ?>
                <?php $current_class = (is_tax('case_category', $term->term_id)) ? 'current' : ''; ?>
                <li class="<?php echo esc_attr($term->slug . ' ' . $current_class); ?>">
                  <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
                </li>
              <?php endforeach; ?>
            </ul>

          <?php endif; ?>
        </dd>
      </div>
      <div>
        <dt>キーワード<br class="pc_display">から探す</dt>
        <dd>
          <?php
          // case_tag のタームを取得
          $terms = get_terms(array(
            'taxonomy' => 'case_tag',
            'hide_empty' => true,
          ));

          if (!empty($terms) && !is_wp_error($terms)) {
            // タームをランダムに並べ替える
            shuffle($terms);
          ?>
            <ul>
              <?php foreach ($terms as $term) : ?>
                <?php
                // ACFのcustom_nameフィールドを取得
                $custom_name = get_term_meta($term->term_id, 'カスタム名', true);

                // 表示する名前を決定
                $display_name = !empty($custom_name) ? $custom_name : $term->name;

                // 現在のタクソノミーをチェック
                $current_class = (is_tax('case_tag', $term->term_id)) ? 'current' : '';
                ?>
                <li class="<?php echo esc_attr($term->slug . ' ' . $current_class); ?>">
                  <a href="<?php echo esc_url('/case/tag/' . $term->slug . '/'); ?>"><?php echo $display_name; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php } ?>
        </dd>
      </div>


  </section><!--/search-->
</div><!--/inner-->

<div id="case">
  <div class="inner">
    <?php if (have_posts()) : ?>
      <ul>
        <?php while (have_posts()) : the_post();
          // 現在の投稿の 'case_category' タームを取得
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

          // カスタムフィールド 'mainvisual' と 'lead' を取得
          $user_img_1 = get_field('user_img_1') ? esc_url(get_field('user_img_1')) : '';
          $lead = get_field('lead');

          // 'case_tag' タクソノミーの 'salesforce' タームを持っているかチェック
          if (has_term('salesforce', 'case_tag')) {
            $perma_link = "/salesforce/case/detail.php?id=" . get_the_ID();
            $target_blank = 'target="_blank"';
            $sf_flag = 1;
          } else {
            $perma_link = esc_url(get_permalink());
            $target_blank = '';
            $sf_flag = 0;
          }
        ?>
          <li class="package">
            <a href="<?php echo $perma_link; ?>" <?php echo $target_blank ?>>
              <p class="ttl <?php echo $term_slug; ?>"><?php echo $term_name; ?></p>
              <?php if ($user_img_1) : ?>
                <img src="<?php echo $user_img_1; ?>" alt="" class="img">
              <?php else : ?>
                <span class="img"></span>
              <?php endif; ?>
              <h2><?php the_title(); ?></h2>
              <p class="common-txt"><?php echo nl2br($lead); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>


      <div class="wp-pagenavi" role="navigation">
        <?php
        global $wp_query;

        $big = 999999999; // need an unlikely integer
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        if (is_tax('case_category') || is_tax('case_tag')) {
          $base_url = trailingslashit(get_term_link(get_queried_object())) . 'page/%#%/';
        } elseif (is_post_type_archive('case')) {
          $base_url = trailingslashit(get_post_type_archive_link('case')) . 'page/%#%/';
        } else {
          $base_url = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));
        }

        $pagination = paginate_links(array(
          'base' => $base_url,
          'format' => '',
          'current' => max(1, $paged),
          'total' => $wp_query->max_num_pages,
          'prev_text' => '«',
          'next_text' => '»',
          'type' => 'array',
          'show_all' => true,
        ));

        if ($pagination) :
          foreach ($pagination as $page_link) :
            // Remove previous link if on the first page
            if (strpos($page_link, 'prev') !== false && get_query_var('paged') <= 1) {
              continue;
            }
            // Remove next link if on the last page
            if (strpos($page_link, 'next') !== false && get_query_var('paged') >= $wp_query->max_num_pages) {
              continue;
            }
            echo $page_link;
          endforeach;
        endif;
        ?>
      </div>

    <?php endif; ?>

  </div><!--/inner-->
</div><!--/case-->