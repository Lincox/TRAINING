<?php include('libs/head.php'); ?>
</head>
<body id="top">
	<?php include('libs/header.php'); ?>
	<section class="top01">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_top01.jpg" alt="top01" class="widhun hidesp">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_top01sp.jpg" alt="top01" class="widhun hide">
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
				
				<p class="top02__col1__dedate"><?php echo get_the_date('Y/m/d'); ?></p> 
				<p class="top02__col1__detitle"><?php the_title();?></p>
				
				<?php $image = get_field('post_image');
				if(!empty ($image)){?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="widhun" />
				<?php } else { ?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pic_top0202.jpg" class="widhun" />
				<?php	} ?>
				
				
				<!-- <p class="top02__col1__decontent">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				テキストテキストテキストテキストテキストテキストテキスト
				<br>
				<br>
				テキストテキストテキストテキストテキスト</p>
		
				<h2 class="heading1">見出し1が入ります見出し1が入ります見出し1が入ります見出し1が入ります見出し1が入ります見出し1が入ります</h2>
				<p class="top02__col1__decontent">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				<br> テキストテキストテキストテキストテキストテキストテキスト</p>
		
				<h2 class="heading1">見出し1)若者の聖地である渋谷に起業支援ビルがオープン</h2>
				<p class="top02__col1__decontent">仮テキスト）2017年11月下旬、東京・渋谷の「タワーレコード渋谷店」の壁面には、9月20日に引退を発表した歌手・安室奈美恵さんのベストアルバムを宣伝する大型看板が掛かっていた。茶褐色の看板からは哀愁が漂い、まるで一時代の終わりを示すかのようだった。
			
	　    <br>
				<br>タワレコといえば、1990年代、若者文化の情報発信拠点として一時代を築いた。安室さんのファッションをまねした女子高生、通称「アムラー」の“聖地”として栄えた。しかし、それも今は昔。若者は、スマートフォンの画面を眺めるばかりで、タワレコに備え付けられた大型モニターなど目もくれず、かつてのにぎわいはどこにもなくなっていた。</p>
			
				<h2 class="heading2">見出し2それは、時代の転換を示す“シグナル”</h2>
				<p class="top02__col1__decontent">仮テキスト）タワレコから道路を挟んだ向かい側に、えんじ色で「EDGEof」との文字が頂上に書かれた、地上8階建ての真っ白なビルがそびえ立つ。

	　    <br>
				<br>実はこのビル、1階の飲食店を除き、起業家の育成・支援を行う複合施設となる予定だ。コワーキングスペースのほか、イベントスペースやショールームにメディアセンターもできるという。今秋からイベントが始まり、来春には正式オープンする予定だ。</p>
			 -->
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="top02__col1__decontent"><?php the_content();?></div>
				<?php endwhile; endif; ?>
				<ul class="disc">
					<li>リスト1リスト1リスト1リスト1</li>
					<li>リスト2リスト2</li>
					<li>リスト3リスト3リスト3リスト3リスト3</li>
				</ul>
				<a href="a" class="textlink">テキストリンクテキストリンクテキストリンク</a>
			</li>
			<li class="social">
				<p class="social__share hidesp"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_detop0202.png" alt=""></p>
				<p class="social__share hide"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_detop0202sp.png" alt=""></p>
				<p class="social--1"><a href="https://person-s.net/column/p9111/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ico_detop02fb.gif" alt="" class="resizesocial"></a></p>
				<p class="social--1"><a href="https://person-s.net/column/p9111/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ico_detop02tw.gif" alt="" class="resizesocial"></a></p>
				<p class="social--1"><a href="https://person-s.net/column/p9111/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ico_detop02line.gif" alt="" class="resizesocial"></a></p>
			</li>
		</ul>

			

		<div id="showmenu1">記事カテゴリーを選択</div>

		<div class="top02__col2" id="menu1">
			<p class="top02__col2__title"><a href="">カテゴリー</a></p>
			<p class="top02__col2__li"><a href="">すべての記事（00）</a></p>
			<p class="top02__col2__li"><a href="">カテゴリー1（00）</a></p>
			<p class="top02__col2__li"><a href="">カテゴリー2（00）</a></p>
			<p class="top02__col2__li"><a href="">カテゴリー3（00）</a></p>
		</div>
	</section>

	

<!--Footer ==================================================
================================================== -->

<?php include('libs/footer.php'); ?>

<!-- End Document
================================================== -->
	</body>
</html>
