<?php
include_once(dirname(ABSPATH)."/app_config.php");

//login logo
function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo.png) 50% 50% no-repeat !important; width:100% !important;}</style>';
}

add_action('login_head', 'custom_login_logo');

// link for logo
function new_wp_login_url() {
    return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');

// title for logo
function new_wp_login_title() {
    return get_option('blogname');
}
add_filter('login_headertitle', 'new_wp_login_title');

//timthumb

define('THEME_DIR', get_template_directory_uri());
/* Timthumb CropCropimg */
function thumbCrop($img='', $w=false, $h=false , $zc=1, $a=false, $cc=false ){
    if($h)
        $h = "&amp;h=$h";
    else
        $h = "";

    if($w)
        $w = "&amp;w=$w";
    else
        $w = "";
	if($a)
        $a = "&amp;a=$a";
    else
        $a = "";
	if($cc)
        $cc = "&amp;cc=$cc";   
    else
        $cc = "";	

    $img = str_replace(get_bloginfo('url'), '', $img);
     $image_url = THEME_DIR . "libs/timthumb/timthumb.php?src=" . $img . $h . $w. "&amp;zc=".$zc .$a .$cc;	
    return $image_url;

}

// paging
$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', 0);
function my_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

function wp_post_type_archive($post_type = "post", $home_url="", $havecount = false){

    global $wpdb;
    if($home_url == "") $home_url  = home_url("/");
    $html = '';
    $txtCount = "";
    $posttype = get_post_type_object($post_type);
    $slug = $posttype->rewrite['slug'];
    $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$post_type}' ORDER BY post_date DESC");

    foreach($years as $year) :
		if($havecount){
		 $count = $wpdb->get_col("SELECT COUNT(*) countpost
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$post_type}' and YEAR(post_date) = '".$year."'");
			$txtCount = '('.$count[0].')';
		}
        $html .= '<li id="year'.$year.'"><a href="javascript:void(0);" class="dropdown">'.$year.'年 '.$txtCount.'</a><ul class="sub">';

             $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
                    FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '{$post_type}'
                    AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");

            foreach($months as $month) :
			if($havecount){
				 $count = $wpdb->get_col("SELECT COUNT(*) countpost
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$post_type}' and YEAR(post_date) = '".$year."' and MONTH(post_date) = '".$month."'");
            $txtCount = '('.$count[0].')';
		}
				 $html .= '<li><a href="'.$home_url.$slug."/".$year.'/'.$month.'">'.$month.'月 '.$txtCount.'</a></li>';

            endforeach;

        $html .= '</ul></li>';

    endforeach;

    return $html;
}

// Custom post

//sample
add_action('init', 'my_custom_sample');
function my_custom_sample()
{
  $labels = array(
    'name' => _x('sample', 'post type general name'),
    'singular_name' => _x('sample', 'post type singular name'),
    'add_new' => _x('新しくsampleを書く', 'news'),
    'add_new_item' => __('sample記事を書く'),
    'edit_item' => __('sample記事を編集'),
    'new_item' => __('新しいsample記事'),
    'view_item' => __('sample記事を見る'),
    'search_sample' => __('sample記事を探す'),
    'not_found' =>  __('sample記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にsample記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt','thumbnail'),
    'has_archive' => true
  );
  register_post_type('sample',$args);
}

// make taxonomy
add_action ('init','create_cat_taxonomy','0');
function create_cat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('newscat','post type general name'),
	'singular_name' => _x('newscat','post type singular name'),
	'search_items' => __('newscat'),
	'all_items' => __('newscat'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('Cat記事を編集'),
	'add_new_item' => __('Cat記事を書く'),
	'menu_name' => __( 'カテゴリー' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'samplecat' )
	);
	register_taxonomy('samplecat','sample',$args);

}


// for rewrite - this is alway at bottom of page
add_filter('post_type_link', 'custom_blog_permalink', 1, 3);
 function custom_blog_permalink($post_link, $id = 0, $leavename) {
  if ( strpos('%post_id%', $post_link) === 'FALSE' ) {
    return $post_link;
  }
  $post = get_post($id);
  if ( is_wp_error($post)) {
    return $post_link;
  }
  $post_type = get_post_type_object($post->post_type);
  return home_url($post_type->rewrite['slug'].'/p'.$post->ID.'/');
 }
function add_rewrites_init(){
  global $wp_rewrite;
  $postoj =  get_post_types( '', 'object' );
  foreach ( $postoj as $key=> $ar ) {
    $posttype = $ar->name;
    $slug = $ar->rewrite['slug'];
    $sgc = get_template_directory() . "/single-" . $posttype . ".php";
    $agr = get_template_directory() . "/archive-" . $posttype . ".php";
    if(@file_exists($sgc)){
        add_rewrite_rule($slug.'/p([0-9]+)?$', 'index.php?post_type='.$posttype.'&p=$matches[1]', 'top');
    }
    if(@file_exists($agr)){
      add_rewrite_rule($slug.'/([0-9]{4})/([0-9]{1,2})/?$', 'index.php?post_type='.$posttype.'&year=$matches[1]&monthnum=$matches[2]', 'top');
      add_rewrite_rule($slug.'/([0-9]{4})/([0-9]{1,2})/page/([0-9]{1,})/?$', 'index.php?post_type='.$posttype.'&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]', 'top');

    }
  }
  $wp_rewrite->flush_rules(false);
}
add_action('init', 'add_rewrites_init');
//end for rewrite - this is alway at bottom of page
