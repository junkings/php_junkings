<?php
    session_start();
//echo $_SESSION['username'];
    if(!isset($_SESSION['username']))
    {
        $flag=1;
    }
    else
    {
        $flag = 0;
    }
?>
<!DOCTYPE html>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css_t/style.css" rel="stylesheet">
		<link href="css_t/daoh.css" rel="stylesheet"> 
	</head>	    
    <body>
		<!--开头-->
		<div class = "daohang">
			<!--<div class = "dh-img">
				<img src="../images/daohang.jpg"/>
			</div>-->
			<div class="dh-name">
				<h1>jun_kings</h1>
			</div>
        	
			<div class = "dh-type">
				<ul>
	    			<li><a href="index.php">主页</a></li>
					<li><a href="kimdaily.php">日志</a></li>
					<li><a href="kimphoto.php">相册</a></li>
					<li><a href="kimrf.php">2015年计划</a></li>
					<?php
		            	if($flag)
                			echo '<li><a href="login.php">登陆</a></li>';
                        else
                            echo '<li><a href="usercenter.php">用户中心</a></li>';
                    ?>

				</ul>
			</div>
		</div>


		<!--content-->
		<div class = "mycontent">
			<div class = "intro_content">
				<div class="resume_c">
					<h2>Resume</h2>
					<img src="images/head.JPG"/>
					<p>金军，男</p><!--，汉族，1991年1月出生，浙江绍兴人。</p>
				
					<!--<p>硕士在读，现位于陕西西安雁塔区西安电子科技大学北校区，主楼三区417。师从缑水平副教授，硕士研究方向：研究医学图像处理。</p>-->
					<p>熟悉图像处理算法、机器学习算法、高性能计算</p>
					<p>计算机技能：C = Matlab &gt; C++ &gt; Python = PHP = Html = Css = MySQL</p>
					<p>摩羯座，热爱运动，喜欢下棋，宅男一枚</p>	
				</div>
				<div class="education_c">
					<h3>Education:</h3>
					<p>小学：柯桥小学</p>
					<p>初中：实验中学</p>
					<p>高中：柯桥中学</p>
					<p>本科：西安电子科技大学</p>
					<p>硕士：西安电子科技大学</p>
				</div>
			</div>
			<div class = "content1">
				<h2>travel</h2>
				<p>Love The World</p>
				<img src="images/travel.jpg"/>
			</div>
			<div class="content2">
				<h2>Reading</h2>
				<p>Read The Book</p>
				<img src="images/reading.jpg"/>
			</div>
			<div class = "content3">
				<h2>Eating</h2>
				<p>fish ,meat and rice</p>
				<img src = "images/eating.jpg"/>
			</div>
			<div class="poem">
				<p>....顾虑就使我们都变成了懦夫，使得那果断的本色蒙上了一层思虑的惨白的容颜，本来可以做出伟大的事业，由于思虑就化为乌有了，丧失了行动的能力。</p>
			</div>
		</div>

		<div class="dibu">
			<p>Copyright (C) 2014-2026 版权所有:king</p>		
		</div>
		<?php
			$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
			if(!$con){
				echo "failed";
			}
			mysql_close($con);
		?>
    </body>
</html>