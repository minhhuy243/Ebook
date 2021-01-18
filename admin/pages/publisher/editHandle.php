<?php
	include("../../../DBConnect.php");


	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
		$companyname = $_GET["txtCompany_Name"];
		
		$sql = "UPDATE `ebook`.`publishing_company` SET `Publishing_Company_Name` = '$companyname' WHERE `Publishing_Company_Id` = $id";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=2');
?>
