<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM productos 
        WHERE Id = '$id'";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message']='Product Delete Succesfully';
        $_SESSION['message_type']= 'danger';
        header("Location: stock.php");
    }

?>