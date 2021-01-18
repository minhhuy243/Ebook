<?php
	include("../../../DBConnect.php");


	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
		$categoryname = $_GET["txtCategory_Name"];
		
		$sql = "UPDATE `ebook`.`category` SET `Category_Name` = '$categoryname' WHERE `Category_Id` = '$id'";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=3');
?>
