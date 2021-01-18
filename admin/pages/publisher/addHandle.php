<?php
	include("../../../DBConnect.php");


	if(isset($_GET["txtCompany_Name"]) == true)
	{
        
        $name = $_GET["txtCompany_Name"];
        
		
		$sql = "INSERT INTO `ebook`.`publishing_company`(`Publishing_Company_Name`) VALUES('$name')";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=2');
?>
