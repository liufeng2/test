<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>学院</title>
		<link rel="stylesheet" type="text/css" href="css/Items.css"/>
		<script type="text/javascript" src="js/jq.js"></script>
	</head>
	<body>
		<!--学院-->
		<div class="college">
			<div>
				<img src="img/college.jpg" alt="" />
			</div>
			
			<ul>
				<li class="hov">
					<a href="">
						<div class="college_top">
							<img src="img/college1.jpg"/>
						</div>
						<div class="college_bottom">
							<div><font><?php echo "五大酒庄" ?></font></div>
							<span></span>
							<p>
								<font>
									<?php echo "法国葡萄酒传统的五大名庄来源于1855年的波尔多葡萄酒官方分级制度。..." ?>
								</font>
							</p>
						</div>	
					</a>
							
				</li>
				
				<li class="hov">
					<a href="">
						<div class="college_top">
							<img src="img/college1.jpg"/>
						</div>
						<div class="college_bottom">
							<div><font><?php echo "五大酒庄" ?></font></div>
							<span></span>
							<p>
								<font>
									<?php echo "法国葡萄酒传统的五大名庄来源于1855年的波尔多葡萄酒官方分级制度。..." ?>
								</font>
							</p>
						</div>	
					</a>
							
				</li>
				
				<li style="margin-right: 0;"  class="hov">
					<a href="">
						<div class="college_top">
							<img src="img/college1.jpg"/>
						</div>
						<div class="college_bottom">
							<div><font><?php echo "五大酒庄" ?></font></div>
							<span></span>
							<p>
								<font>
									<?php echo "法国葡萄酒传统的五大名庄来源于1855年的波尔多葡萄酒官方分级制度。..." ?>
								</font>
							</p>
						</div>	
					</a>
							
				</li>
				
				<li  class="hov">
					<a href="">
						<div class="college_top">
							<img src="img/college1.jpg"/>
						</div>
						<div class="college_bottom">
							<div><font><?php echo "五大酒庄" ?></font></div>
							<span></span>
							<p>
								<font>
									<?php echo "法国葡萄酒传统的五大名庄来源于1855年的波尔多葡萄酒官方分级制度。..." ?>
								</font>
							</p>
						</div>		
					</a>
						
				</li>
				
				<li  class="hov">
					<a href="">
						<div class="college_top">
							<img src="img/college1.jpg"/>
						</div>
						<div class="college_bottom">
							<div><font><?php echo "五大酒庄" ?></font></div>
							<span></span>
							<p>
								<font>
									<?php echo "法国葡萄酒传统的五大名庄来源于1855年的波尔多葡萄酒官方分级制度。..." ?>
								</font>
							</p>
						</div>	
					</a>
							
				</li>
			</ul>
		</div>
		
		
		<script type="text/javascript">
			$(".hov").hover(function(){
				$(this).find("span").animate({
					width:"100%"
				},500)
			},function(){
				$(this).find("span").animate({
					width:"10px"
				},300)
			})
		</script>
	</body>
</html>
