<?
header('Content-Type: text/html; charset=utf-8'); 

/*include_once("lib/class_main.php");
include_once("lib/class_member.php");
include_once("lib/class_property.php");

$member = new Member();
$property = new Property();
$admin = new Member();
$image_path = "picture/";
$image_pathCat = "cat/";*/

// modules
define("ACTIVE_MODULE", 1);
if(isset($_GET['mode']))
{
	$action_mode = $_GET['mode'];
	$action_link = $action_mode.".php";
	if(!is_file($action_link))
	{
		$action_link = "error404.php";
	}
}
else
{
	$action_link = "welcome.php";
}
$seo = "";
$description = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รับจำนอง ขายฝาก บ้าน ที่ดิน คอนโด : บริการให้คำปรึกษาแหล่งเงินทุน สำหรับท่านมีหลักทรัพย์ ที่ต้องการจำนอง-ขายฝาก ด้วยความเร่งด่วน</title>
<meta name="Description" content="รับจำนอง,รับขายฝาก,จำนอง,ขายฝาก,จำนองบ้าน,จำนองที่ดิน,ขายฝากบ้าน,ขายฝากที่ดิน"/>
<meta name="Keywords" content="รับจำนอง,รับขายฝาก,จำนอง,ขายฝาก,จำนองบ้าน,จำนองที่ดิน,ขายฝากบ้าน,ขายฝากที่ดิน" />
<meta name="author" content="KPK Computer, Thailand" />
<meta name="robots" content="index,follow" />
<style type="text/css">
* {margin:0px; padding:0px;}
body {font-family:Calibri, Tahoma; font-size:16px; background:url(image/bg1.png) repeat-x fixed;}
h1 {font-size:16px; display:inline;}
h2 {color:#6699FF; padding-bottom:20px;}
a {text-decoration:none;}
img {border:none;}
b {color:#FF0000;}
.box1032 {width:1032px; margin:0px auto; background:url(image/box1032.png);}
.page1000 {width:1002px; margin:0px auto; background:url(image/bg2.png) repeat-x #FFFFFF; padding:10px;}
	.head { position:relative;}
		.menu {text-align:right; color:#FFFFFF; position:absolute; bottom:0px; right:0px; font-size:20px;}
			.menubox {float:left; padding-right:20px;}
			.menubox a {color:#FFFFFF;}
			.menubox a:hover {color:#e9cf1a;}
	.content {border:1px solid #38393c; padding:0px 0px; height:350px; width:1000px;}
		.content_l {float:left; width:400px;}
		.content_r {float:left; width:600px;}
			.content_r_inner {padding:20px; font-family:lilyUPC; font-size:30px; color:#FFFFFF; text-align:justify;}
		.bg1 {width:1000px; height:350px; background:url(image/bg1_2.jpg);}
		.bg2 {width:400px; height:350px; background:url(image/bg2.jpg);}
		.bg3 {width:400px; height:350px; background:url(image/bg3.jpg);}
	.content2 { width:1000px; margin:0px auto;}
		.content2 .content_l {float:left; width:250px;}
			.box250_1 {width:250px; height:16px; background:url(image/box250/box250_01.png);}
			.box250_2 {width:250px; background:url(image/box250/box250_03.png);}
			.box250_3 {width:250px; height:16px; background:url(image/box250/box250_05.png);}
		.content2 .content_r {float:left; width:750px;}
			.box750_1 {width:750px; height:16px; background:url(image/box750/box750_01.png);}
			.box750_2 {width:750px; background:url(image/box750/box750_03.png);}
			.box750_3 {width:750px; height:16px; background:url(image/box750/box750_05.png);}
	.footer {padding:20px; text-align:center; font-size:12px; color:#999999;}
	.footer a {color:#999999;}
	.footer a:hover {color:#0099FF;}
.clear {clear:both;}
.h10 {height:10px;}
.h20 {height:20px;}
.h30 {height:30px;}
.h50 {height:50px;}
</style>
<!-- Nivo -->
<link rel="stylesheet" href="nivo/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery-1.3.1.js"></script>
<!-- Nivo -->

<meta name="stats-in-th" content="083d" />

</head>

<body>
<div class="box1032">
	<div class="page1000">
    	<div class="head">
        	<div style="width:1000px; margin:0px auto;">
            	<div style="color:#FFFFFF; font-weight:bold;">
                    <MARQUEE onmouseover=this.scrollAmount=0 onmouseout=this.scrollAmount=1 width=100% scrollAmount=1 trueSpeed scrollDelay=25 loop="-1">
                    <h1>รับจำนอง ขายฝาก บ้าน ที่ดิน คอนโด</h1> : บริการให้คำปรึกษาแหล่งเงินทุน สำหรับท่านมีหลักทรัพย์ ที่ต้องการจำนอง-ขายฝาก ด้วยความเร่งด่วน สำหรับท่านที่มี บ้าน ที่ดิน คอนโด ทาว์นเฮาท์ ต้องการ แปลงเป็นทุน เรายินดีให้บริการด้วยความเป็นกันเอง สามารถติดต่อได้ที่ 084-145-0001 Line ID : 0841450001
                    </MARQUEE>
                </div>
            	<!--<div class="menu">
                	<div class="menubox"><a href="index.php">หน้าแรก</a></div>
                    <div class="menubox"><a href="#index.php?mode=aboutus">สินค้าของเรา</a></div>
                    <div class="menubox"><a href="#index.php?mode=service">การสั่งซื้อสินค้า</a></div>
                    <div class="menubox" style="padding:0px;"><a href="#index.php?mode=contactus">ติดต่อเรา</a></div>
                    <div class="clear"></div>
                </div> -->
            </div>
        </div>
        <div class="h30"></div>
        <div class="content">
        	
        	<div class="slider-wrapper theme-default">
            
                <div id="slider" class="nivoSlider">
                
                    <!-- data-transition="fade" -->
                    <img src="image/gallery/1_3.jpg" width="1000" height="300" />
                    <img src="image/gallery/2_3.jpg" width="1000" height="300" />
                
                </div>
            
            </div>
                    
        </div>
        <div class="content2">
        	<div class="content_l">
            	<div class="box250_1"></div>
                <div class="box250_2">
                	<div style="width:230px; margin:0px auto; min-height:500px;">
                    	<a href="index.php"><div style="width:200px; margin:0px auto; height:46px; background:url(image/button230/1.png);"></div></a>
                        <a href="index.php?mode=content1"><div style="width:200px; margin:0px auto; height:46px; background:url(image/button230/2.png);"></div></a>
                        <a href="index.php?mode=content2"><div style="width:200px; margin:0px auto; height:46px; background:url(image/button230/3.png);"></div></a>
                        <a href="index.php?mode=content3"><div style="width:200px; margin:0px auto; height:46px; background:url(image/button230/4.png);"></div></a>
                        <a href="index.php?mode=contactus"><div style="width:200px; margin:0px auto; height:46px; background:url(image/button230/5.png);"></div></a>
                    </div>
                </div>
                <div class="box250_3"></div>
            </div>
            <?php include_once($action_link); ?>
            <div class="clear"></div>
        </div>
        
        <div class="footer">
            Copyright @ 2013 All Right Reserved by <a href="index.php">www.nananda.com</a><br />
    		Powered by <a href="http://www.kpkcomputer.com" target="_blank" title="รับทำเว็บไซต์ราคาถูก">KPK Computer</a><br />
            <br />
            <b>รับจำนอง,รับขายฝาก,จำนอง,ขายฝาก,จำนองบ้าน,จำนองที่ดิน,ขายฝากบ้าน,ขายฝากที่ดิน</b>
            
            <div style="height:20px;"></div>
            <div>
            	<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                <!-- Histats.com  START  (aync)-->
                <script type="text/javascript">var _Hasync= _Hasync|| [];
                _Hasync.push(['Histats.start', '1,3844166,4,438,112,75,00011001']);
                _Hasync.push(['Histats.fasi', '1']);
                _Hasync.push(['Histats.track_hits', '']);
                (function() {
                var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                hs.src = ('//s10.histats.com/js15_as.js');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                })();</script>
                <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3844166&101" alt="" border="0"></a></noscript>
                <!-- Histats.com  END  -->
            </div>
            
            <div>
            	<script type="text/javascript" language="javascript1.1" src="http://tracker.stats.in.th/tracker.php?sid=70925"></script><noscript><a target="_blank" href="http://www.stats.in.th/">www.Stats.in.th</a></noscript>
            </div>
            
        </div>
    </div>
</div>
<!-- Nivo -->
<script type="text/javascript" src="nivo/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>
<!-- Nivo -->
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=8796039; 
var sc_invisible=1; 
var sc_security="803b5705"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/8796039/0/803b5705/1/"
alt="web analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>

</html>