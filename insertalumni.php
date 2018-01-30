<?php
include("al.php"); 
?><?php
include ("connection.php"); 
if($_POST['submit']) 
{
    	$id=$_REQUEST["id"];
	$rno=$_REQUEST["rno"];
	$sname=$_REQUEST["sname"];
        $sgender=$_REQUEST["sgender"];
	$user_name=$_REQUEST["user_name"];
	$mstatus=$_REQUEST["mstatus"];
	$spname=$_REQUEST["spname"];
	$noc=$_REQUEST["noc"];
	$emailid=$_REQUEST["emailid"];
	$phone=$_REQUEST["phone"];
	$address=$_REQUEST["address"];

	if(mysql_select_db("alumni",$con))
	{
	
  		$query="insert into alumni values('.$id.','".$rno."','".$sname."','".$sgender."','".$user_name."','".$mstatus."','".$spname."','".$noc."','".$emailid."','".$phone."','".$address."')";
  		$execute=mysql_query($query,$con);
  
  	if($execute)
  	{
    	header('Location:alumni.php?status=Updated'); 		
	}
	
  	}
  	else
  	{
  	die("Error:".mysql_error());
  	}
       
}
?>