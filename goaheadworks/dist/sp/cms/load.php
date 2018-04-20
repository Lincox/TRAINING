<?php
// load page

if(!defined("CMS_PATH_SP")){
	exit(0);
}


require(CMS_PATH_SP . 'libs/functions.php');
require(CMS_PATH_SP . 'functions.php');

$templatesp = false;
if(is_archive() && is_tax()){
	$templatesp = get_tax_temsp();
}elseif(is_archive() || is_post_type_archive()){
	$templatesp = get_archive_temsp();
}else if(is_single()){
	$templatesp = get_single_temsp();
}else if(is_tax() || is_category() || is_tag()){
	$templatesp = get_tax_temsp();
}else if(is_home()){
	$templatesp = get_home_temsp();
}else if(is_404()){
	$templatesp = get_404_temsp();
}else{
	$templatesp = get_home_temsp();	
}

include( CMS_PATH_SP . $templatesp );

?>