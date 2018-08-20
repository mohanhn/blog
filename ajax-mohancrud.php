<?php 
session_start();
require_once("assets/include/membersite_config.php");
 
 if(isset($_POST['saveall'])=="save")
{
	$save=$_POST['saveall'];
	if(isset($_POST['postname']))
	{
		$postname = $_POST['postname'];
	}else
	{
		$postname = '';
	}
	
	if(isset($_POST['descriptio']))
	{
		$description = $_POST['descriptio'];
	}else
	{
		$description = '';
	}

	if(isset($_POST['type']))
	{
		$type = $_POST['type'];
	}else
	{
		$type = '';
	}

	$insertblog = $fgmembersite->insrtintotable($postname,$description,$type);
	echo $insertblog;
}
 ?>