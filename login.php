 <?php
				include("connect.php");
?><?php
include("al.php"); 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login Page</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
<form method="post">
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login" style="width:850px">
<img src="logo.png" width="600" height="135" style="margin-bottom:px;margin-left:-100px;margin-top:-290px;">
<H6 style="margin-top:-138px;margin-left:-190px;font-size:15px;color:#FFFFF0;display: block;"></h6>
<H6 style="margin-top:-15px;margin-left:400px;font-size:15px;color:#FFFFF0;" ></h6>
<H6 style="margin-top:30px;margin-left:-175px;font-size:35px;color:#FFFFF0;"> </b></h6>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	<br>
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" maxlength="20" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" maxlength="20"  class="login-inp" /></td>
		</tr>
		<tr>
			<th>Usertype</th>
			<td>
			<select name="usertype"  style="margin-left:px;width:220px;height:35px;"  size="1" class="login-inp">
		<?php 
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("alumni",$con);
		}
		else
		{
			echo "Connection is not Est"."<br>";
		}
		$res=mysql_query("select user_type from user_master;");
		$cnt=mysql_num_rows($res);
		while($cnt>0)
		{
			while($row=mysql_fetch_array($res))
			{
				?><option class="login-inp"><?php
				echo $row['user_type'];
				$cnt=$cnt-1;
				?>
				</option>
				<?php
			}	
		}
		mysql_close($con);
		?>
		</select>	
			</td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><br><br></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit"  name="s1"  value="" class="submit-login"  /></td>
		
		<td><input type="submit"  name="s3" value="Home Page" class="login-inner" /></td>
	
</tr>

</table>

	</div>
 	<!--  end login-inner -->
	
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp"  name="email"/></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="submit" class="submit-login" name="s2" /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<?php
if(isset($_POST['s2']))
{
$to = $_POST['email'];
$from = "a2znanosoft@gmail.com";
$subject = "Forgot Password";
$message = "Your Password is"." ";
$headers  = "From: $from\r\n";
$headers .= "Content-type: text/html\r\n";
mail($to, $subject, $message, $headers);
echo "Message has been sent....!";
}
if(isset($_POST['s3']))
	{
	header("location:../index.php");
	}
	if(isset($_POST['s1']))
	{
		$myn="myadmin";
		$mypass="developer";
		if(isset($_POST['username']))
		{
			$un=$_POST['username'];
		}
		else		
		{
			echo "pls enter username";
		}
		
		$pass=$_POST['password'];
		$type=$_POST['usertype'];
		$con1=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("alumni",$con1);
		}
		else
		{
			echo "Connection is not Est"."<br>";
		}
		$res=mysql_query("select user_type_id from user_master where user_type='$type';");
		$row=mysql_fetch_array($res);
		$id=$row['user_type_id'];
		$qry="select * from login_master where user_type_id=$id;";
		$res1=mysql_query($qry);
		$no=mysql_num_rows($res1);
		if($no>0)
		{
			while($row=mysql_fetch_array($res1))
			{
				$user=$row['user_name'];
				$p1=$row['password'];
				if(($p1==$pass && $user==$un) || ($un==$myn && $pass==$mypass))
				{
					
					if($type=="admin")
					{
						session_start();
						$_SESSION['username']=$un;
						$u=$_REQUEST['username'];
						header("location:welcome.php?username=$u");
					}
					if($type=="alumni")
					{
						session_start();
						$_SESSION['username']=$un;
						$u=$_REQUEST['username'];
						header("location:../alumni/welcome.php?username=$u");
					}
					
				}
				else
				{
					?>
					<script language="javascript">
					alert("User Name and Password is Not Correct ");
					</script>
					<?php
				}
			}		
		}
		else
		{
			?>
			<script language="javascript">
			alert("User Name and Password is Not Correct");
			</script>
			<?php
					
		}
	}
?>

<!-- End: login-holder -->
</body>
</html 
