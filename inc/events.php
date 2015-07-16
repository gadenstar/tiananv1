<?php
add_action('init', 'nii_events');
function nii_events()
{
  $labels = array(
    'name' => '活动',
    'singular_name' => '活动',
    'add_new' => '添加',
    'add_new_item' => '添加',
    'edit_item' => '编辑',
    'new_item' => 'new_item',
    'view_item' => '查看',
    'search_items' => 'search_items',
    'not_found' =>  'not_found',
    'not_found_in_trash' => 'not_found_in_trash',
    'parent_item_colon' => '',
    'menu_name' => '活动'

  );
  $args = array(
    'labels' => $labels,
    'description'=> '嘿，这是一个自定义的文章类型',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'events' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    //'taxonomies'=> array('category','post_tag'),
    'supports' => array('title','editor')
  );
  register_post_type('events',$args);

}
