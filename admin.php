<?php 
session_start();
if(isset($_GET['mod'])){
    switch ($_GET['mod']) {
        case 'page':
            include_once"controler/page.php";
            break;
        case 'user':
            include_once"controler/user.php";
            break;
            case 'product':
                include_once"controler/product.php";
            break;
        default:
            
            break;
    }
}else{
    // header("location: admin.php?mod=page&act=dashboard");
}

?>