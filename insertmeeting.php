<?php
include("al.php"); 
?><?php
include ("connection.php"); 
if($_POST['submit']) 
{
    	$mid=$_REQUEST["mid"];
	$mname=$_REQUEST["mname"];
        $mbatch=$_REQUEST["mbatch"];
	$mcourse=$_REQUEST["mcourse"];
	$mdate=$_REQUEST["mdate"];
	$mdesc=$_REQUEST["mdesc"];
	
	if(mysql_select_db("alumni",$con))
	{
	
  		$query="insert into meeting values('".$mid."','".$mname."','".$mbatch."','".$mcourse."','".$mdate."','".$mdesc."')";
  		$execute=mysql_query($query,$con);
  
  	if($execute)
  	{
    	header('Location:meeting.php?status=Updated'); 		
	}
	
  	}
  	else
  	{
  	die("Error:".mysql_error());
  	}
       
}
?>