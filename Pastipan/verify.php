<?php

if(isset($_POST['Login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    

    if(($username=="Administrador") AND ($password=="admin")){
        header("Location: stock.php");
    }
    else if(($username=="Empleado") AND ($password=="empleado")){
        header("Location: stock_employ.php");
    }
    else{
        header("Location: index.php");
    }
}

?>