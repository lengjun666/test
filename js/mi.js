$(".car").mouseenter(function(){
	$(this).css("background","#fff");
	$(".car span").css("color","#ff6700");
	$(".car img").attr("src","img/car2.png");
	$(".carList").stop().slideDown(200);
}).mouseleave(function(){
	$(".carList").stop().slideUp(200);
	setTimeout(function(){
		$(".car").css("background","#424242");
		$(".car span").css("color","#b0b0b0");
		$(".car img").attr("src","img/car.png");
	},200);
});
// 鼠标经过图标
$(".smallBox").mouseenter(function(){
	$(".bigBox").stop().animate({left:"0px"},200);
}).mouseleave(function(){
	$(".bigBox").stop().animate({left:"-55px"},200);
});
$(".userSpan").click(function(){
	$(".ewmSpan").css("color","#545B62");
	$(this).css("color","#FF6700");
	$(".userBox").css("display","block");
	$(".ewmBox").css("display","none");
	
});
$(".ewmSpan").click(function(){
	$(".userSpan").css("color","#545B62");
	$(this).css("color","#FF6700");
	$(".ewmBox").css("display","block");
	$(".userBox").css("display","none");
});