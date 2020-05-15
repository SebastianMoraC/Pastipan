<?php
    include("db.php");
    if(isset($_POST['save_product'])){
        $name_product=$_POST['name'];
        $cost=$_POST['cost'];
        $date=$_POST['date'];
        $type_product=$_POST['type'];
        $proveedor=$_POST['proveedor'];
        $query2="SELECT Id FROM proveedor WHERE Proveedor='$proveedor'";
        $result1=mysqli_query($conn,$query2);
        if(mysqli_num_rows($result1) == 1){
            $query = "INSERT INTO productos (Product_Name, Cost, Type,Expiration,Proveedor) 
            VALUES ('$name_product', '$cost', (SELECT Id FROM type where Product='$type_product'),'$date',(SELECT Id FROM proveedor where Proveedor='$proveedor'))";
        
            $result=mysqli_query($conn,$query);
            if(!$result){
                $_SESSION['message'] = 'Query Fail';
                $_SESSION['message_type'] = 'danger';

                header("Location: stock_employ.php");
            }
            else{
                $_SESSION['message'] = 'Product Saved';
                $_SESSION['message_type'] = 'success';

                header("Location: stock_employ.php");
        
            }
        }
        else{
            $query3 = "INSERT INTO proveedor (Proveedor) VALUES ('$proveedor')";
            $result2 = mysqli_query($conn,$query3);
            $query = "INSERT INTO productos (Product_Name, Cost, Type,Expiration,Proveedor) 
            VALUES ('$name_product', '$cost', (SELECT Id FROM type where Product='$type_product'),'$date',(SELECT Id FROM proveedor where Proveedor='$proveedor'))";
            $query_delete = "DELETE FROM proveedor  WHERE Proveedor = '$proveedor'";
            
            $result=mysqli_query($conn,$query);
            if(!$result){
                $result_delete = mysqli_query($conn,$query_delete);
                $_SESSION['message'] = 'Query Fail';
                $_SESSION['message_type'] = 'danger';

                header("Location: stock_employ.php");
            }
            else{
                
                $_SESSION['message'] = 'Product Saved';
                $_SESSION['message_type'] = 'success';

                header("Location: stock_employ.php");
        
            }

        }
    }

?>