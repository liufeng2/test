<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>简介头部</title>
		<script type="text/javascript" src="js/jq.js"></script>
		<script type="text/javascript" src="js/jq_Color.js"></script>
		<link rel="stylesheet" type="text/css" href="css/Items.css"/>
	</head>
	<body>
		<!--公司介绍-->
		<div class="introHeader" align="center">
			<div>
				<img src="img/introImg1.jpg" alt="" />
			</div>
			<ul class="introHeader_bottom">
				<li class="color"><a href="http://www.lf.test/Items/company.php"><font>公司简介</font></a></li>
				<li class="btn1" id="btn">
					<a href="##">
						<font><?php echo "精英团队" ?></font><span></span>
					</a>
					<ul class="introHeader_bottom_show" style="display: none;">
						<li><a href=""><font><?php echo "1" ?></font></a></li>
						<li><a href=""><font><?php echo "2" ?></font></a></li>
						<li><a href=""><font><?php echo "3" ?></font></a></li>
						<li><a href=""><font><?php echo "4" ?></font></a></li>
						<li><a href=""><font><?php echo "5" ?></font></a></li>
						<li><a href=""><font><?php echo "6" ?></font></a></li>
					</ul>
				</li>
				<li><a href="http://www.lf.test/Items/join.php"><font><?php echo "加入我们" ?></font></a></li>
			</ul>
		</div>
		<script type="text/javascript">
			//三角形hover改变颜色
			$("#btn").hover(function(){
				$(".introHeader_bottom").find("span").css("border-color","#e4c17e transparent transparent transparent")
			},function(){
				$(".introHeader_bottom").find("span").css("border-color","#444444 transparent transparent transparent")
			})
			
			//点击li出现新的ul人物框

			$("#btn").click(function(event){
				event.stopPropagation();
				$(".introHeader_bottom_show").children("li").css('color','#444444')
				$(".introHeader_bottom_show").toggle();
				$(".introHeader_bottom_show").children("li").animate({
					"padding-left":15
				},200)
				if($(".introHeader_bottom_show").css("display")=="none"){
					$(".introHeader_bottom_show").children("li").animate({
						"padding-left":0
					},50)
				}
				
			})
				//点击其他地方 隐藏任务框
			var btns = $(document);
			btns.click(function(){
				$(".introHeader_bottom_show").hide();
					if($(".introHeader_bottom_show").css("display")=="none"){
						$(".introHeader_bottom_show").children("li").animate({
						"padding-left":0
					},50)
				}
			})
			
			

			
			
			//人物框lihover
			$(".introHeader_bottom_show").children("li").hover(function(){
				$(this).css("color","#e4c17e")
				$(this).animate({
					backgroundColor:'rgb(245,245,245)',
					color:'#e4c17e'
				},100)
			},function(){
				$(this).animate({
					backgroundColor:'#ffffff',
					color:'#444444'
				},100)
			})
			
		</script>
	</body>
</html>
