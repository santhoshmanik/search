<?php
include("al.php"); 
?><?php
include ("connection.php"); 
if($_POST['submit']) 
{
    	$rno=$_REQUEST["rno"];
	$sname=$_REQUEST["sname"];
	$sdob=$_REQUEST["sdob"];
        $sgender=$_REQUEST["sgender"];
$sbatch=$_REQUEST["sbatch"];
$scourse=$_REQUEST["scourse"];
$user_name=$_REQUEST["user_name"];
	if(mysql_select_db("alumni",$con))
	{
	$query="insert into student values('".$rno."','".$sname."','".$sdob."','".$sgender."','".$sbatch."','".$scourse."','".$user_name."')";
  		$execute=mysql_query($query,$con);
  		$query1="insert into login_master(user_type_id,user_name,password) values('2','".$rno."','".$user_name."')";
  		$execute1=mysql_query($query1,$con);
  		if($execute)
  		{
			if($execute1)
  			{
    			header('Location:student.php?status=Updated'); 		
			}
			else
  			{
  			die("Error:".mysql_error());
  			}

		}
	}
  	  else
  	{
  		die("Error:".mysql_error());
  	}
        
}
?>