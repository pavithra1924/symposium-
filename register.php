<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design Event Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Web Design Event Registration</h2>
        <form action="/submit_registration" method="POST">
            <h4>Member 1</h4>
            <div class="mb-3">
                <label for="member1Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="member1Name" name="member1Name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="member1RegNo" class="form-label">Registration Number</label>
                <input type="text" class="form-control" id="member1RegNo" name="member1RegNo" placeholder="Enter your registration number" required>
            </div>
            <div class="mb-3">
                <label for="member1DOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="member1DOB" name="member1DOB" required>
            </div>
            <div class="mb-3">
                <label for="member1Phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="member1Phone" name="member1Phone" placeholder="Enter your phone number" required>
            </div>

            <h4>Member 2</h4>
            <div class="mb-3">
                <label for="member2Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="member2Name" name="member2Name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="member2RegNo" class="form-label">Registration Number</label>
                <input type="text" class="form-control" id="member2RegNo" name="member2RegNo" placeholder="Enter your registration number" required>
            </div>
            <div class="mb-3">
                <label for="member2DOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="member2DOB" name="member2DOB" required>
            </div>
            <div class="mb-3">
                <label for="member2Phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="member2Phone" name="member2Phone" placeholder="Enter your phone number" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register for Event</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
