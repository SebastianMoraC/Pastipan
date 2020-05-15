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
    
<?php include("includes/header.php")?>
<div class="container p-5">
    <div class="row">
        <div class="col-md-4 " >
            <div class="card card-body">
                <!--Send Information-->
                <form action="sell.php" method="POST">
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

                                    <td><a href="edit.php?id=<?php echo $row['Id']?>" class="btn btn-info"> 

                                         <i class="fas fa-pencil-alt"></i>
                                         
                                         </a>
                                         <a href="delete.php?id=<?php echo $row['Id']?>" class="btn btn-danger"> 

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

