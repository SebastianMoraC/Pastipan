<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  BOOTSTRAP 4  -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <title>PASTIPAN</title>
  
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
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="verify.php" method="POST">
                <div class="form-group text-center pt-3">
                    <h1 class="text-dark">PASTIPAN</h1>
                </div>
                <div class="form-group mx-sm-4 pt-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group mx-sm-4 pb-3">                   
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">                   
                </div>
                <div class="form-group mx-sm-4  pb-3">
                    <input type="submit" class="btn btn-block ingresar" name="Login" value="LOG IN">
                </div>
                </form>
            </div>
        </div>

    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>