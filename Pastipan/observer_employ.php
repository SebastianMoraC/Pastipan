<?php

    include("db.php");
    
    if(isset($_GET ['id'])){

        $id = $_GET['id'];

        $query = "SELECT Id,Product_Name,Cost,(Cost*1.15) as precio,Expiration, (SELECT Proveedor FROM proveedor where Id=productos.Proveedor) as proveedor
        FROM productos 
        WHERE type = '$id' 
        ORDER BY Product_Name,precio";
        $result = mysqli_query($conn,$query);
      
    }

?> 
    
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PASTIPAN</title>
  <!--  BOOTSTRAP 4  -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
  crossorigin="anonymous">
  <script 
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
  crossorigin="anonymous">
  </script>
  <!--FONTS AWESOME-->
  <script src="https://kit.fontawesome.com/66700b79a3.js" 
  crossorigin="anonymous"></script>
 
</head>
<body>
<!--TITLE OF INDEX-->
    
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
      <a href="stock_employ.php" class="navbar-brand">PANADERIA PASTIPAN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" 
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="container p-10">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
        
      <li class="nav-item">
        <a href="index.php" class="nav-link" href="#">Log Out</a>
      </li>
      </ul>
      </div>
  
  </div>

</nav>

<div class="container p-5">
    <div class="row">
        <div class="col-md-4 " >
            <div class="card card-body">
                <!--Send Information-->
                <form action="sell_employ.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control"
                        placeholder="Product Name" autofocus>
                    </div>
                    <div class="form-group">
                    <input 
                        type="number" name="price" class="form-control"
                        placeholder="Price" autofocus>
                    </div>
                    
                    <!--SELL PRODUCT-->
                    <input type="submit" class="btn btn-success btn-block"
                    name="sell" value="SELL">
                </form>
            </div>
        </div>
    
    
        
   

        <div class="col-md-8">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            
                                <th>Product</th>
                                <th>Cost</th>
                                <th>Sale Price</th>
                                <th>Expiration</th>
                                <th>Provider</th>
                                <th>Actions</th>
                            </tr>   
                        </thead>
                    
                    <tbody>
                        <?php                       
                            
                            while($row=mysqli_fetch_array($result)){?>
                                <tr>
                                    <td><?php echo $row['Product_Name'];?></td> 
                                    <td><?php echo $row['Cost'];?></td> 
                                    <td><?php echo $row['precio'];?></td>
                                     
                                    
                                    <?php 
                                        $id1=$row['Id'];
                                        $expiration ="SELECT
                                                        DATEDIFF((SELECT Expiration FROM productos where Id = '$id1') ,
                                                                    Now()) as Expiracion";
                                        $resulte=mysqli_query($conn,$expiration);
                                        $row1 = mysqli_fetch_array($resulte);?>
                                        
                                        <?php if($row1['Expiracion']<0){?>
                                            <td class="table-danger">                                            
                                        <?php } ?>
                                        <?php if($row1['Expiracion']>0){?>
                                            <td>
                                           <?php 
                                        }?>
                                        
                                        <?php echo $row['Expiration'];?> 
                                         </td>
                                         <td><?php echo $row['proveedor'];?></td>

                                    <td><a href="" class="btn btn-info"> 

                                         <i class="fas fa-pencil-alt"></i>
                                         
                                         </a>
                                         <a href="" class="btn btn-danger"> 

                                         <i class="fas fa-trash-alt"></i>
                                         
                                         </a>
                                    </td>
                                </tr>       
                            <?php }?>
                            
                    
                    
                    </tbody>

        </div>
    </div>
</div>

<?php include("includes/footer.php")?>

