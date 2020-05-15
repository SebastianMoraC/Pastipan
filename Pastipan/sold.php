<?php include("db.php");?>
<?php
    $query = "SELECT Product_Name,Price,(SELECT Proveedor FROM proveedor where Id=ventas.Proveedor) as Provider,Date FROM ventas ORDER BY Date desc ";
    $result = mysqli_query($conn,$query);
    
    ?>
<?php include("includes/header.php")?>
    <div class="container p-5">
        <div class="col-md-6 mx-auto">
        
            <table class="table table-striped">
                <thead>
                    <tr>
                                
                        <th>Product</th>
                        <th>Sale Price</th>
                        <th>Provider</th>
                        <th>Date</th>
                    </tr>   
                </thead>
                        
                <tbody>
                    <?php
                    $x=1;
                    while($row=mysqli_fetch_array($result)){?>
                        
                        <tr>
                            <td><?php echo $row['Product_Name'];?></td> 
                            <td><?php echo $row['Price'];?></td> 
                            <td><?php echo $row['Provider'];?></td> 
                            <td><?php echo $row['Date'];?></td> 
                            
                        </tr>
                    <?php }?>
                </tbody>
        </div>
    </div>

<?php include("includes/footer.php")?>