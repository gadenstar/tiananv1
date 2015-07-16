<?php
add_action('init', 'nii_jobs');   
function nii_jobs()    
{   
  $labels = array(   
    'name' => '招聘',   
    'singular_name' => '招聘',   
    'add_new' => '添加',   
    'add_new_item' => '添加',   
    'edit_item' => '编辑',   
    'new_item' => 'new_item',   
    'view_item' => '查看',   
    'search_items' => 'search_items',   
    'not_found' =>  'not_found',   
    'not_found_in_trash' => 'not_found_in_trash',    
    'parent_item_colon' => '',   
    'menu_name' => '招聘'   
  
  );   
  $args = array(   
    'labels' => $labels,   
    'description'=> '嘿，这是一个自定义的文章类型',   
    'public' => true,
    'publicly_queryable' => true,   
    'show_ui' => true,    
    'show_in_menu' => true,    
    'query_var' => true,   
    'rewrite' => array( 'slug' => 'jobs' ),    
    'capability_type' => 'post',   
    'has_archive' => true,    
    'hierarchical' => false,   
    'menu_position' => null,   
    //'taxonomies'=> array('category','post_tag'),   
    'supports' => array('title')   
  );    
  register_post_type('jobs',$args);   
     
}
add_filter('manage_jobs_posts_columns', 'add_new_jobs_columns');   
function add_new_jobs_columns($slider_columns) {   
       
    $new_columns['cb'] = '<input type="checkbox" />';//这个是前面那个选框，不要丢了   
  
    $new_columns['id'] = __('ID');   
    $new_columns['title'] = '职位';     
    $new_columns['author'] = __('Author');   
    $new_columns['img'] = __('图像');   
  
    
    $new_columns['date'] = _x('Date', 'column name');   
  
    //直接返回一个新的数组   
    return $new_columns;   
}  

add_action('manage_jobs_posts_custom_column', 'manage_jobs_columns', 10, 2);   
    
function manage_jobs_columns($column_name, $id) {   
    global $wpdb;   
    switch ($column_name) {   
    case 'id':   
        echo $id;   
        break;   
    case 'img':
        echo '<img src="'.vp_metabox("clients_set.img").'"width="50%">';
    break; 
    default:   
        break;   
    }   
}  