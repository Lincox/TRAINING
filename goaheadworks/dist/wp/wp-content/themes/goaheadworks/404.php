<?php
include(APP_PATH.'libs/header.php');
?>
</head>
<body id="top">
<?php include(APP_PATH.'libs/header2.php'); ?>
	<div id="container">
		<!-- /container start -->		
		<div class="clearfix">
			<div id="mainContent">
				<!-- /mainContent start -->
				<p class="taC t30b30 fz15">アクセスしようとしたページは、移動したか削除されました。<br />下記リンクに移動して下さい。</p>
				<p class="taC"><a href="<?php echo esc_url( home_url( '/' ) )?>"><?php echo esc_url( home_url( '/' ) )?></a></p>
				<!-- /maincontent end -->
			</div>
			<?php get_sidebar(); ?>
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