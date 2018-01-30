<?php
include("al.php"); 
?><?php

	session_start();
	$un=$_SESSION['username'];
	if($_SESSION['username']!="")
	{
		$con=mysql_connect("localhost","root","");
		mysql_select_db("alumni",$con);
		$res=mysql_query("select * from student where rno='$un';");
		$row=mysql_fetch_array($res);
		//$path=$row['path'];
		$sname=$row['sname'];
	?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome <?php echo $sname?></title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 

<!-- Custom jquery scripts -->
<script src="../admin/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
<img src="../admin/logo1.png" width="750" height="135" style="margin-bottom:px;margin-left:10px;margin-top:22px;">
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;"></h6>
<H6 style="margin-top:-15px;margin-left:750px;font-size:15px;color:#F8F8FF;" ></h6>
<H6 style="margin-top:30px;margin-left:175px;font-size:34px;color:#F8F8FF;"></b></h6>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;margin-right:5px;">&nbsp;<?php echo $sname;?></b> <font style="margin-top:-80px;" height="75" width="75"></td>
		<td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="../admin/images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="../admin/logout.php" id="logout"><img src="../admin/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
			
			<a href="cnpassword.php" id="acc-settings">Change Password</a>
					
			<div class="clear">&nbsp;</div>
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->



		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="profilemanage.php"><b>Your Personal Profile</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
	
		
		
		

		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="workmanage.php"><b>Your Work Details</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>


			<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="ffeedback.php"><b>Post Grievances</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		

		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="../admin/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="toplef"></th>
		<td id="tbl-border-t">&nbsp;</td>
		<th class="toprigh"></th>
		<th rowspan="3" class="sized"><img src="../admin/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-le"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				
				
					<center>
<table style="margin-left:;margin-right:;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
News & Updates
</td>

</tr>

	
	
<tr>
<marquee direction="down"  behavior="scroll" scrollamount="5" scrolldelay="500"  style="z-index:2;position:absolute;left:65px;top:350px;font-family:Times;font-size:12pt;color:#f00c00;height:754px;" onMouseOver="this.stop();" onMouseOut="this.start(); ">
							
					
				
									<ul>
										
									  <p>
									  
									    <?php
													$q = mysql_query("select * from uptest 
																		where location = '1' 
																				and status = 'A' ");
																				$num  = mysql_num_rows($q);
													if($num)
														{
															
																while($data  = mysql_fetch_array($q))
																{	
																?>
									  </p>
									  <p>
								    <a href="<?php echo $data[2]?><?php echo $data[1]?>" target="<?php   echo $data[5]?>">
								      <?php  echo $data[3]?>
									  </a></p>
									  <p>
									    <?php
																}
													}
										?>
								      </p>
									</ul>
    </marquee>
	
	
<marquee direction="down" scrollamount="5" scrolldelay="500"  style="z-index:2;position:absolute;left:872px;top:300px;font-family:Cursive;font-size:10pt;color:#c00c00;height:754px;" onMouseOver="this.stop();" onMouseOut="this.start(); ">
							
					
				
									<ul>
										
									  <p>
									  
									    <?php
													$q = mysql_query("select * from fund ");
																				$num  = mysql_num_rows($q);
													if($num)
														{
															
																while($data  = mysql_fetch_array($q))
																{	
																?>
									  </p>
									  <p>
								    <?php echo $data[1]?> Contributed Amount of Rs.<?php echo $data[5] ?> on the date<?php  echo $data[6]?>
								     
									  </a></p>
									  <p>
									    <?php
																}
													}
										?>
								      </p>
									</ul>
    </marquee>
<td align="center">&nbsp;</td>
</tr>
</table>
</center>		
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>

</body>
</html>
<?php
	}	
	else
	{
		header("location:../admin/login.php");
	}
?>
  <?php
				include("connect.php");
?>
  


