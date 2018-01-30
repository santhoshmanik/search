<?php
include("al.php"); 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Meeting Details Management</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: x-large;
}
-->
</style>
</head>

<?php

	session_start();
	if($_SESSION['username']!="")
	{
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Welcome Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin Home Page</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />


<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->


<![if !IE 7]>


<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
<img src="../admin/logo.png" width="670" height="135" style="margin-bottom:px;margin-left:20px;margin-top:22px;">
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;"></h6>
<H6 style="margin-top:-15px;margin-left:750px;font-size:15px;color:#F8F8FF;" ></h6>
<H6 style="margin-top:30px;margin-left:175px;font-size:34px;color:#F8F8FF;"></b></h6>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;">&nbsp;Administrator </b><img src="image/admin1.png" style="margin-top:-50px;" height="60" width="70"></td>
		<td>
		</td>
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
			<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="cnpassword.php" id="acc-settings">Change Password</a>
				 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="current" ><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#"><b>Master Form</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="student.php">Student Details</a></li>
				<li><a href="alumni.php">Alumni Personal Details</a></li>
				<li><a href="alumniwork.php">Alumni Work Details</a></li>
				<li><a href="meeting.php">Meeting Details</a></li>
				<li><a href="matt.php">Meeting Attendance Details</a></li>
				<li><a href="fund.php">Fund Details</a></li>
<li><a href="suggestion.php">Suggestion Details</a></li>	
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		
		<div class="nav-divider">&nbsp;</div>
		<ul class="select"><li><a href="#"><b>Access</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="usermanage.php">Usertype</a></li>
				<li><a href="loginmanage.php">Loginuser</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		



<div class="nav-divider">&nbsp;</div>
		<ul class="select"><li><a href="#"><b>Alumi alert</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="alumnialert.php">Meeting Alert</a></li>
							 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>


			<div class="nav-divider">&nbsp;</div>
		<ul class="select"><li><a href="#"><b>Reports</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="alumnireport.php">Alumni Report</a></li>
				<li><a href="alumniworkreport.php">Alumni Work Report</a></li>
<li><a href="studentreport.php">Student Report</a></li>
<li><a href="meetingreport.php">Meeting Report</a></li>
<li><a href="mattreport.php">Meeting Attendance Report</a></li>
<li><a href="fundreport.php">Fund Report</a></li>
<li><a href="suggestionreport.php">Suggestion Report</a></li>
			<li><a href="afeedback.php">View Grievances</a></li>	 	 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>	
		
		<!--  start nav -->


</div>

<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

<div class="clear"></div>
		</div>
		
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->

	
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>



<?php
	}	
	else
	{
		header("location:login.php");
	}
?>


<table border="0"  style="margin: 50px auto;" align="center" bgcolor="#FFFFFF">
   
  <tr>
    <td align="center">

      </div>
      </div>

 
	<form action="insertmeeting.php" method="post">
      <table width="389" cellpadding="5" cellspacing="5">
        <tr>
          <td align="center" bgcolor="#0000FF" style="color:#FFFFFF" colspan="2"> Meeting Details</td>
        </tr>
        <td>Id</td>
              <?php
	include("connection.php");
	if(!$con)
	{
	 die("Error:not connected".mysql_error());
	}
	if(mysql_select_db("alumni",$con))
	{
	$Qry = mysql_query("SELECT ifnull(max(mid),0) as count FROM meeting"); 
	while($count = mysql_fetch_array($Qry)) 
 	{
		 @$max = $count['count']+1;
	}

	}
	?>
              <td><input name="mid" type="text" id="mid"  width="200" value='<?php echo $max; ?>' readonly="true"/></td>
        </tr><tr></tr>   
<tr>
          <td>Meeting Name</td>
<td><input name="mname" type="text" id="mname"  width="200"/></td>
        </tr>
            

<tr></tr>   <tr>
          <td>Scheduled for batch</td>
<td><select name="mbatch" id="mbatch">
	    <option value="2013-2016">2013-2016</option>
	    <option value="2014-2017">2014-2017</option>
	    <option value="2015-2018">2015-2018</option>
		<option value="2016-2019">2016-2019</option>
	    <option value="2017-2020">2017-2020</option>
	    <option value="2018-2021">2018-2021</option>
	<option value="2019-2022">2019-2022</option>
	    <option value="2020-2023">2020-2023</option>
	    <option value="2021-2024">2021-2024</option>
	    </select>			</td>
            </tr> 
<tr></tr>   <tr>
          <td>Scheduled for course</td>
<td><select name="mcourse" id="mcourse">
		<option value="BCA">BCA</option>
	    <option value="BCom">BCom</option>
		<option value="BSC CS">BSC CS</option>
	    <option value="BSC CT">BSC CT</option>
	    <option value="BSC IT">BSC IT</option>
	<option value="MCA">MCA</option>
	    <option value="MSC CS">MSC CS</option>
	<option value="MSC SS">MSC SS</option>
	    <option value="MSC IT">MSC IT</option>
	    
	    </select>			</td>
            </tr>   
   </tr><tr></tr>   
<tr>
          <td>Meeting Date</td>
<td><input name="mdate" type="text" id="mdate"  width="200"/></td>
        </tr>
 </tr><tr></tr>   
<tr>
          <td>Meeting Description</td>
<td><input name="mdesc" type="text" id="mdesc"  width="200"/></td>
        </tr>
   <tr></tr>     <tr>
          <td>&nbsp;</td>
          <td><input id="submit" name="submit" type="submit" value="save" />
            &nbsp;
            <input name="reset" type="reset" value="clear"/>
<a href="viewmeeting.php"> 
	    <input name="view" type="button" id="view" value="view" /></a></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#0000FF" style="color:#FFFFFF" colspan="2" ><?php if(@$_GET['status'])
	  {
	  	echo "Meeting Details Added";
	  }?>
            &nbsp;</td>

        </tr>
      </table>
    </form>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>





</body>
</html>
