//1  2  3  4  5  6  7  8
//当前显示的图片
var index=0;
//下一张显示的图片
var nextIndex=0;
//做为计时器
var timer;

//开始自动轮播
autoPlay();

//封装函数,叠化动画
function animationPlay(){
//	eq() 选择器选取带有指定下标的元素
//	fadeOut(消失需要的时间:毫秒)方法使用淡出效果来隐藏被选中元素
//	stop()关闭上一次动画
//	fadeIn()方法使用淡入效果来显示被选中元素
	$(".box img").eq(index).stop().fadeOut(500);
	$(".box img").eq(nextIndex).stop().fadeIn(500);
//	小圆点变化
//	addClass()向被选元素添加一个或多个类
//	siblings()返回被选元素的所有同级元素
	$(".box ul li").eq(nextIndex).addClass("listOne").siblings().removeClass("listOne");    
}

//自动轮播动画
function autoPlay(){
//	设置计时器  setInterval(函数,间隔时间:毫秒)
	timer = setInterval(function(){
		if(nextIndex >= 4){
			nextIndex = 0;
		}else{
			nextIndex++;
		}
		//	调用叠化动画
		animationPlay();
		//下一张开始显示,变成当前显示
		index = nextIndex;
	},3000);

}

//鼠标经过小圆点
//mouseenter() 鼠标穿过
//mouseleave()鼠标离开
$(".box ul li").mouseenter(function(){
//	清除计时器
	clearInterval(timer);
//	获取当前经过的元素下标，赋值给下一张
	nextIndex = $(this).index();
	animationPlay();
	index = nextIndex;
}).mouseleave(function(){
//	继续自动轮播
	autoPlay();
});
//箭头的点击事件
//右箭头
$(".box .rightBrn").click(function(){
	if(nextIndex>=4){
		nextIndex=0;
	}else{
		nextIndex++;
	}
	animationPlay();
	index = nextIndex;
//	清除计时器
	clearInterval(timer);
	autoPlay();
});
//左箭头
$(".box .leftBtn").click(function(){
	if(nextIndex<=0){
		nextIndex=4;
	}else{
		nextIndex--;
	}
	animationPlay();
	index=nextIndex;
	clearInterval(timer);
	autoPlay();
});
