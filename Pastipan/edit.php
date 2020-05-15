<?php

    include("db.php");
    
    if(isset($_GET ['id'])){

        $id = $_GET['id'];

        $query = "SELECT * FROM productos 
        WHERE Id = '$id'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $product = $row['Product_Name'];
            $cost = $row['Cost'];
            $date = $row['Expiration'];
            $type = $row['Type'];
        }
    }

    if(isset($_POST['Edit'])){
        $id=$_GET['id'];
        $product = $_POST['product'];
        $cost = $_POST['cost'];
        $date = $_POST['date'];

        $query = "UPDATE productos set Product_Name = '$product', Cost = '$cost',Expiration = '$date' WHERE Id = '$id'";

        mysqli_query($conn,$query);

        $_SESSION['message']='Product Edit Succesfully';
        $_SESSION['message_type']= 'warning';
        header("Location: stock.php");
    }
 
?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div clas="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="product" value="<?php echo $product;?>"
                        class="form-control" placeholder="Edit Product Name">
                        </div>
                    
                    <div class="form-group">
                        <input type="number" name="cost" value="<?php echo $cost;?>"
                        class="form-control" placeholder="Edit Cost">
                        </div>
                        <div class="form-group">
                        <input type="date" name="date" value="<?php echo $date;?>"
                        class="form-control" placeholder="Expiration">
                        </div>
                    
                    <button class="btn btn-success" name="Edit">
                        EDIT
                    </button>
                    
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("includes/footer.php")?>
