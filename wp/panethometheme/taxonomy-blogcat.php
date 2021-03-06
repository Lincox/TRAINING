<?php
$titlepage = single_term_title("", false);
include 'libs/head.php';
?>
	</head>

	<body id="top">
		<?php include 'libs/header.php';?>
		<section class="top01">
			<img src="<?php bloginfo('stylesheet_directory');?>/images/img_top01.jpg" alt="top01" class="widhun hidesp">
			<img src="<?php bloginfo('stylesheet_directory');?>/images/img_top01sp.jpg" alt="top01" class="widhun hide">
			<h1 class="top01__title">家づくりコラム</h1>
		</section>
		<section class="container top02 clearfix">
			<div>
				<a href="#" class="top02__link1">PANET HOME</a>
				<p class="top02__gt">&gt;</p>
				<a href="a" class="top02__link2">家づくりコラム</a>
			</div>
			<ul class="top02__col1">
				<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($query_string . '&orderby=post_date&order=desc&posts_per_page=4&paged=' . $paged);
if (have_posts()): while (have_posts()): the_post();

        ?>
					<li class="top02__col1--bor">
						<div class="top02__col1__1">
							<?php $image = get_field('post_image');
        if (!empty($image)) {?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="widhun" />
							<?php } else {?>
							<img src="<?php bloginfo('stylesheet_directory');?>/images/pic_top0202.jpg" class="widhun" />
							<?php	}?>
						</div>
						<div class="top02__col1__2">
							<p class="top02__col1__date">
								<?php echo get_the_date('Y/m/d'); ?>
							</p>
							<h2 class="top02__col1__title">
								<?php the_title();?>
							</h2>
							<button type="button" class="btnsm btnsm--2">
								<a href="<?php the_permalink();?>">
									<span class="hidesp">詳しく見る</span>
								</a>
							</button>
						</div>
					</li>
					<?php endwhile;endif;?>
					<div class="right">
						<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
					</div>
			</ul>
			<div id="showmenu1">記事カテゴリーを選択</div>

			<ul class="top02__col2" id="menu1">
				<p class="top02__col2__title">カテゴリー</p>
				<?php
$args = array(
    'post_type' => 'blog',
    'orderby' => 'id',
    'order' => 'desc',
    'hide_empty' => 0,
    'taxonomy' => 'blogcat',
    'pad_counts' => false);

$categories = get_categories($args);
$i = 0;
foreach ($categories as $cat) {
    $i++;
    $className = "";
    if ($i % 4 == 1) { $className = "class='cat1'"; }
    if ($i % 4 == 2) { $className = "class='cat2'"; }
    if ($i % 4 == 3) { $className = "class='cat3'"; }
    if ($i % 4 == 0) { $className = "class='cat4'"; }

    ?>
					<li class="top02__col2__li" <?php echo $className; ?>>
						<a href="<?php echo get_term_link($cat->slug, 'blogcat'); ?>">
							<?php echo $cat->name; ?>(
							<?php echo $cat->count; ?>)</a>
					</li>
					<?php
}
?>
			</ul>

		</section>

		<?php include 'libs/footer.php';?>

		<!-- End Document
================================================== -->
	</body>

	</html>
