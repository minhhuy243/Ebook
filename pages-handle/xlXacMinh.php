<?php
    //session_start();
    //include './DBConnect.php';

    $verification_code = $_GET['code'];
    $sql = "SELECT * FROM user WHERE Verification_Code = '$verification_code'";
    $result = LoadData($sql);

    if(count($result) > 0){
        if($result[0]['Verification_Code'] == $verification_code){
            $sql = "UPDATE user SET Verified = '1' WHERE Verification_Code = '$verification_code'";
            $result = Insert($sql);
            if($result == true){
                header('Location: ../index.php?page=ThongBao&message=XacMinhThanhCong');  
            }
            else{
                header('Location: ../index.php?page=ThongBao&message=XacMinhThatBai');  
            }
        }
    }
?>