<?php
include("include/dbconnect.php");
$message = ''; // Variable to store success or error message

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $register_number = $_POST['register_number'];
    $event_type = 'web'; // Fixed event type

    // Check if the user is already registered for the event
    $stmt = $conn->prepare("SELECT COUNT(*) FROM event_registrations WHERE register_number = ? AND event_type = ?");
    $stmt->bind_param("ss", $register_number, $event_type);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        // If already registered
        $message = "You are already registered for the event.";
    } else {
        // Insert the registration details into the database
        $stmt = $conn->prepare("INSERT INTO event_registrations (register_number, event_type) VALUES (?, ?)");
        $stmt->bind_param("ss", $register_number, $event_type);

        if ($stmt->execute()) {
            $message = "Registration successful!";
        } else {
            $message = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Event</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
            padding-top: 50px;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 550px;
            padding: 40px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }
        h1 {
            color: #6f42c1;
            font-weight: 700;
            font-size: 28px;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }
        .form-control {
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 12px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 10px rgba(111, 66, 193, 0.3);
        }
        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
            padding: 14px;
            font-size: 16px;
            border-radius: 8px;
            width: 100%;
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #5a32a3;
        }
        .alert {
            background-color: #e8f0fe;
            color: #6f42c1;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register for Event</h1>

        <?php if (!empty($message)): ?>
            <div class="alert">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <!-- Registration Form -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="register_number" class="form-label">Register Number</label>
                <input type="text" name="register_number" id="register_number" class="form-control" placeholder="Enter your registration number" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
