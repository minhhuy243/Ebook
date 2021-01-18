<?php

    if(isset($_POST['grecaptcharesponse'])){
        //your site secret key
        $secret = '6LdctyUaAAAAAFxdcyy8V5bdC1pJZrUrDdaGAZtE';

        $captcha = $_POST['grecaptcharesponse'];
                
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdctyUaAAAAAFxdcyy8V5bdC1pJZrUrDdaGAZtE&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
             
        $result = json_decode($response);
        if($result === false)
            echo 'Vui lòng nhập Captcha';
        else
            echo 'Thành công';                   
    }
?>