<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>产品</title>
		<link rel="stylesheet" type="text/css" href="css/Items.css"/>
		<script type="text/javascript" src="js/jq.js"></script>
	</head>
	<body>
		<!--公司产品分类-->
		<div class="product">
			<div>
				<img src="img/product.jpg"/>
			</div>
			<div class="center">
				<ul>
					<li class="center_left">
						<h1><font><?php echo "产品分类" ?></font></h1>
						<div>
							<div class="site" style="border: 0;">
								<p><font><?php echo "按产地分" ?></font></p>
								<p><font><a href=""><?php echo "进口水果" ?></a></font></p>
								<ul>
									<li><font><a href=""><?php echo "南美进口" ?></a></font></li>
									<li><font><a href=""><?php echo "澳洲进" ?>口</a></font></li>
									<li><font><a href=""><?php echo "北美进口" ?></a></font></li>
									<li><font><a href=""><?php echo "非洲进口" ?></a></font></li>
								</ul>
								<p><?php echo "国产水果" ?></p>
								<ul>
									<li><font><a href=""><?php echo "新疆产" ?></a></font></li>
									<li><font><a href=""><?php echo "云南产" ?></a></font></li>
								</ul>
							</div>
							
							<div class="site">
								<p><font><?php echo "按种类分" ?></font></p>
								<ul class="site_bottom">
									<li><font><a href=""><?php echo "苹果" ?></a></font></li>
									<li><font><a href=""><?php echo "香蕉" ?></a></font></li>
									<li><font><a href=""><?php echo "哈密瓜" ?></a></font></li>
									<li><font><a href=""><?php echo "奇异果" ?></a></font></li>
									<li><font><a href=""><?php echo "苹果" ?></a></font></li>
									<li><font><a href=""><?php echo "香蕉" ?></a></font></li>
									<li><font><a href=""><?php echo "哈密瓜" ?></a></font></li>
									<li><font><a href=""><?php echo "奇异果" ?></a></font></li>
								</ul>
							</div>
						</div>
						
					</li>
					<li class="center_right">
						<div><?php echo "国产水果" ?></div>
						<ul style="display: block;" id="page1" class="pages">
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜1" ?></p>
							</li>
							
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜2" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜3" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜4" ?></p>
							</li>
							<li class="pg">
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜5" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜6" ?></p>
							</li>
						</ul>
						<ul style="display: none;"id="page2" class="pages">
							<li class="pg">
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜12" ?></p>
							</li>
							
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜22" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜32" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜42" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜52" ?></p>
							</li>
							<li>
								<div><img src="img/show-bottom4.jpg" alt="" /></div>
								<p><?php echo "哈密瓜62" ?></p>
							</li>
						</ul>
						<div class="center_bottom">
							<span class="upbt"><font><?php echo "上一页" ?></font></span>
							<span id="num"><?php echo "1" ?></span>
							<span class="downbt"><font><?php echo "下一页" ?></font></span>
						</div>
					</li>
				</ul>
			</div>
			<div style="width: 100%; height: 50px;"></div>
		</div>
		
		<script type="text/javascript">
			
			$(".upbt").click(function(event){
				var sw = parseInt($("#num").html());
	
				if(sw==1){
					return true;
				}else{
					sw--;
					$("#num").html(sw)
				}
					
					$(".pages").hide();
					$("#page"+sw).show();
			})
			
			$(".downbt").click(function(){
				var sw = parseInt($("#num").html());
				if(sw==2){
					return true;
				}else{
					sw++;
					$("#num").html(sw);
				}
				$(".pages").hide();
				$("#page"+sw).show();

				
			})
		</script>
		
	</body>
</html>
