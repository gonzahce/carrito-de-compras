<?php

if (isset($_POST['add_to_cart'])){

    if(isset($_SESSION['cart'])){

        $session_array_id = array_column($_SESSION['cart'], 'id');

                 
            if(!in_array($_GET['id'], $session_array_id)){
                $session_array = array(
                    'id_producto' => $_GET['id'],
                    "wp-nombre" => $_POST['wp-nombre'],
                    "wp-precio" => $_POST['wp-precio'],
                    "wp-desc" => $_POST['wp-desc'],
                    "wp-img" => $_POST['wp-img'],
                    "cantidad" => $_POST['cantidad']
                );
        
                $_SESSION['cart'][] = $session_array;
            }

    }else{
        $session_array = array(
            'id_producto' => $_GET['id'],
            "wp-nombre" => $_POST['wp-nombre'],
            "wp-precio" => $_POST['wp-precio'],
            "wp-desc" => $_POST['wp-desc'],
            "wp-img" => $_POST['wp-img'],
            "cantidad" => $_POST['cantidad']
        );


        $_SESSION['cart'][] = $session_array;

    }
    header("Location:index.php");
}

if(isset($_GET['action'])){

    if($_GET['action'] == "clearall"){
        unset($_SESSION['cart']);
        header("Location:index.php");
    }

    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if ($value['id_producto'] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                header("Location:index.php");
            }
        }
    }

    if ($_GET['action'] == 'comprar') {
        
    }
}

?>