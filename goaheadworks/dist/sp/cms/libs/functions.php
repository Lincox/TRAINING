<?php
if(!defined("CMS_PATH_SP")){
	exit(0);
}
function get_home_temsp(){
	return 'index.php';
}
function get_single_temsp(){
	$path = CMS_PATH_SP;
	$post_type = get_query_var('post_type');
	if(file_exists($path . 'single-'.$post_type.'.php')){
		return 'single-'.$post_type.'.php';
	}else{
		return get_home_temsp();	
	}
	return ;
}
function get_archive_temsp(){
	$path = CMS_PATH_SP;
	$post_type = get_query_var('post_type');
	if(file_exists($path . 'archive-'.$post_type.'.php')){
		return 'archive-'.$post_type.'.php';
	}else{
		return get_home_temsp();	
	}
	return ;
}
function get_tax_temsp(){
	$path = CMS_PATH_SP;
	$tax = get_query_var('taxonomy');
	if(file_exists($path . 'taxonomy-'.$tax.'.php')){
		return 'taxonomy-'.$tax.'.php';
	}else{
		return get_home_temsp();		
	}
	return ;
}

// posttype link ex : the_permalink() , get_permalink()
add_filter( 'post_type_link', 'pleasure_post_type_links', 99 );
function pleasure_post_type_links( $permalink ) {
	if(false === strpos($permalink, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}
// archive link ex : get_post_type_archive_link() 
add_filter( 'post_type_archive_link', 'pleasure_post_links_archive', 98 );
function pleasure_post_links_archive( $permalink ) {
	if(false === strpos($permalink, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}
// page link
add_filter( 'get_pagenum_link', 'pleasure_post_links_page', 97 );
function pleasure_post_links_page( $permalink ) {
 	if(false === strpos($permalink, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}
//shortcut link 
add_filter( 'shortcut_link', 'pleasure_post_links_shortcut', 96 );
function pleasure_post_links_shortcut( $permalink ) {
  if(false === strpos($permalink, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}

//taxonomy link
add_filter( 'taxonomy_feed_link', 'pleasure_taxonomy_feed_link', 95 );
function pleasure_taxonomy_feed_link( $permalink ) {
	if(false === strpos($permalink, APP_URL_SP)){
		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}
//tag link
add_filter( 'tag_feed_link', 'pleasure_tag_feed_link', 94 );
function pleasure_tag_feed_link( $permalink ) {
	if(false === strpos($permalink, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}
// category link
add_filter( 'category_feed_link', 'pleasure_category_feed_link', 93 );
function pleasure_category_feed_link( $permalink ) {
	if(false === strpos($permalink, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $permalink);
	}
}
add_filter('term_link', 'pleasure_term_links', 91);
function pleasure_term_links( $url ) {
    if(false === strpos($url, APP_URL_SP)){
  		return str_replace( APP_URL , APP_URL_SP, $url);
	} 
}
?>