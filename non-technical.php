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
        <h1 class="text-center mb-4">College Symposium - Non Technical Events</h1>
        <div class="row">
            <!-- Event 1: Photography -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Photography</h5>
                        <p class="card-text">Capture stunning photographs based on the provided theme.</p>
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#photographyRules">Details</button>
                        <a href="nontechphotoreg.html" class="btn btn-success">Register</a>
                        <div class="collapse mt-3" id="photographyRules">
                            <ul>
                                <li>Time Limit: 2 hours</li>
                                <li>Participants: Individual event</li>
                                <li>Judging Criteria: Creativity, Composition, and Theme Relevance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event 2: Connections -->
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Connections</h5>
                        <p class="card-text">Decode and connect clues to solve puzzles and win the challenge.</p>
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#connectionsRules">Details</button>
                        <a href="groupevent.php" class="btn btn-success">Register</a>
                        <div class="collapse mt-3" id="connectionsRules">
                            <ul>
                                <li>Time Limit: 1 hour</li>
                                <li>Participants: Maximum 2 members per team</li>
                                <li>Judging Criteria: Accuracy, Logical Thinking, and Teamwork</li>
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
