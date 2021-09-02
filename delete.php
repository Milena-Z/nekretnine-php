<?php
    require_once 'db/config.php';
    if(!$_GET['id']){
        echo 'error';
    }else{
        //Uzmi vrednosti id-jeva
        $id =$_GET['id'];
        //Pozovi delete funkciju
        $result = $crud ->deleteApplication($id);

        if($result){
            //Redirect
            header("Location: applications.php");
        }
        else{
            echo 'error';
        }
    }
?>