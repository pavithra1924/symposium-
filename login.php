
<?php
include("include\dbconnect.php");
extract($_POST);

if(isset($btn))
{ 

    $rno=$_REQUEST['register_no'];
    $phone=$_REQUEST['phone'];

$sql="SELECT * FROM registration_details where register_no='$rno' &&  phone='$phone' ";

$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result))

{
   ?>


<script language="javascript" type="text/javascript">
                alert("Login successfully");
                window.location.href="homepage.php"
                </script>

       <?php
}else
{
    ?>

 <script language="javascript" type="text/javascript">
                alert("Register number  or Date of birth incorrect ");
</script> 
<?php
}
$conn->close();
}
?>
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label class="form-label">BHC_Registraion No</label>
                            <input type="text" class="form-control" id="phone" name="register_no" placeholder="Enter your bhc register number" required>
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-3">
                            <label  class="form-label">Phone  number</label>
                            <input type="text" class="form-control" id="password" name="phone" placeholder="Enter your password" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" name="btn" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Don't have an account? <a href="register.php" class="text-primary">Register here</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
