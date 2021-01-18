<?php
	include("../../../DBConnect.php");


	if(isset($_GET["txtCategory_Id"]) == true)
	{
        $id = $_GET["txtCategory_Id"];
        $name = $_GET["txtCategory_Name"];
        
		$sql = "INSERT INTO `ebook`.`category`(`Category_Id`, `Category_Name`) VALUES('$id','$name')";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=3');
?>
