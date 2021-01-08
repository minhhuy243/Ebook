<?php 
session_start();

    if(isset($_POST['tenSP'])){
        $tenSP = $_POST['tenSP'];
        $soLuong = $_POST['soLuong'];
        $tongTien = 0;
        
        foreach ($_SESSION['cart'] as $key => $value){
            if($value['name'] == $tenSP){
                $_SESSION['cart'][$key]['quantity'] = $soLuong;
                $tongTien = $_SESSION['cart'][$key]['quantity'] * $_SESSION['cart'][$key]['price'];
                $_SESSION['subTotal'] += number_format($tongTien, 0, '.', '.') ;
            }
        }

        echo $tongTien;
    }
?>