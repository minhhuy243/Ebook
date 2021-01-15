<?php
	include("../../../DBConnect.php");


	if(isset($_GET["txtDisplay_name"]) == true)
	{
        
        $name = $_GET["txtDisplay_name"];
        $email = $_GET["txtEmail"];
        $phone = $_GET["txtPhonenumber"];
        $pass = md5($_GET["txtPassword"]);
        $role = $_GET["RoleSelect"];
		
		$sql = "INSERT INTO `ebook`.`user`(`User_Role`, `Email`, `Password`, `Display_Name`, `Phonenumber`) VALUES( '$role', '$email', '$pass', '$name', '$phone')";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=1');
?>
