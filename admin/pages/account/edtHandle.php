<?php
	include("../../../DBConnect.php");
	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
        $name = $_GET["txtDisplay_name"];
        $email = $_GET["txtEmail"];
        $phone = $_GET["txtPhonenumber"];
        $pass = $_GET["txtPassword"];
		
		$sql = "UPDATE `ebook`.`user` SET `Display_Name` = '$ten', `Email`='$email', `Phonenumber`='$phone', `Password`='md5($pass)' WHERE User_Id = $id";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=1');
?>