<?php include("db.php");?>

<?php
    $query = "SELECT * FROM proveedor ORDER BY Proveedor";
    $result = mysqli_query($conn,$query);
    
    ?>
<?php include("includes/header.php")?>
    <div class="container p-5">
        <div class="col-md-8 mx-auto">
        
            <table class="table table-striped">
                <thead>
                    <tr>
                                
                        <th>Provider</th>
                        <th>Adress</th>
                        <th>Number</th>
                        <th>Email</th>
                    </tr>   
                </thead>
                        
                <tbody>
                    <?php
                    $x=1;
                    while($row=mysqli_fetch_array($result)){?>
                        
                        <tr>
                            <td><?php echo $row['Proveedor'];?></td> 
                            <td><?php echo $row['Direccion'];?></td> 
                            <td><?php echo $row['Celular'];?></td> 
                            <td><?php echo $row['Email'];?></td> 
                            
                        </tr>
                    <?php }?>
                </tbody>
        </div>
    </div>

<?php include("includes/footer.php")?>