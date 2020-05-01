<!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>关山酒</title>
  <link rel="stylesheet" href="css/base.css" type="text/css">
  <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="js/base.js"></script>
  <script src="js/myjquery.js"></script>
</head>
<body>
  <div class="container">
		<div class="wrapper">
		  <div class="heading">
			<div class="heading_nav">
			  <div class="head_title">关山酒</div>
			  <div class="head_navbar">
				<ul>
				  <li><a href="">小说</a></li>
				  <li><a href="">漫画</a></li>
				  <li><a href="">技术</a></li>
				  <li><a href="">学术</a></li>
				</ul>
			  </div>
			  <div class="heading_img">
				<img src="image/6.jpg" alt="">
			  </div>
			  <div class="heading_soptlight">
				<form action="">
				  <input type="text" style="color:#6C6C6C;font-family:幼圆; text-align: center;" value="找?(/▽＼)">
				</form>
			  </div>
			</div>
		  </div>
		  <div class="body">
			<div class="body_title">
			  <h5>我的的文件</h5>
			  <p>
			  <?php
			 // header("Content-Type:text/html; charset=utf-8");
			  $dir=getcwd();
			  if (is_dir($dir))
			  {
				   if ($dh = opendir($dir))
				   {
						while (($file = readdir($dh)) !== false)
						{
						  echo "<a href='" . $file . "'>".$file."</a><br>";
						}
				   }
			  }
			  ?>
			 </p>
			</div>
			<hr>
				<a href="obindex.php" style="display: inline-block;text-align: center;">秀儿们</a>
			<hr>
			<div class="body_container">
				<div class="box"><div class="box_img"><img src="image/1.jpg" alt=""></div></div>	
				<div class="box"><div class="box_img"><img src="image/1.png" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/2.gif" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/2.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/3.gif" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/3.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/4.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/5.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/6.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/7.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/8.png" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/8.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/9.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/11.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/12.jpg" alt=""></div></div>
				<div class="box"><div class="box_img"><img src="image/13.jpg" alt=""></div></div>
			</div>
		  </div>
		</div>
	<div class="footing">
      @饶狗狗
    </div>
  </div>
</body>
</html>