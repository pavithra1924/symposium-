<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Symposium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">College Symposium - Technical Events</h1>
        <div class="row">
            <!-- Event 1: Web Design -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">Create a responsive and visually appealing website within the given timeframe.</p>
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#webDesignRules">Details</button>
                        <a href="tech_web_register.php" class="btn btn-success">Register</a>
                        <div class="collapse mt-3" id="webDesignRules">
                            <ul>
                                <li>Time Limit: 2 hours</li>
                                <li>Participants: Individual</li>
                                <li>Judging Criteria: Creativity, Responsiveness, and Functionality</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event 2: Debug -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Debug</h5>
                        <p class="card-text">Identify and fix bugs in the given code snippets within the allocated time.</p>
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#debugRules">Details</button>
                        <a href="tech_debug_create_group.php" class="btn btn-success">Register</a>
                        <div class="collapse mt-3" id="debugRules">
                            <ul>
                                <li>Time Limit: 1.5 hours</li>
                                <li>Participants: 3 members</li>
                                <li>Judging Criteria: Accuracy, Speed, and Problem-Solving Approach</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
