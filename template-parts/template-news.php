<div class="inner">

  <h2>ニュースリリースを各年ごとにご覧いただけます。</h2>

  <div id="choice">
    <div>
      <p>年をお選びください。</p>
      <div class="select_wrap">
        <form id="year-selector" method="get" action="">
          <select name="year" onchange="if (this.value === '') { window.location.href='<?php echo home_url('/news/'); ?>'; } else { window.location.href='<?php echo home_url('/news/'); ?>' + this.value + '/'; }">
            <option value="" <?php echo (get_query_var('year') == '') ? ' selected' : ''; ?>>最新</option>
            <?php
            global $wpdb;
            $current_year = get_query_var('year');
            $years = $wpdb->get_results("
            SELECT DISTINCT YEAR(post_date) AS year 
            FROM $wpdb->posts 
            WHERE post_status = 'publish' 
            AND post_type = 'post' 
            ORDER BY year DESC
          ");
            foreach ($years as $year) {
              $selected = ($year->year == $current_year) ? ' selected' : '';
              echo '<option value="' . esc_attr($year->year) . '"' . $selected . '>' . esc_html($year->year) . '</option>';
            }
            ?>
          </select>
        </form>
      </div>
    </div>
    <p class="btn"><a href="/ir/news.php" class="common-btn">IRニュースはこちら</a></p>
  </div><!--/choice-->

  <?php
  $selected_year = get_query_var('year');
  if ($selected_year) {
    echo '<h3>' . esc_html($selected_year) . '年ニュースリリース</h3>';
  } else {
    echo '<h3>最新ニュースリリース</h3>';
  }
  ?>

  <ul class="news">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        // Get the custom link URL from ACF
        $link_url = get_field('file') ? get_field('file') : get_field('link_url');
        // Get the target field value from ACF
        $target = get_field('target');
        // Determine if the link should open in a new tab
        $target_attr = ($target === '_blank') ? ' target="_blank" rel="noopener"' : '';
        // Get the first term of the post
        $terms = get_the_terms(get_the_ID(), 'category');
        $term_name = ($terms && !is_wp_error($terms)) ? $terms[0]->name : '';
    ?>
        <li>
          <?php
          if ($link_url) :
          ?>
            <a href="<?php echo esc_url($link_url); ?>" <?php echo $target_attr; ?>>
              <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
              <span class="icon"><?php echo esc_html($term_name); ?></span>
              <p><?php the_title(); ?></p>
            </a>
          <?php
          else :
          ?>
            <span>
              <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
              <span class="icon"><?php echo esc_html($term_name); ?></span>
              <p><?php the_title(); ?></p>
            </span>
          <?php
          endif;
          ?>
        </li>
    <?php
      endwhile;
    else :
      echo '<p>No content found</p>';
    endif;
    ?>
  </ul>

  <div class="wp-pagenavi" role="navigation">
    <?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $base_url = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));

    $pagination = paginate_links(array(
      'base' => $base_url,
      'format' => '',
      'current' => max(1, $paged),
      'total' => $wp_query->max_num_pages,
      'prev_text' => 'PREV',
      'next_text' => 'NEXT',
      'type' => 'array',
      'show_all' => false,
    ));

    if ($pagination) :
      echo '<ul class="pagination">';
      foreach ($pagination as $page_link) :
        // Remove previous link if on the first page
        if (strpos($page_link, 'prev') !== false && get_query_var('paged') <= 1) {
          continue;
        }
        // Remove next link if on the last page
        if (strpos($page_link, 'next') !== false && get_query_var('paged') >= $wp_query->max_num_pages) {
          continue;
        }
        echo '<li>' . $page_link . '</li>';
      endforeach;
      echo '</ul>';
    endif;
    ?>
  </div>

</div><!--/inner-->