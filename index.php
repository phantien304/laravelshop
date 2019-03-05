<?php
varr_dump('1');
session_start();
ini_set('display_errors',0);
include "admin-bao-mat-ma/library/config.php";
include "admin-bao-mat-ma/library/database.php";
include "admin-bao-mat-ma/library/pager2.php";
include "admin-bao-mat-ma/mod_menu/classmenu.php";
include "admin-bao-mat-ma/mod_chudele/classchudele.php";
include "admin-bao-mat-ma/mod_lienhe/lienhe.php";
include "admin-bao-mat-ma/mod_vemaybay/classkhuvuc.php";
include "modules/mod_hotro/classhotro.php";
include "modules/mod_slide/classslide.php";
include "modules/mod_vekhuvuc/classkhuvuc.php";
include "modules/mod_tintuc/classtin.php";
include "modules/mod_vekhuvuc/thongkeview.php";
include "seo.php";
$cdl=new chudele;
$seotc=$cdl->selectall();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-vn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $descripttion; ?>" />
<meta name="keywords" content="<?php echo $keyword; ?>" />
<meta name="google-site-verification" content="_DSuckeX4ITQuk84qPqBhdOBkmmyeWTsCWN2tvj1Rc0" />
<base href="<?php echo $seotc['linkbaseindex']; ?>"></base>
<meta name="robots" content="index, follow" />
<meta name="author" content="vemaybaygiarenhat.vn" />
<link rel="stylesheet" href="css/template.css" type="text/css">
<link href="css/ja.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/banggia.css" type="text/css">
<link href="css/chucnang.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122514813-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122514813-1');
</script>

	<script language="javascript" src="admin-bao-mat-ma/library/jquery.js"></script>
</head>
<body id="bd">
<div id="ja-wrapper">
<div class="nenkeychung"><h1 class="keychung"><?php echo $title; ?></h1></div>

<div id="ja-headervemaybay">
<span class="logo">
<a title="<?php echo $seotc['Tukhoaweb']; ?>" href="<?php echo $seotc['urlweb']; ?>"></a>
</span>
</div>
<!--<div id="ja-topsl" class="clearfix">	
<div id="ja-topsl1">
<?php //include "modules/mod_menu/menuvemaybay.php"; ?>
</div>
</div>-->
<div class="gach5px"></div>
<?php include "modules/mod_vekhuvuc/vemaybaykhuvuc.php"; ?>
<div class="gach5px"></div>
<div id="ja-containerwrap-fl">
<div id="ja-container">
<div class="khungmainnoidungabc">
<?php include "modules/mod_quangcaotop/checkgia.php"; ?>
<?php 
if($_GET['giatri'] != "ketqua"){
include "modules/mod_quangcaotop/quangcaove.php";
}?>

</div>
<?php
						switch($_GET['giatri']){
							case "dat-ve-nhanh":
							include "modules/mod_lienhe/conten.php";
							break;
							case "readtin":
							include "modules/mod_tintuc/read.php";
							break;
							case "timkiem":
							include "modules/mod_tintuc/timkiem.php";
							break;
							case "dangnhap":
							include "modules/mod_lienhe/dangnhap.php";
							break;
						
							case "tradonhang":
							include "modules/mod_lienhe/tracuu.php";
							break;
						
							
							default:
							include "main.php";
							break;	
						}
							
					?> 
<?php include "modules/mod_footer/thongtin.php"; ?>

<!-- ----------------------------------->
<div class="hotlineRight" style="width:154px; margin-left:962px;">
<img src="images/dat-ve-may-bay-qua-dien-thoai-mobile.png" title="đặt vé máy bay qua điện thoại" alt="đặt vé máy bay qua điện thoại"/><p>&nbsp;</p><img src="images/VE-MAY-BAY-VIETNAM-AIRLINES.png" title="đặt vé máy bay vietnam airlines" alt="đặt vé máy bay vietnam airlines" /></div> 
<div class="hotlineLeft" style="margin-left:-165px; width:154px;">
<img src="images/Dat-ve-may-bay-theo-thang.png" title="đặt vé máy bay theo tháng" alt="đặt vé máy bay theo tháng"/><p>&nbsp;</p><img src="images/khach-hang-noi-ve-may-bay.png" title="đặt vé máy bay khuyến mãi" alt="đặt vé máy bay khuyến mãi"  />
</div>

<!-- ----------------------------------->

</div>
<link href="css/chucnang.css" rel="stylesheet" type="text/css">
</body>
</html>