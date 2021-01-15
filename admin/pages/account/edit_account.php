<div class="content-page">
<!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                        <li class="breadcrumb-item active">Edit Account</li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Account</h4>
            </div>
        </div>
    </div>     
<?php
	if(isset($_GET['id']) == false)
		DataProvider::ChangeURL('index.php?act=1');
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM user WHERE User_Id = $id";
	$bang = DataProvider::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($bang);
?>

<form style="margin: 0 auto; width:300px; font-size: 14px " action="pages/account/editHandle.php" method="get">
	<fieldset>
        <legend>Account info</legend>
        Name
        <input style="margin-bottom:7px;" class="form-control" type="text" name="txtDisplay_name" value="<?php echo $dong["Display_Name"]; ?>" />
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        
    </fieldset>
    <fieldset>
        Email
        <input style="margin-bottom:7px;" class="form-control" type="text" name="txtEmail" value="<?php echo $dong["Email"]; ?>" />
    </fieldset>
    <fieldset>
        Password
        <input style="margin-bottom:7px;" class="form-control" type="text" name="txtPassword" value="<?php echo $dong["Password"]; ?>" />
    </fieldset>
    <fieldset>
        Phone Number
        <input style="margin-bottom:7px;" class="form-control" type="text" name="txtPhonenumber" value="<?php echo $dong["Phonenumber"]; ?>" />
    </fieldset>
    <fieldset style="padding-top: 15px; text-align: center ">
        <input class="btn btn-danger" style="margin-right: 10px; width: 70px; height: 35px" type="submit" value="Edit"/>
        <input class="btn btn-danger" style="width: 70px; height: 35px" type="button" value="Cancel" onClick="location = 'index.php?act=1';" />
    </fieldset>
</form>
</div>