<?php echo('<?xml version="1.0" encoding="UTF-8"?>'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
	// set viewport by user agent.
	require_once 'ua.class.php';
	$ua = new UserAgent();
	if($ua->set() === 'tablet') :
		// set width when you use the tablet
		$width = '1024px';
?>
<meta content="width=<?php echo $width; ?>" name="viewport">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php endif; ?>

<?php 
include(APP_PATH.'libs/function.php');
include(APP_PATH.'libs/argument.php');  
?>
<title><?php echo $titlepage?></title>
<meta name="description" content="<?php echo $desPage; ?>">
<meta name="keywords" content="<?php echo $keyPage; ?>">

<!--facebook-->
<meta property="og:title" content="<?php echo $titlepage?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $current_url;?>">
<meta property="og:image" content="<?php echo ($ogimg) ? $ogimg : APP_URL.'img/common/other/fb_image.png'; ?>">
<meta property="og:site_name" content="<?php echo $ogsitename;?>">
<meta property="og:description" content="<?php echo $desPage; ?>">
<meta property="fb:app_id" content="">
<!--/facebook-->

<!--css-->
<link href="<?php echo APP_ASSETS; ?>css/style.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/custom.css" rel="stylesheet">
<!--/css-->

<!-- Favicons ==================================================-->
<link rel="icon" href="<?php echo APP_ASSETS; ?>img/common/icon/favicon.ico" type="image/vnd.microsoft.icon">

<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
	//wp_head();
?>
