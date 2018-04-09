<?php
$titlepage = single_term_title("",false);
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
				<?php
				$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); // get current category
				?>
				<h2><?php echo $current_term->name; ?></h2>
				<ul>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts($query_string . '&orderby=post_date&order=desc&posts_per_page=10&paged=' . $paged);
					if(have_posts()): while(have_posts()) : the_post();

				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
				<?php endwhile;endif;?>
				</ul>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($query_string . '&orderby=post_date&order=desc&posts_per_page=10&paged=' . $paged.$querylogin);
if (have_posts()): while(have_posts()): the_post();
?>
// get data list, Ex: <p><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></p>
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
