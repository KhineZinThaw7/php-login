<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>
<body>
    <?php
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if($email && $password) {
            header('location:logout.php'); 
        }
    ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for=""><b>Email Address</b></label>
                                <input type="text" name="email" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Password</b></label>
                                <input type="password" name="password" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" value="Login" class="btn btn-primary btn-md btn-block">
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>