<?php include("db.php");?>
<?php
    $query = "SELECT sum(Price) as Price from ventas";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $total=$row['Price'];
    $cost=$total/1.15;
    $profit = $total - $cost;


    ?>
<?php include("includes/header.php")?>
    <img src="Imagenes/cesta.jpg" 
        class="rounded mx-auto d-block"
        class="img-thumbnail"
        width="200" height="200">

    <div class="container p-5">

        <div class="col-md-5 mx-auto">
        
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                                
                        <th>Cost</th>
                        <th>Sold</th>
                        <th>Profit</th>
                    </tr>   
                </thead>
                        
                <tbody>
                    
                    <tr class="table-primary">
                        <td><?php echo $cost;?></td> 
                        <td><?php echo $total;?></td> 
                        <td><?php echo $profit;?></td> 
                    </tr>
                    
                </tbody>
        </div>
        
    </div>
    

<?php include("includes/footer.php")?>
