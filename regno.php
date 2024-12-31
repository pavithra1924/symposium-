<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
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
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Registration Details</h4>
                </div>
                <div class="card-body text-center">
                    <?php
                    include("include/dbconnect.php");
                    session_start();
                    $phone = $_SESSION['un'];
                    $qrysl = "SELECT * FROM registration_details WHERE phone='$phone'";
                    $result = $conn->query($qrysl);

                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <p class="fs-5">Welcome to our College Symposium!</p>
                            <p class="fs-5">This is your registration number:</p>
                            <div class="alert alert-success fs-5">
                                <strong><?php echo $row['register_no']; ?></strong>
                            </div>
                            <p class="text-center fs-6">Thank you for registering. We look forward to seeing you at the event!</p>
                            <?php
                        }
                    } else {
                        echo '<p class="text-center text-danger">No record found. Please log in again.</p>';
                    }
                    ?>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary me-2" onclick="window.location.href='login.php'">Login Page</button>
                    <button class="btn btn-secondary" onclick="window.history.back()">Go Back</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
