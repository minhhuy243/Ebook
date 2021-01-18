<?php

session_start();
include '..\DBConnect.php';	


if(isset($_POST['action'])){ 
        
	$product_id  = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    switch($_POST['action']){
        case 'add':
            if(isset($_SESSION['cart'][$product_id])){
                //if($quantity == 1)          
                    $_SESSION['cart'][$product_id]['quantity']++;
                //else
                   // $_SESSION['cart'][$product_id]['quantity'] += $quantity;
            }
                
            else{                  
                $sql = "SELECT P.*, C.Category_Name
                        FROM product P, category C
                        WHERE P.Category_Id = C.Category_Id AND P.Product_Id = '$product_id'";                
                $result = LoadData($sql);                  
                $product = array(
                    'category_id' => $result[0]["Category_Id"],
                    'category_name' => $result[0]["Category_Name"],
                    'name' => $result[0]["Name"],
                    'author' => $result[0]["Author"],
                    'price' => $result[0]["Price"],
                    'avatar' => $result[0]["Avatar"],
                    'quantity' => 1,
                );              
                   
                $_SESSION['cart'][$product_id] = $product;
            }
        break;

        case 'remove':
            if(isset($_SESSION['cart'][$product_id])){
                unset($_SESSION['cart'][$product_id]);                 
            }
            break;
    }      
}	
			
$output = '';
$tongtien = 0;

if(isset($_SESSION['cart']))
{
    foreach ($_SESSION['cart'] as $key => $value) 
    {																													
        $output .= 
        '<div class="product-widget">
            <div class="product-img">
                <img src="' . $value['avatar'] . '"' .  'alt="">
            </div>

            <div class="product-body">
                <h3 class="product-name"><a href="index.php?page=ChiTiet&id=' . $key . '">' . $value['name'] . '</a></h3>
                <h4 class="product-price"><span class="qty">'
                    . $value['quantity'] .
                    'x</span>' . number_format($value['price'], 0, '.', '.') . '</h4>
            </div>
            
            <button class="delete" onclick="cartAction(\'remove\',\'' . $key . '\')" ><i class="fa fa-close"></i></button>
        </div>';

        $tongtien += $value['price'] * $value['quantity'];
    }

    $_SESSION['subTotal'] = $tongtien;
}

$slSanPham = count($_SESSION['cart']);

$data = array('products' => $output, 
              'subtotal' => number_format($tongtien, 0, '.', '.'),
              'qty' => $slSanPham,
            );
echo json_encode($data);

?>