<?php
include("al.php"); 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alumni Work Details Management</title>
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









	
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>

<table border="0"  style="margin: 50px auto;" align="center" bgcolor="#FFFFFF">
   
  <tr>
    <td align="center">
<form action="" method="post" name="frm_login" id="frm_login" enctype="multipart/form-data">
          <table width="100%" border=0 align="center">
                  <tr >
                    <th colspan="5" id="formhedear">Alumni Work Details</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Required  &nbsp; </span></div></td>
                  </tr>
                  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Student Registration ID : </strong></div></td>
                    <td>
<label>
            <select name="rno" id="rno">
              <?php 
include("connection.php");

if($con)
{
}
else
{
 die("Error:not connected".mysql_error());
}
if(mysql_select_db("alumni",$con))
	{
	$Qry = mysql_query("SELECT rno FROM student"); 
	while($count = mysql_fetch_array($Qry)) 
 	{?>
              <option value="<?php echo $count['rno']; ?> "><?php echo $count['rno']; ?></option>
              <?php }

	}

?>
            </select>
          </label>

</td>
                  </tr>
              <tr>
                 <td colspan="3" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" id="submitMain" name="submitMain" value="Display" Onclick="return done(this.form);hidediv();" />
                 &nbsp;&nbsp;&nbsp;
                 </td>
              </tr>
		<tr><td></br></td></tr>
              </table>
        </form>
      </div>
      </div>

 <?php
   if($_POST['submitMain'])
   {
    $rno=$_POST['rno'];
    $get= @mysql_query("SELECT * FROM student WHERE rno= '$rno' ")or die(mysql_error());
    $num = @mysql_num_rows($get);
    for($i=0;$i<$num;$i++)
    {
     $rno= @mysql_result($get,$i,'rno');
     $sname= @mysql_result($get,$i,'sname');
     $sgender= @mysql_result($get,$i,'sgender');
     $user_name= @mysql_result($get,$i,'user_name');
    }
   }
 ?>
	<form action="insertalumniwork.php" method="post">
      <table width="589" cellpadding="5" align="center" cellspacing="5">
        <tr>
          <td align="center" bgcolor="#0000FF" style="color:#FFFFFF" colspan="2"> Alumni Work Details</td>
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
	$Qry = mysql_query("SELECT ifnull(max(wid),0) as count FROM alumni_work"); 
	while($count = mysql_fetch_array($Qry)) 
 	{
		 @$max = $count['count']+1;
	}

	}
	?>
              <td><input name="wid" type="text" id="wid"  width="200" value='<?php echo $max; ?>' readonly="true"/></td>
        </tr><tr></tr>   
<tr>
          <td >Reg.No</td>
<td width="128"><input type="textbox" name="rno" id="rno"  value="<?php echo $rno; ?>" maxlength="30" style="width:176px;"
                                      onchange="document.getElementById('rno').value=trim(this.value);"/></td>
        </tr>
            
<tr></tr>   
<tr>
          <td>Alumni Name</td>
<td width="128"><input type="textbox" name="sname" id="sname"  value="<?php echo $sname; ?>" maxlength="30" style="width:176px;"
                                      onchange="document.getElementById('sname').value=trim(this.value);"/></td>
        </tr>
<tr></tr>   
<tr>
          <td>Gender</td>
<td width="128"><input type="textbox" name="sgender" id="sgender"  value="<?php echo $sgender; ?>" maxlength="30" style="width:176px;"
                                      onchange="document.getElementById('sgender').value=trim(this.value);"/></td>
        </tr>
    <tr></tr><tr>
          <td>UserName</td>
<td width="128"><input type="password" name="user_name" id="user_name" value="<?php echo $user_name; ?>" maxlength="30" style="width:176px;"
onchange="document.getElementById('user_name').value=trim(this.value);"/></td>
            </tr> 
<tr></tr>   <tr>
          <td>work Status</td>
<td><select name="wstatus" id="wstatus">
	    <option value="Employed">Employed</option>
	    <option value="Self-Employed">Self-Employed</option>
	    <option value="Business">Business</option>
 <option value="Unemployed">Unemployed</option>
	    </select>			</td>
            </tr>  
  <tr></tr>  <tr>
          <td>Company Name</td>
<td width="128"><input type="textbox" name="wcname" id="wcname"  style="width:176px;"/></td>
            </tr>  
 
 <tr></tr><tr>
          <td>Work Position</td>
<td><select name="wposition" id="wposition">
	    <option value="Admin">Admin</option>
	    <option value="HR">HR</option>
	    <option value="R&D">R&D</option>
		<option value="QC">QC</option>
<option value="Testing">Testing</option>
<option value="Other">Other</option>

	    </select>			</td>
            </tr> 
 <tr></tr><tr>
          <td>Field of experience</td>
<td><select name="wfield" id="wfield">
	    <option value="Hardware">Hardware</option>
	    <option value="Programming">Programming</option>
	    <option value="Testing">Testing</option>
		<option value="Manufacturing">Manufacturing</option>
<option value="Accounts">Accounts</option>
<option value="Others">Others</option>

	    </select>			</td>
   </tr> 
 
   <tr><td></br></td></tr>     <tr>
          <td>&nbsp;</td>
          <td><input id="submit" name="submit" type="submit" value="save" />
            &nbsp;&nbsp;
            <input name="reset" type="reset" value="clear"/>&nbsp;&nbsp;<a href="viewalumniwork.php"> 
	    <input name="view" type="button" id="view" value="view" /></a></td>

        </tr>
        <tr>
          <td align="center" bgcolor="#0000FF" style="color:#FFFFFF" colspan="2" ><?php if(@$_GET['status'])
	  {
	  	echo "Alumni Work Details Added";
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

<?php
	}	
	else
	{
		header("location:login.php");
	}
?>







</body>
</html>
