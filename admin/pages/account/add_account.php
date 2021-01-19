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
                        <li class="breadcrumb-item active">Add Account</li>

                    </ol>
                </div>
                <h4 class="page-title">Add Account</h4>
            </div>
        </div>
    </div>     
<!-- end page title --> 
    <form style="margin: 0 auto; width:300px; font-size: 14px " action="pages/account/addHandle.php" method="get">
    
        <fieldset>
            First Name
            <input style="margin-bottom: 7px" class="form-control" type="text" name="txtFirst_name" required="" placeholder="Enter your first name"  />
            <input type="hidden" name="id"  />
            
        </fieldset>
        <fieldset>
            Last Name
            <input style="margin-bottom: 7px" class="form-control" type="text" name="txtLast_name" required="" placeholder="Enter your last name"  />
            
        </fieldset>
        <fieldset>
            Email
            <input style="margin-bottom: 7px" class="form-control"  type="text" name="txtEmail" required="" placeholder="Enter your email"  />
        </fieldset>
        <fieldset>
            Password
            <input style="margin-bottom: 7px" class="form-control"  type="password" name="txtPassword"  required="" placeholder="Enter your password" />
        </fieldset>
        <fieldset>
            Address
            <input style="margin-bottom: 7px; word-wrap=break-word;" class="form-control" type="text" name="txtAddress" required="" placeholder="Enter your address"  />
            
        </fieldset>
        <fieldset>
            Phone Number
            <input style="margin-bottom: 7px" class="form-control"  type="text" name="txtPhonenumber" required="" placeholder="Enter your phone number"  />
        </fieldset>
        <fieldset>
            Role
            </br>
            <select style="margin-bottom: 7px; width: 300px; height: 36px;  border-radius: 4px; background: #58616e; color: white" id="RoleSelect" name="RoleSelect"   >
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
        </fieldset>

        <fieldset style="padding-top: 20px; text-align: center">
            <input class="btn btn-danger" style="margin-right:10px; width: 70px"  type="submit" value="Add" />
            <input class="btn btn-danger" style="width: 70px" type="button" value="Cancel" onClick="location = 'index.php?act=1';" />
        </fieldset>

    </form>

</div>