<?php include 'libs/head.php';?>
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
			<a href="a" class="top02__link1">PANET HOME</a>
			<p class="top02__gt">&gt;</p>
			<a href="a" class="top02__link2 underline">家づくりコラム</a>
			<p class="top02__gt">&gt;</p>
			<a href="a" class="top02__link2">記事タイトル記事タイトル記事タイトル</a>
		</div>

		<ul class="top02__col1">
			<li class="top02__col1__whole">

				<p class="top02__col1__dedate">
					<?php echo get_the_date('Y/m/d'); ?>
				</p>
				<p class="top02__col1__detitle">
					<?php the_title();?>
				</p>

				<?php $image = get_field('post_image');
if (!empty($image)) {?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="widhun" />
				<?php } else {?>
				<img src="<?php bloginfo('stylesheet_directory');?>/images/pic_top0202.jpg" class="widhun" />
				<?php	}?>

					<?php if (have_posts()): while (have_posts()): the_post();?>
					<div class="top02__col1__decontent">
						<?php the_content();?>
					</div>
					<?php endwhile;endif;?>
					<ul class="disc">
						<li>リスト1リスト1リスト1リスト1</li>
						<li>リスト2リスト2</li>
						<li>リスト3リスト3リスト3リスト3リスト3</li>
					</ul>
					<a href="a" class="textlink">テキストリンクテキストリンクテキストリンク</a>
			</li>
			<li class="social">
				<p class="social__share hidesp">
					<img src="<?php bloginfo('stylesheet_directory');?>/images/img_detop0202.png" alt="">
				</p>
				<p class="social__share hide">
					<img src="<?php bloginfo('stylesheet_directory');?>/images/img_detop0202sp.png" alt="">
				</p>
				<p class="social--1">
					<a href="https://person-s.net/column/p9111/">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/ico_detop02fb.gif" alt="" class="resizesocial">
					</a>
				</p>
				<p class="social--1">
					<a href="https://person-s.net/column/p9111/">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/ico_detop02tw.gif" alt="" class="resizesocial">
					</a>
				</p>
				<p class="social--1">
					<a href="https://person-s.net/column/p9111/">
						<img src="<?php bloginfo('stylesheet_directory');?>/images/ico_detop02line.gif" alt="" class="resizesocial">
					</a>
				</p>
			</li>



			<?php
$prevPost = get_previous_post();
if (!empty($prevPost)): ?>
				<li class="prepost">
					<div>
						<?php $image = get_field('post_image');
if (!empty($image)) {?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="widhun" />
						<?php } else {?>
						<img src="<?php bloginfo('stylesheet_directory');?>/images/pic_top0202.jpg" class="widhun" />
						<?php	}?>
					</div>
					<div class="top02__col1__2">
						<p class="top02__col1__date">
							<?php echo mysql2date('Y/m/d', $prevPost->post_date, false) ?>
						</p>
						<h2 class="top02__col1__title">
							<?php echo $prevPost->post_title; ?>
						</h2>
						<button type="button" class="btnsm btnsm--2">
							<a href="<?php echo $prevPost->guid ?>">
								<span class="hidesp">詳しく見る</span>
							</a>
						</button>
					</div>
				</li>
				<?php endif;

//Next Post
$nextPost = get_next_post();
if (!empty($nextPost)): ?>
				<li class="nextpost">
					<div>
						<?php $image = get_field('post_image');
if (!empty($image)) {?>
						<a href="<?php echo $nextPost->guid ?>">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="widhun" />
						<?php } else {?>
							<img src="<?php bloginfo('stylesheet_directory');?>/images/pic_top0202.jpg" class="widhun" />
						</a>
						<?php	}?>
					</div>
					<div class="top02__col1__2">
						<p class="top02__col1__date">
							<?php echo mysql2date('Y/m/d', $nextPost->post_date, false) ?>
						</p>
						<h2 class="top02__col1__title">
							<a href="<?php echo $nextPost->guid ?>">
								<?php echo $nextPost->post_title; ?>
							</a>
						</h2>
						<button type="button" class="btnsm btnsm--2">
							<a href="<?php echo $nextPost->guid ?>">
								<span class="hidesp">詳しく見る</span>
							</a>
						</button>
					</div>
				</li>
				<?php endif;?>


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
foreach ($categories as $cat) {
    ?>
				<li class="top02__col2__li">
					<a href="<?php echo get_term_link($cat->slug, 'blogcat'); ?>">
						<?php echo $cat->name; ?>(
						<?php echo $cat->count; ?>)</a>
				</li>
				<?php
}
?>
		</ul>

		<ul class="top02__col2 top02__col2--datearc">
			<?php wp_get_archives('type=daily&post_type=blog&show_post_count=true'); ?>
		</ul>
	</section>





	<!--Footer ==================================================
================================================== -->

	<?php include 'libs/footer.php';?>

	<!-- End Document
================================================== -->
</body>

</html>
