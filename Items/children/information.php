<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>公司咨询</title>
		<script type="text/javascript" src="js/jq.js"></script>
		<link rel="stylesheet" href="css/Items.css" />
	</head>
	<body>
		<!--公司资讯-->
		<div class="information" align="center">
			<div class="topImg">
				<img src="img/information.jpg"/>
			</div>
			<div class="bottomMain" style="overflow: hidden;">
				<ul class="information_left">
					<li class="hov">
						<div>
							<img src="img/information1.jpg" alt="" />
						</div>
						<div>
							<h1>
								<a href=""><font><?php echo "法国萨吕斯酒堡葡萄酒" ?></font></a>
							</h1>
							<p>
								<font>
									<?php echo "一、位置吕萨吕斯酒堡（（Chateaud'YquemofLvsa-Lvsi，也被译为伊甘酒庄)、滴金庄园）
									位于波尔多市西南30公里处一座海拔250米的坡顶上。
									二、荣誉在著名的1855年波尔多官方" ?>
									
								</font>	
							</p>
							<div>
								<span><font><?php echo "2018-02-05" ?></font></span>
								<span class="iconfont">&#xe62b;</span>
								<span><?php echo "0" ?></span>
							</div>	
						</div>
						<p></p>
					</li>	
					
					<li class="hov">
						<div>
							<img src="img/information1.jpg" alt="" />
						</div>
						<div>
							<h1>
								<a href=""><font><?php echo "法国萨吕斯酒堡葡萄酒" ?></font></a>
							</h1>
							<p>
								<font>
									<?php echo "一、位置吕萨吕斯酒堡（（Chateaud'YquemofLvsa-Lvsi，也被译为伊甘酒庄)、滴金庄园）
									位于波尔多市西南30公里处一座海拔250米的坡顶上。
									二、荣誉在著名的1855年波尔多官方" ?>
									
								</font>	
							</p>
							<div>
								<span><font><?php echo "2018-02-05" ?></font></span>
								<span class="iconfont">&#xe62b;</span>
								<span><?php echo "0" ?></span>
							</div>	
						</div>
						<p></p>
					</li>	
					
					<li class="hov">
						<div>
							<img src="img/information1.jpg" alt="" />
						</div>
						<div>
							<h1>
								<a href=""><font><?php echo "法国萨吕斯酒堡葡萄酒" ?></font></a>
							</h1>
							<p>
								<font>
									<?php echo "一、位置吕萨吕斯酒堡（（Chateaud'YquemofLvsa-Lvsi，也被译为伊甘酒庄)、滴金庄园）
									位于波尔多市西南30公里处一座海拔250米的坡顶上。
									二、荣誉在著名的1855年波尔多官方" ?>
									
								</font>	
							</p>
							<div>
								<span><font><?php echo "2018-02-05" ?></font></span>
								<span class="iconfont">&#xe62b;</span>
								<span>0</span>
							</div>	
						</div>
						<p></p>
					</li>	
					
					<li class="hov">
						<div>
							<img src="img/information1.jpg" alt="" />
						</div>
						<div>
							<h1>
								<a href=""><font><?php echo "法国萨吕斯酒堡葡萄酒" ?></font></a>
							</h1>
							<p>
								<font>
									<?php echo "一、位置吕萨吕斯酒堡（（Chateaud'YquemofLvsa-Lvsi，也被译为伊甘酒庄)、滴金庄园）
									位于波尔多市西南30公里处一座海拔250米的坡顶上。
									二、荣誉在著名的1855年波尔多官方" ?>
									
								</font>	
							</p>
							<div>
								<span><font><?php echo "2018-02-05" ?></font></span>
								<span class="iconfont">&#xe62b;</span>
								<span><?php echo "0" ?></span>
							</div>	
						</div>
						<p></p>
					</li>	
				</ul>
				
				<div class="information_right" align="center">
					<div class="information_right_top">
						<div>
							<input type="text" name="search" id="search" placeholder="search" value="" />
						</div>
						<p>
							<a href="##">
								<i class="iconfont">&#xe619;</i>
							</a>
						</p>
					</div>
					
					<div class="information_right_centre">
						<p><a href=""><font><?php echo "新闻资讯" ?></font></a></p>
						<p><a href=""><font><?php echo "业界资讯" ?></font></a></p>
						<p><a href=""><font><?php echo "公司动态" ?></font></a></p>
					</div>
					
					<div class="information_right_bottom">
						<h2><?php echo "为你推荐" ?></h2>
						<ul>
							<li>
								<a href="">
									<font><?php echo "法国萨吕斯酒堡葡萄酒" ?></font>
								</a>
							</li>
							<li>
								<a href="">
									<font><?php echo "葡萄酒与春天的约会！" ?></font>
								</a>
							</li>
							<li>
								<a href="">
									<font><?php echo "韩媒：中国葡萄酒产量世界第六 年轻人更爱进口葡萄酒" ?></font>
								</a>
							</li>
							<li>
								<a href="">
									<font><?php echo "法国波尔多葡萄酒" ?></font>
								</a>
							</li>
							<li style="border: 0;">
								<a href="">
									<font><?php echo "孤独是一杯酒" ?></font>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				<div style="width: 100%;height: 50px;"></div>
			</div>
			
		</div>
		
		<script type="text/javascript">
			$(".hov").hover(function(){
				$(this).children("p").animate({
					width:"100%"
				},400);
				
			},function(){
				$(this).children("p").animate({
					width:160
				},100);
				
			})
			

		</script>
	</body>
</html>
