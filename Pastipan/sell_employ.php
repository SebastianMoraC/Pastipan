<?php
    include("db.php");
    if(isset($_POST['sell'])){
        $name_product=$_POST['name'];
        $price=$_POST['price'];
        $cost = $price/1.15;
        
        //Insert elements
        
        $query = "SELECT * FROM productos WHERE Product_Name= '$name_product' AND Cost = '$cost'";
        $result=mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);

        $Id_Product = $row['Id'];
        $Type = $row['Type'];
        $proveedor = $row['Proveedor'];

        $query2 = "SELECT now() as Date from ventas";
        $result2=mysqli_query($conn,$query2);
        $row2 = mysqli_fetch_array($result2);
        $Date = $row2['Date'];
        
        
        $query2 = "INSERT INTO ventas (Id_Product, Product_Name, Price,Type,Date,Proveedor) VALUES ('$Id_Product','$name_product', '$price', '$Type','$Date','$proveedor')";
        $result2 = mysqli_query($conn,$query2);

        $query3 = "DELETE FROM productos WHERE Id = '$Id_Product'";
        $result3 = mysqli_query($conn,$query3);


        

        if(!$result2){
            $_SESSION['message'] = 'Query Fail';
            $_SESSION['message_type'] = 'danger';

            header("Location: stock_employ.php");
        }
        else{
            
            
            $_SESSION['message'] = 'Product Sell';
            $_SESSION['message_type'] = 'success';

            header("Location: stock_employ.php");
    
        }
    }

?>