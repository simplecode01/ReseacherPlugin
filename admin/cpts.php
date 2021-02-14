<?php
//Researcher
function create_researchers(){
    $labels = array(
        'name'=>'Researcher',
        'singular_name'=>'Researcher',
        'menu_name'=>'Researcher',
        'name_admin_bar'=>'Researcher',
        'archives'=>'Researcher Archives',
        'attributes'=>'Researcher Atributes',
        'parent_item_colon'=>'Parent Item',
        'all_items'=>'All Items',
        'add_new_item'=>'Add New Item',
        'add_new'=>'Add New',
        'new_item'=>'New Item',
        'edit_item'=>'Edit Item',
        'update_item'=>'Update Item',
        'view_item'=>'View Item',
        'view_items'=>'View Items',
        'search_items'=>'Seach Items',
        'not_found'=>'Not found',
        'featured_image'=>'Researcher profile image',
        'set_featured_image'=>'Set featured image',
        'remove_featured_image'=>'Remove featured image',
        'use_featured_image'=>'use featured image',
        'insert_into_item'=>'Inster into item',
        'uploaded_to_this_item'=>'Uploaded to this item',
        'item_list'=>'Item list',
        'item_list_navigation'=>'Item list navigation',
        'filter_item_list'=>'Filter item list',
    );
    $args = array(
        'label'=>'Researcher',
        'labels'=>$labels,
        'supports'=>array('title', 'editor', 'thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menu'=>true,
        'menu_position'=>20,
        'menu_icon'=>'dashicons-businessman',
        'show_in_admin_bar'=>true,
        'show_in_nav_menus'=>true,
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'publicy_queryable'=>true,
        'capability_type'=>'post',
        'rewrite'=>array('slug'=>'researchers','with_font'=>true)
    );
    register_post_type('researchers', $args);
}

// function researchers_archive($archive_template){
//     global $post;
//     if(is_post_type_archive('researchers')){
//         $archive_template = plugin_dir_path(dirname(__file__)).'archive-researchers.php';
//     }
//     return $archive_template;
// }

function researchers_single($single_template){
    global $post;
    if($post->post_type == 'researchers'){
        $single_template = plugin_dir_path(dirname(__file__)).'single-researchers.php';
    }
    return $single_template;
}