<?php
	include("../../../DBConnect.php");


	if(isset($_GET["id"]) == true)
	{
		$id = $_GET["id"];
		$firstname = $_GET["txtFirst_name"];
		$lastname = $_GET["txtLast_name"];
        $email = $_GET["txtEmail"];
        $phone = $_GET["txtPhonenumber"];
        $pass = $_GET["txtPassword"];
		
		$sql = "UPDATE `ebook`.`user` SET `First_Name` = '$firstname',`Last_Name`= '$lastname', `Email`='$email', `Phonenumber`='$phone', `Password`='$pass' WHERE User_Id = $id";
		DataProvider::ExecuteQuery($sql);	
	}
	DataProvider::ChangeURL('../../index.php?act=1');
?>
