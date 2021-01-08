<?php
	if(isset($_GET['id']) == false)
		DataProvider::ChangeURL('index.php?act=1');
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM user WHERE User_Id = $id";
	$bang = DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($bang);
?>

<form style="margin-top:100px; text-align: center;" action="pages/account/editHandle.php" method="get">
	<fieldset>
        <legend>Account info</legend>
        Name
        <input style="margin-left:100px; width: 300px" type="text" name="txtDisplay_name" value="<?php echo $dong["Display_Name"]; ?>" />
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        
    </fieldset>
    <fieldset>
        Email
        <input style="margin-left:104px; width: 300px"  type="text" name="txtEmail" value="<?php echo $dong["Email"]; ?>" />
    </fieldset>
    <fieldset>
        Password
        <input style="margin-left:77px; width: 300px"  type="text" name="txtPassword" value="<?php echo $dong["Password"]; ?>" />
    </fieldset>
    <fieldset>
        Phone Number
        <input style="margin-left:42px; width: 300px "  type="text" name="txtPhonenumber" value="<?php echo $dong["Phonenumber"]; ?>" />
    </fieldset>
    <fieldset style="padding-top: 15px">
        <input style="margin-right:10px; width: 65px" type="submit" value="Edit" />
        <input style="width: 65px" type="button" value="Cancel" onClick="location = 'index.php?act=1';" />
    </fieldset>
</form>