<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<script type="text/javascript" src="js/jq.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Items.css"/>

	<title>头部</title>
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div>
				<h1>
					<font><?php echo "Vegetables & Fruit" ?></font>
					<span><font><?php echo "Design" ?></font></span>
				</h1>
				<p><span></span><font><?php echo "咨询电话：000-000-0000" ?></font></p>

			</div>
			
		</div>
		<div class="header_bottom">
			<div>
				<ul class="bt_left">
					<li style="color: #e4c17e;">
						<a href="http://www.lf.test/Items/homepage.php"><font><?php echo "网站首页" ?></font></a>
					</li>
					<li class="hd_show">
						<a href="http://www.lf.test/Items/company.php"><font><?php echo "集团概况" ?></font><span class="triangle"></span></a>
						<ul class="hd_show_one" style="display: none;">
							<li style="background: rgba(255,255,255,.0);border: 0;height: 1px;"></li>
							<li><a href="http://www.lf.test/Items/company.php"><font><?php echo "公司简介" ?></font></a></li>
							<li class="hd_show_two">
								<a href="">
									<font><?php echo "精英团队" ?></font>
								</a>
								<span class="triangle" style="transform: rotate(-90deg);right: 10px;border-color: #e8d9ba transparent transparent transparent;"></span>
								<ul class="hd_btn" style="display: none;">
									<li>1</li>
									<li>2</li>
									<li>3</li>
									<li>4</li>
									<li>5</li>
									<li>6</li>
								</ul>	
							</li>
							<li><a href="http://www.lf.test/Items/join.php"><font>加入我们</font></a></li>		
							
						</ul>

						
						
					</li>
					<li class="hd_show">
						<a href="http://www.lf.test/Items/information.php"><font><?php echo "新闻资讯" ?></font><span class="triangle"></span></a>
						<ul class="hd_show_one" style="display: none;">
							<li style="background: rgba(255,255,255,.0);border: 0;height: 1px;"></li>
							<li><a href="http://www.lf.test/Items/information.php"><font><?php echo "业界资讯" ?></font></a></li>
							<li><a href=""><font><?php echo "公司动态" ?></font></a></li>

							
						</ul>
					</li>
					<li class="hd_show">
						<a href="http://www.lf.test/Items/store.php"><font><?php echo "产品展示" ?></font><span class="triangle"></span></a>
						<ul class="hd_show_one" style="display: none;">
							<li style="background: rgba(255,255,255,.0);border: 0;height: 1px;"></li>
							<li><a href=""><font><?php echo "白葡萄酒" ?></font></a></li>
							<li><a href=""><font><?php echo "红葡萄酒" ?></font></a></li>

							
						</ul>
					</li>
					<li>
						<a href="http://www.lf.test/Items/shool.php"><font><?php echo "红酒学院" ?></font><span></span></a>
					</li>
				</ul>
				<div class="bt_input">
					<input type="text" />
					<a href="##">
						<i class="iconfont">&#xe619;</i>
					</a>
					    
				</div>		
			</div>
			
		</div>
	</div>



	<script type="text/javascript">
		$(".hd_show").hover(function(){
			var sw = parseInt($(this).index())-1;
			$(".hd_show").eq(sw).children(".hd_show_one").show();
		},function(){
			$(".hd_show_one").hide();
		})
		$(".hd_show_two").hover(function(){
			$(".hd_btn").show();
			$(".hd_show_two").children("span").css('border-color','#e4c17e transparent transparent transparent');
		},function(){
			$(".hd_btn").hide();
			$(".hd_show_two").children("span").css('border-color','#e8d9ba transparent transparent transparent');
		})

	</script>
		
	
	
	
</body>
</html>