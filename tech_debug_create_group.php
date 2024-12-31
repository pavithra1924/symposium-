<?php
include("include/dbconnect.php");
extract($_POST);

$message = ''; // Variable to store message (success or error)

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $group_code = $_POST['group_code'];

    // Get event type and created_by (register_number) from POST data
    $event_type = $_POST['event_type']; 
    $created_by = $_POST['register_number']; 
    $unique_code = substr(md5(uniqid(rand(), true)), 0, 8); // Generate a unique group code
    $group_code = $event_type . "_" . $unique_code; // Final group code format

    // Define max members based on event type
    $max_members =  ($event_type === 'debug' ? 3 : 1); 

    // Prepare and execute SQL to insert the new group
    $stmt = $conn->prepare("INSERT INTO groups (group_code, event_type, max_members, created_by) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $group_code, $event_type, $max_members, $created_by);

    // Check if the group was successfully created
    if ($stmt->execute()) {
        $message = "Group created successfully! Your group code is: " . $group_code;
    } else {
        $message = "Error: " . $stmt->error; // If there's an error during insertion
    }

    $stmt->close(); // Close the prepared statement
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create or Join Group</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3Wn96pXFM1h9TTz7g9yLVLQXiTjNGY0oHxrk5PYJf4yR5I0/Ky2Nm1lAP" crossorigin="anonymous">
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
        .form-control, .form-select {
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 12px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .form-control:focus, .form-select:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 10px rgba(111, 66, 193, 0.3);
        }
        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
            padding: 14px;
            font-size: 16px;
            border-radius: 8px;
            width: 48%;
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #5a32a3;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            padding: 14px;
            font-size: 16px;
            border-radius: 8px;
            width: 48%;
            text-transform: uppercase;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
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
        <h1>Create or Join Group</h1>

        <?php if (!empty($message)): ?>
            <!-- Display a message if it's set -->
            <div class="alert alert-info">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <!-- Form to create a new group -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="register_number" class="form-label">Register Number</label>
                <input type="text" name="register_number" id="register_number" class="form-control" placeholder="Enter your registration number" required>
            </div>
            <div class="mb-3">
                <label for="event_type" class="form-label">Select Event Type</label>
                <select name="event_type" id="event_type" class="form-select" required>
                    <option value="debug">Debug</option>
                </select>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-primary">Create Group</button>
                <button href="joingroup.php" class="btn btn-success">Join Group</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb6Ff2cuDD7vTpx57yjl1RzM6g9p6T6XB9p7dDhSt4Sz1dfVw" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0s6PqkFhWg20hpHLbBh5RxEjr6p4GpP8ab9Bt2F2f67Hktyx" crossorigin="anonymous"></script>
</body>
</html>
            