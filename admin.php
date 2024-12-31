<?php
include("include/dbconnect.php");

// Fetch all registrations for 'web'
$web_query = "SELECT g.group_code, g.event_type, g.created_by, 
                     GROUP_CONCAT(gm.member_register_number SEPARATOR ', ') AS members 
              FROM groups g 
              LEFT JOIN group_members gm ON g.group_code = gm.group_code 
              WHERE g.event_type = 'web'
              GROUP BY g.group_code";
$web_result = $conn->query($web_query);

// Fetch all registrations for 'debug'
$debug_query = "SELECT g.group_code, g.event_type, g.created_by, 
                       GROUP_CONCAT(gm.member_register_number SEPARATOR ', ') AS members 
                FROM groups g 
                LEFT JOIN group_members gm ON g.group_code = gm.group_code 
                WHERE g.event_type = 'debug'
                GROUP BY g.group_code";
$debug_result = $conn->query($debug_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
            padding-top: 20px;
        }
        h1 {
            color: #4e73df;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .table-container {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Details</h1>

        <!-- Web Event Table -->
        <div class="table-container">
            <h3>Web Event Registrations</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Group Code</th>
                        <th>Event Type</th>
                        <th>Created By</th>
                        <th>Members</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($web_result->num_rows > 0): ?>
                        <?php while ($row = $web_result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['group_code']); ?></td>
                                <td><?php echo htmlspecialchars($row['event_type']); ?></td>
                                <td><?php echo htmlspecialchars($row['created_by']); ?></td>
                                <td><?php echo htmlspecialchars($row['members']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No registrations found for Web event.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Debug Event Table -->
        <div class="table-container">
            <h3>Debug Event Registrations</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Group Code</th>
                        <th>Event Type</th>
                        <th>Created By</th>
                        <th>Members</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($debug_result->num_rows > 0): ?>
                        <?php while ($row = $debug_result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['group_code']); ?></td>
                                <td><?php echo htmlspecialchars($row['event_type']); ?></td>
                                <td><?php echo htmlspecialchars($row['created_by']); ?></td>
                                <td><?php echo htmlspecialchars($row['members']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No registrations found for Debug event.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
