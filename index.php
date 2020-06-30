<?php
	//	连接数据库
	$conn = mysqli_connect("127.0.0.1", "midemo", "midemo", "midemo");
	
	//	设置字符集
	mysqli_set_charset($conn,"utf8");

	// sql语句	
	$sql = "select * from goods";
	
	// 提交查询
	$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>小米商城</title>
		<link rel="stylesheet" type="text/css" href="css/mi.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>
		<!--导航栏-->
		<div class="tilteBox">
			<div class="titleCon">
				<!--左边-->
				<div class="leftBox">
					<a href="#">小米商城</a>
					<span>|</span>
					<a href="#">MIUI</a>
					<span>|</span>
					<a href="#">IoT</a>
					<span>|</span>
					<a href="#">云服务</a>
					<span>|</span>
					<a href="#">金融</a>
					<span>|</span>
					<a href="#">有品</a>
					<span>|</span>
					<a href="#">小爱开放平台</a>
					<span>|</span>
					<a href="#">企业团购</a>
					<span>|</span>
					<a href="#">资质证照</a>
					<span>|</span>
					<a href="#">协议规则</a>
					<span>|</span>
					<a href="#">下载app</a>
					<span>|</span>
					<a href="#">SelectLocation</a>
				</div>
				<!--购物车-->
				<div class="car">
					<img src="img/car.png" />
					<span>购物车(0)</span>
					<!--购物车下拉菜单-->

					<div class="carList">
						购物车中还没有商品，赶紧选购吧！
					</div>
				</div>
				<!--右边-->
				<div class="rigthtBox">
					<a href="login.html">登录</a>
					<span>|</span>
					<a href="register.html">注册</a>
					<span>|</span>
					<a href="goods.html">上传商品</a>
				</div>
			</div>

		</div>
		<!--logo区域-->
		<div class="logoBox">
			<!--图标-->
			<div class="smallBox">
				<div class="bigBox">
					<img src="img/mi-home.png"/>
					<img src="img/mi-logo.png"/>
				</div>
			</div>
			<!--导航栏-->
			<ul>
				<li>小米手机</li>
				<li>Redmi 红米</li>
				<li>电视</li>
				<li>笔记本</li>
				<li>家电</li>
				<li>路由器</li>
				<li>智能硬件</li>
				<li>服务</li>
				<li>社区</li>
			</ul>
			<!--搜索框-->
			<div class="sou">
				<img src="img/fang.png"/>
			</div>
			<input type="text"/>
		</div>
		<!--轮播区域-->
		<div class="rotationBox">
			<div class="box">
				<!--图片-->
				<img src="img/band1.jpg" />
				<img src="img/band2.jpg" />
				<img src="img/band3.jpg" />
				<img src="img/band4.jpg" />
				<img src="img/band5.jpg" />
				<!--左下角小圆点-->
				<ul>
					<li class="listOne"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<!--左右按钮-->
				<div class="leftBtn">
					< </div>
						<div class="rightBrn"> > </div>
				</div>
				<div class="leftDiv"></div>
				<div class="text">
					<ul>
						<li>手机 电话卡<span>></span></li>
						<li>电视 盒子<span>></span></li>
						<li>笔记本 显示器 平板<span>></span></li>
						<li>家电 插线板<span>></span></li>
						<li>出行 穿戴<span>></span></li>
						<li>智能 路由器<span>></span></li>
						<li>电源 配件<span>></span></li>
						<li>健康 儿童<span>></span></li>
						<li>耳机 音响<span>></span></li>
						<li>生活 箱包<span>></span></li>
					</ul>
				</div>
			</div>
		<!--展示商品-->
		<div class="goodsBox">
			<div class="goodsCon">
				<?php 
					while ($row = mysqli_fetch_assoc($result)) {
					?>
				<div class="goodsDiv">
					<!--图片-->
					<img src="<?php echo $row['imgsrc'] ?>"/>
					<!--名字-->
					<p class="gName"><?php echo $row['goodsname'] ?></p>
					<!--简介-->
					<p class="gText"><?php echo $row['goodstext'] ?></p>
					<!--价格-->
					<p class="gRmb"><?php echo $row['goodsrmb'] ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
			<script src="js/jquery-2.1.0.js" type="text/javascript"></script>
			<script src="js/mi.js" type="text/javascript"></script>
			<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	</body>
<?php
	//	关闭连接
	mysqli_close($conn);
?>
</html>