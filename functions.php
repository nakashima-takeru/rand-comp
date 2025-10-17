<?php

/*====================================================
カスタム投稿タイプ導入事例
====================================================*/
function create_case_studies_post_type() {
  register_post_type(
    'case',
    [
      'labels' => [
        'name' => __('導入事例'),
        'singular_name' => __('導入事例')
      ],
      'public' => true,
      'has_archive' => true,
      'rewrite' => ['slug' => 'case'],
      'supports' => ['title'],
    ]
  );
}
add_action('init', 'create_case_studies_post_type');

function register_case_category_taxonomy() {
  register_taxonomy(
    'case_category',
    'case',
    array(
      'label' => __('導入事例カテゴリー'),
      'rewrite' => array('slug' => 'case/category'),
      'hierarchical' => true,
      'has_archive' => true,
    )
  );
}
add_action('init', 'register_case_category_taxonomy');

function register_case_tag_taxonomy() {
  register_taxonomy(
    'case_tag',
    'case',
    array(
      'label' => __('導入事例タグ'),
      'rewrite' => array('slug' => 'case/tag'),
      'hierarchical' => false,
      'has_archive' => true,
    )
  );
}
add_action('init', 'register_case_tag_taxonomy');


function custom_rewrite_rules() {
  add_rewrite_rule(
    '^case/category/([^/]+)/page/([0-9]+)/?$',
    'index.php?case_category=$matches[1]&paged=$matches[2]',
    'top'
  );
  add_rewrite_rule(
    '^case/category/([^/]+)/?$',
    'index.php?case_category=$matches[1]',
    'top'
  );
  add_rewrite_rule(
    '^case/tag/([^/]+)/page/([0-9]+)/?$',
    'index.php?case_tag=$matches[1]&paged=$matches[2]',
    'top'
  );
  add_rewrite_rule(
    '^case/tag/([^/]+)/?$',
    'index.php?case_tag=$matches[1]',
    'top'
  );
  add_rewrite_rule(
    '^news/([0-9]{4})/page/([0-9]+)/?$',
    'index.php?post_type=post&year=$matches[1]&paged=$matches[2]',
    'top'
  );
  add_rewrite_rule(
    '^news/([0-9]{4})/?',
    'index.php?post_type=post&year=$matches[1]',
    'top'
  );
}
add_action('init', 'custom_rewrite_rules');

function custom_posts_per_page($query) {
  if (!is_admin() && $query->is_main_query()) {
    if (is_tax('case_category') || is_tax('case_tag') || is_post_type_archive('case')) {
      $query->set('posts_per_page', 12);
    }
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');

function add_query_vars($vars) {
  $vars[] = 'year';
  return $vars;
}
add_filter('query_vars', 'add_query_vars');

/*====================================================
メインクエリから非公開の記事を除外するコード
====================================================*/
function exclude_private_posts_from_main_query($query) {
  if (!is_admin() && $query->is_main_query()) {
    $query->set('post_status', array('publish'));
  }
}
add_action('pre_get_posts', 'exclude_private_posts_from_main_query');
