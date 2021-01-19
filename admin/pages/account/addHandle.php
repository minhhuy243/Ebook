<?php
	include("../../../DBConnect.php");


	if(isset($_GET["txtFirst_name"]) == true)
	{
        $firstname = $_GET["txtFirst_name"];
		$lastname = $_GET["txtLast_name"];
		$address = $_GET["txtAddress"];
        $email = $_GET["txtEmail"];
        $phone = $_GET["txtPhonenumber"];
        $pass = md5($_GET["txtPassword"]);
        $role = $_GET["RoleSelect"];
		
		$sql = "INSERT INTO `ebook`.`user`(`User_Role`, `Email`, `Password`,`Last_Name`, `First_Name`, `Address`, `Phonenumber`) 
			VALUES( '$role', '$email', '$pass', '$lastname','$firstname', '$address', '$phone')";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=1');
?>
