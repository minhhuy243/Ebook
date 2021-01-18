<?php 

    session_start();

    if(isset($_POST['tenSP'])){
        $tenSP = $_POST['tenSP'];
        $soLuong = $_POST['soLuong'];
        $tongTien = 0;
        
        foreach ($_SESSION['cart'] as $key => $value){
            if($value['name'] == $tenSP){
                #Trừ đi tổng tiền của sp lúc chưa cập nhật lại số lượng
                $_SESSION['subTotal'] -= $_SESSION['cart'][$key]['quantity'] * $_SESSION['cart'][$key]['price'];

                #Cập nhật lại số lượng của sp đó
                $_SESSION['cart'][$key]['quantity'] = $soLuong;
                #Tính lại tổng tiền
                $tongTien = $soLuong * $_SESSION['cart'][$key]['price'];
                #Thêm tổng tiền sp đó vào SESSION tạm tính
                $_SESSION['subTotal'] += $tongTien;
            }
        }

        echo $tongTien;
    }
?>