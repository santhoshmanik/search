<?php
include("al.php"); 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Alumni Personal Details</title>
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
<form action="" method="post" name="frm_login" id="frm_login" enctype="multipart/form-data">
          <table width="100%" border=0 align="center">
                  <tr >
                    <th colspan="5" id="formhedear">View Alumni Details</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Required  &nbsp; </span></div></td>
                  </tr>
                  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Alumni Personal ID : </strong></div></td>
                    <td>
<label>
            <select name="id" id="id">
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
	$Qry = mysql_query("SELECT id FROM alumni"); 
	while($count = mysql_fetch_array($Qry)) 
 	{?>
              <option value="<?php echo $count['id']; ?> "><?php echo $count['id']; ?></option>
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
$id=$_POST['id'];
$get= @mysql_query("SELECT * FROM alumni WHERE id= '$id' ")or die(mysql_error());
$num = @mysql_num_rows($get);
for($i=0;$i<$num;$i++)
{
$rno= @mysql_result($get,$i,'rno');
$sname= @mysql_result($get,$i,'sname');
$sgender= @mysql_result($get,$i,'sgender');
$user_name= @mysql_result($get,$i,'user_name');
$mstatus= @mysql_result($get,$i,'mstatus');
$spname= @mysql_result($get,$i,'spname');
$noc= @mysql_result($get,$i,'noc');
$emailid= @mysql_result($get,$i,'emailid');
$phone= @mysql_result($get,$i,'phone');
$address= @mysql_result($get,$i,'address');
}
}
?>

<form action="" method="post" name="frm_update" id="frm_update" enctype="multipart/form-data">
<table width="100%" border=0 align="center"><tr><td align="center" bgcolor="#0000FF" style="color:#FFFFFF" colspan="2"> Alumni Personal Details</td>
        </tr>
        <td>Alumni Personal ID</td>
              
              <td><input name="id" type="text" id="id"  width="200" value='<?php echo $id; ?>' readonly="true"/></td>
        </tr><tr></tr>   
<tr>
          <td>Reg.No</td>
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
<td width="128"><input type="textbox" name="user_name" id="user_name" value="<?php echo $user_name; ?>" maxlength="30" style="width:176px;"
onchange="document.getElementById('user_name').value=trim(this.value);"/></td>
            </tr> 
<tr></tr>   <tr>
          <td>Marital Status</td>
<td width="128"><input type="textbox" name="mstatus" id="mstatus" value="<?php echo $mstatus; ?>" maxlength="30" style="width:176px;"
onchange="document.getElementById('mstatus').value=trim(this.value);"/></td>
            </tr>  
  <tr></tr>  <tr>
          <td>Spouse Name</td>
<td width="128"><input type="textbox" name="spname" id="spname" value="<?php echo $spname; ?>" maxlength="30" style="width:176px;"
onchange="document.getElementById('spname').value=trim(this.value);"/></td>
            </tr>  
 
 <tr></tr><tr>
          <td>No of Child</td>
<td width="128"><input type="textbox" name="noc" id="noc" value="<?php echo $noc; ?>" maxlength="30" style="width:176px;"
onchange="document.getElementById('noc').value=trim(this.value);"/></td>
            </tr> 
 <tr></tr><tr><td>Email ID</td>
<td width="128"><input type="textbox" name="emailid" id="emailid" value="<?php echo $emailid; ?>" maxlength="30" style="width:176px;"
onchange="document.getElementById('emailid').value=trim(this.value);"/></td>
          </tr>
<tr></tr><tr>
<td>Phone No</td>
<td width="128"><input type="textbox" name="phone" id="phone" value="<?php echo $phone; ?>" maxlength="30" style="width:176px;" onchange="document.getElementById('phone').value=trim(this.value);"/></td> </tr>
<tr></tr><tr>
<td>Address</td>
<td width="128"><input type="textbox" name="address" id="address" value="<?php echo $address; ?>" maxlength="30" style="width:176px;" onchange="document.getElementById('address').value=trim(this.value);"/></td> </tr>
<tr><td></br></td></tr>   
<tr>
          <td>&nbsp;</td>
          <td><input id="submit" name="submit" type="submit" value="Update" Onclick="return done(this.form);hidediv();" />

</td>
</tr>
        <tr>
          <td align="center" bgcolor="#0000FF" style="color:#FFFFFF" colspan="2" ><?php if(@$_GET['status'])
	  {
	  	echo "Alumni Personal Details Updated";
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
 if($_POST['submit'])
 {
  $rno=$_POST['rno'];
  $sname=$_POST['sname'];
  $id=$_POST['id'];
 $user_name=$_POST['user_name'];
  $sgender=$_POST['sgender'];
  $mstatus=$_POST['mstatus'];
 $noc=$_POST['noc'];
  $spname=$_POST['spname'];
  $emailid=$_POST['emailid'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $query = mysql_query("UPDATE alumni SET mstatus='$mstatus',noc='$noc',emailid='$emailid',phone='$phone',address='$address',
                       spname='$spname' WHERE id='$id' AND user_name='$user_name'  ")
                       or die(mysql_error());
  echo "<script>alert('Updated sucessfully !!');</script>";
  echo "<script>window.location='alumni.php'</script>";
  }
?>



</body>
</html>
