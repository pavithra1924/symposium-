<?php
include("include/dbconnect.php");
extract($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $group_code = $_POST['group_code'];
    $member_register_number = $_POST['register_number'];

    // Check if the group exists and get its max_members and current_members
    $stmt = $conn->prepare("
        SELECT g.max_members, COUNT(m.member_register_number) AS current_members
        FROM groups g
        LEFT JOIN group_members m ON g.group_code = m.group_code
        WHERE g.group_code = ?
        GROUP BY g.group_code, g.max_members
    ");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $group_code);
    $stmt->execute();
    $stmt->bind_result($max_members, $current_members);

    // Check if we found the group
    if (!$stmt->fetch()) {
        $message = "Group not found. Please check the group code.";
        $message_type = "warning";
    } else {
        $stmt->close();

        // Check if max_members is set to a valid value
        if ($max_members <= 0) {
            $message = "This group has no valid member limit. Please contact the administrator.";
            $message_type = "warning";
        } elseif ($current_members >= $max_members) {
            // Check if the group is full
            $message = "This group is already full. Maximum members allowed: " . $max_members;
            $message_type = "warning";
        } else {
            // Add the user to the group
            $insertStmt = $conn->prepare("INSERT INTO group_members (group_code, member_register_number) VALUES (?, ?)");

            if (!$insertStmt) {
                die("Prepare failed: " . $conn->error);
            }

            $insertStmt->bind_param("ss", $group_code, $member_register_number);

            if ($insertStmt->execute()) {
                $message = "Successfully joined the group!";
                $message_type = "success";
            } else {
                $message = "Error: " . $insertStmt->error;
                $message_type = "danger";
            }

            $insertStmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Your Group</title>
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
        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 20px;
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
        }
        .alert {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Join Your Group</h1>

        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $message_type; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="register_number" class="form-label">Register Number</label>
                <input type="text" name="register_number" id="register_number" class="form-control" placeholder="Enter your registration number" required>
            </div>
            <div class="mb-3">
                <label for="group_code" class="form-label">Group Code</label>
                <input type="text" name="group_code" class="form-control" placeholder="Enter your group code" required>
            </div>
            <button type="submit" class="btn btn-primary">Join Group</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
