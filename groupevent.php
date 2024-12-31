<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirect Links</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <style>
    body {
      background-color: #f4f7fc;
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      max-width: 500px;
      padding: 40px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #6f42c1;
      font-weight: 700;
      font-size: 28px;
      text-align: center;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    .btn-create, .btn-join {
      color: white;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 16px;
      text-align: center;
      width: 100%;
      display: block;
      margin-bottom: 15px;
    }

    .btn-create {
      background-color: #6f42c1;
    }

    .btn-create:hover {
      background-color: #5a32a3;
    }

    .btn-join {
      background-color: #28A745;
    }

    .btn-join:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <h1>Group Management</h1>
    <!-- Link to Create Group -->
    <a href="create_group.php" class="btn-create">Create a Group</a>

    <!-- Link to Join Group -->
    <a href="https://example.com/join-group" class="btn-join">Join a Group</a>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
