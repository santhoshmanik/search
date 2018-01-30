<?php
include("al.php"); 
?><?php
include ("connection.php"); 
if($_POST['submit']) 
{
    	$rno=$_REQUEST["rno"];
	$sname=$_REQUEST["sname"];
        $sgender=$_REQUEST["sgender"];
	$user_name=$_REQUEST["user_name"];
$mid=$_REQUEST["mid"];
	$attid=$_REQUEST["attid"];
	$astatus=$_REQUEST["astatus"];
	

	if(mysql_select_db("alumni",$con))
	{
	
  		$query="insert into mattendance values('".$rno."','".$sname."','".$sgender."','".$user_name."','".$mid."','".$attid."','".$astatus."')";
  		$execute=mysql_query($query,$con);
  
  	if($execute)
  	{
    	header('Location:matt.php?status=Updated'); 		
	}
	
  	}
  	else
  	{
  	die("Error:".mysql_error());
  	}
      
}
?>