<?php
require($_SERVER["DOCUMENT_ROOT"] . '/wp/wp-load.php');
?>
<?php
$id = $_GET["id"];
$args = array(
  'post_type' => 'case',
  'p' => $id
);
$query = new WP_Query($args);

// Start the loop.
if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
    get_template_part('template-parts/content', 'single-salesforce');
  endwhile;
  // Reset post data
  wp_reset_postdata();
else :
  echo '投稿が見つかりませんでした。';
endif;
?>
