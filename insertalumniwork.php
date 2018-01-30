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
	$wid=$_REQUEST["wid"];
	$wstatus=$_REQUEST["wstatus"];
	$wcname=$_REQUEST["wcname"];
	$wposition=$_REQUEST["wposition"];
	$wfield=$_REQUEST["wfield"];
	

	if(mysql_select_db("alumni",$con))
	{
	
  		$query="insert into alumni_work values('".$rno."','".$sname."','".$sgender."','".$user_name."','.$wid.','".$wstatus."','".$wcname."','".$wposition."','".$wfield."')";
  		$execute=mysql_query($query,$con);
  
  	if($execute)
  	{
    	header('Location:alumniwork.php?status=Updated'); 		
	}
	
  	}
  	else
  	{
  	die("Error:".mysql_error());
  	}
       
}
?>