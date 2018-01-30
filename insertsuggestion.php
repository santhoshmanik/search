<?php
include("al.php"); 
?><?php
include ("connection.php"); 
if($_POST['submit']) 
{
    	
	$rno=$_REQUEST["rno"];
	$sname=$_REQUEST["sname"];
        $sbatch=$_REQUEST["sbatch"];
	$sgender=$_REQUEST["sgender"];
	$user_name=$_REQUEST["user_name"];
$fid=$_REQUEST["fid"];
	$famt=$_REQUEST["famt"];
	$fdate=$_REQUEST["fdate"];
	

	if(mysql_select_db("alumni",$con))
	{
	
  		$query="insert into suggestion values('".$rno."','".$sname."','".$sbatch."','".$sgender."','".$user_name."','".$fid."','".$famt."','".$fdate."')";
  		$execute=mysql_query($query,$con);
  
  	if($execute)
  	{
    	header('Location:suggestion.php?status=Updated'); 		
	}
	
  	}
  	else
  	{
  	die("Error:".mysql_error());
  	}
       
}
?>