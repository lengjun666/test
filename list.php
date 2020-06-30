<?php
	//	连接数据库
	$conn = mysqli_connect("127.0.0.1", "midemo", "midemo", "midemo");
	
	//	设置字符集
	mysqli_set_charset($conn,"utf8");

	// sql语句	id编号
//	$sql = "select count(id) as total from goods";
	$sql = "select * from goods";
	// 提交查询
	$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>商品删除列表</title>
	</head>
	<body>
		<a href="list.php">商品列表</a><br />
		<a href="index.php">返回首页</a>
		<table width="800px" border="1" style="margin:auto;">
			<tr><th colspan="6">商品列表</th></tr>
			<tr>
				<td>编号</td>
				<td>图片</td>
				<td>名称</td>
				<td>简介</td>
				<td>价格</td>
				<td>操作</td>
			</tr>
			
			<?php while($row = mysqli_fetch_assoc($result)){
			 ?>
			 <tr>
			 	<td><?php echo $row['id'] ?></td>
			 	<td><img style="width: 100px;" src="<?php echo $row['imgsrc'] ?>"/></td>
			 	<td><?php echo $row['goodsname'] ?></td>
			 	<td><?php echo $row['goodstext'] ?></td>
			 	<td><?php echo $row['goodsrmb'] ?></td>
			 	<td><a style="text-decoration: none;" href="php/delete.php?id=<?php echo $row['id'] ?>">删除</a></td>
			 </tr>
			<?php } ?>
		</table>
	</body>
	<?php
	//	关闭连接
	mysqli_close($conn);
	?>
</html>
