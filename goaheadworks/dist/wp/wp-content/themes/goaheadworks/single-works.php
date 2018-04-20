<?php
$title_sg = get_the_title();
$ogimg = catch_that_image();
$desPage = mb_substr(preg_replace('/\r\n|\n|\r/','',strip_tags($post->post_content)),0,120);
include(APP_PATH.'libs/head.php');
?>
</head>
<body id="top">
<?php include(APP_PATH.'libs/header.php'); ?>
	<div id="container">
		<!-- /container start -->
		<div class="clearfix">
			<div id="mainContent">
				<!-- /mainContent start -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content();?>
				<?php endwhile; endif; ?>
				<!-- /maincontent end -->
			</div>
		</div>
		<!-- /container end -->
	</div>
<!--Footer ==================================================
================================================== -->

<?php include(APP_PATH.'libs/footer.php'); ?>

<!-- End Document
================================================== -->
	</body>
</html>
