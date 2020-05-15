<?php include("db.php") ?>
<?php include("includes/header.php") ?>


    <!--CONTAINER CENTER TO CONTAIN-->
    <div class="container p-4">
        <!--ROW-->
        <div class="row">

        <div class="col-md-4">
            <!--Target-->
            <?php if (isset($_SESSION['message'])){?>
                <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?=  $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
               <?php session_unset();}?>


            <div class="card card-body">
                <!--Send Information-->
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control"
                        placeholder="Product Name" autofocus>
                    </div>
                    <div class="form-group">
                    <input type="number" name="cost" class="form-control"
                    placeholder="Cost" autofocus>
                    </div>
                    <div class="form-group">
                    <input type="date" name="date" class="form-control"
                    placeholder="Expiration" autofocus>
                    </div>
                    <div class="form-group">
                    <input type="text" name="proveedor" class="form-control"
                    placeholder="Provider" autofocus>
                    </div>
                    <div class="form-group">
                    <input type="text" name="type" class="form-control"
                    placeholder="Type" autofocus>
                    </div>
                    <!--SAVE PRODUCT-->
                    <input type="submit" class="btn btn-success btn-block"
                    name="save_product" value="Save Product">
                </form>
            </div>
        
        </div>
        <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>   
                    </thead>
                
                <tbody>
                    <?php 
                        $query="SELECT * FROM type";
                        $query2="SELECT count(*) from productos where type='1'";
                        $query3="SELECT count(*) from productos where type='2'";
                        $query4="SELECT count(*) from productos where type='3'";
                        $query5="SELECT count(*) from productos where type='4'";
                        $query6="SELECT count(*) from productos where type='5'";
                        $query7="SELECT count(*) from productos where type='6'";
                        $query8="SELECT count(*) from productos where type='7'";
                        $query9="SELECT count(*) from productos where type='8'";
                        $query10="SELECT count(*) from productos where type='9'";

                        $result=mysqli_query($conn,$query);  
                        $result2=mysqli_query($conn,$query2);  
                        $row2=mysqli_fetch_array($result2);
                        $result3=mysqli_query($conn,$query3);                       
                        $row3=mysqli_fetch_array($result3);
                        $result4=mysqli_query($conn,$query4);  
                        $row4=mysqli_fetch_array($result4);
                        $result5=mysqli_query($conn,$query5);  
                        $row5=mysqli_fetch_array($result5);
                        $result6=mysqli_query($conn,$query6);  
                        $row6=mysqli_fetch_array($result6);
                        $result7=mysqli_query($conn,$query7);  
                        $row7=mysqli_fetch_array($result7);
                        $result8=mysqli_query($conn,$query8);  
                        $row8=mysqli_fetch_array($result8);
                        $result9=mysqli_query($conn,$query9);  
                        $row9=mysqli_fetch_array($result9);
                        $result10=mysqli_query($conn,$query10);  
                        $row10=mysqli_fetch_array($result10);
                        $x=0;

                        //JOIN DATA TO TABLE

                        while($row=mysqli_fetch_array($result)){?>
                            <tr>
                                <td><?php echo $row['Product'];?>
                                
                                <?php
                                
                                if($x==0){?>
                                      <i class="fas fa-wine-bottle"></i>
                                    </td>
                                    <td>
                                    <?php echo $row2[0];?></td>
                                      <?php }
                                
                                if($x==1){?>
                                      <i class="fas fa-cheese"></i>
                                        </td>
                                      <td>
                                      <?php echo $row3[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==2){?>
                                      <i class="fas fa-hamburger"></i>
                                        </td>
                                      <td>
                                      <?php echo $row4[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==3){?>
                                    <i class="fas fa-seedling"></i>
                                        </td>
                                      <td>
                                      <?php echo $row5[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==4){?>
                                      <i class="fas fa-beer"></i>
                                        </td>
                                      <td>
                                      <?php echo $row6[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==5){?>
                                      <i class="fas fa-bread-slice"></i>
                                        </td>
                                      <td>
                                      <?php echo $row7[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==6){?>
                                    <i class="fas fa-mug-hot"></i>
                                    </td>
                                    <td>
                                      <?php echo $row8[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==7){?>
                                      <i class="fas fa-ice-cream"></i>
                                        </td>
                                      <td><?php echo $row9[0];?></td>
                                       
                                <?php }?>
                                <?php
                                if($x==8){?>
                                      <i class="fas fa-cut"></i>
                                        </td>
                                      <td><?php echo $row10[0];?></td>
                                       
                                <?php }?>
                                
                                <td>
                                    <a href="observer.php?id=<?php echo $row['Id']?>" class="btn btn-warning"> 
                                    
                                    <i class="fas fa-eye"></i>

                                    </a>
                                </td>


                            </tr>  

                                   
                        <?php $x=$x+1;}?>
                
                
                </tbody>
            

        </div>
        
    </div>
    
    
    
</div>

<?php include("includes/footer.php")?>
    
    