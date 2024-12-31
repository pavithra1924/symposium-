
<?php
include("include\dbconnect.php");
extract($_POST);
session_start();
if(isset($btn))
{ 
    $name=$_REQUEST['name'];
    $dob=$_REQUEST['dob'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $collegename=$_REQUEST['collegename'];
    $department=$_REQUEST['department'];
    $_SESSION['un']=$phone;

    if (!$conn) {
      die("Database connection failed: " . $conn->connect_error);
  }

$sql="SELECT id FROM registration_details order by id ASC";
$sid=0;
$result=$conn->query($sql);
if (!$result) {
  die("Error in query: " . $conn->error);
}

while ($row =$result->fetch_assoc())

{
    $sid=$row['id'];

}
$sid=$sid+1;
$year = date("Y");
    $register_number = "REG" . $year . str_pad($sid, 5, "0", STR_PAD_LEFT); // Example: REG202400001

$qrysl="insert into registration_details values ($sid,'$register_number','$name','$dob','$email','$phone','$collegename','$department')";
if($conn->query($qrysl)===TRUE){
    ?>
<script language="javascript" type="text/javascript">
                alert("Registration successfully");
                window.location.href="regno.php"
                </script>

       <?php
}else
{
    ?>

 <script language="javascript" type="text/javascript">
                alert("Failed!");
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
  <title>College Symposium Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>body {
  background: linear-gradient(to right, #6a11cb, #2575fc);
  font-family: Arial, sans-serif;
}

.card {
  border-radius: 10px;
}

.card-header {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

form input, form select {
  border-radius: 5px;
  border: 1px solid #ccc;
}

    </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header text-center bg-primary text-white">
        <h2>College Symposium Registration</h2>
      </div>
      <div class="card-body">
        <form name="registration_details" action="" method="POST">
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <!-- Date of Birth -->
          <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
          </div>

          <!-- Phone Number -->
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <!-- College Name -->
          <div class="mb-3">
            <label for="college" class="form-label">Name of College</label>
            <input type="text" class="form-control" id="collegename" name="collegename" required>
          </div>

          <!-- Department -->
          <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select class="form-select" id="department" name="department" required>
              <option value="">Select Department</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Electronics">Electronics</option>
              <option value="Mechanical">Mechanical</option>
              <option value="Civil">Civil</option>
            </select>
          </div>

          <!-- Submit Button -->
          <div class="text-center">
            <button type="submit" name="btn" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script >
    document.getElementById('registrationForm').addEventListener('submit', function (e) {
  const phone = document.getElementById('phone').value;
  if (!/^\d{10}$/.test(phone)) {
    alert("Please enter a valid 10-digit phone number.");
    e.preventDefault();
  }
});

  </script>
</body>
</html>
