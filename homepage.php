<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symposium 2024</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header Section */
        header {
            background: linear-gradient(135deg, #FF5733, #C70039);
            padding: 20px 0;
        }

        .navbar-brand {
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1.2rem;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        /* Home Section (Removed background color) */
        #home {
            color: black;
            padding: 100px 0;
            text-align: center;
            animation: fadeInUp 2s ease-in-out;
        }

        #home h1 {
            font-size: 4rem;
            font-weight: bold;
            animation: slideInTop 1s ease-in-out, fadeIn 1.5s ease-in-out;
        }

        #home p {
            font-size: 1.3rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 300;
            animation: fadeInUp 2s ease-in-out;
        }

        /* Events Section */
        section {
            padding: 60px 0;
        }

        section h2 {
            font-size: 2.8rem;
            color: #C70039;
            margin-bottom: 30px;
            font-weight: bold;
        }

        section p {
            font-size: 1.2rem;
            color: #555;
            text-align: center;
        }

        .event-card {
            margin-bottom: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInTop {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Card Animations */
        .card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        /* Register Button */
        .btn-register {
            background-color: #C70039;
            color: white;
            font-size: 1.2rem;
            padding: 12px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            text-decoration: none;
            margin-top: 15px;
        }

        .btn-register:hover {
            background-color: #FF5733;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 15px 0;
            }

            #home h1 {
                font-size: 2.8rem;
            }

            #home p {
                font-size: 1rem;
            }

            section h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header & Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a class="navbar-brand" href="#">Symposium 2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <h1>Welcome to the Annual Symposium 2024</h1>
            <p>Join us at the forefront of innovation and collaboration at the Annual Symposium 2024. This event brings together industry leaders, experts, and enthusiasts from diverse fields to share insights, engage in meaningful discussions, and participate in a variety of technical and non-technical events. Whether you're looking to enhance your skills, expand your network, or contribute to groundbreaking projects, our symposium offers something for everyone.</p>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="bg-light">
        <div class="container text-center">
            <h2>Events</h2>
            <p>Explore a variety of technical and non-technical events tailored for everyone.</p>
            <div class="row">
                <!-- Technical Event -->
                <div class="col-md-6 mb-4">
                    <div class="event-card">
                        <h5 class="card-title">Technical Events</h5>
                        <p class="card-text">Participate in cutting-edge coding competitions, hackathons, and workshops that challenge your skills and push boundaries.</p>
                        <a href="technical.php" class="btn-register">Register</a>
                    </div>
                </div>
                <!-- Non-Technical Event -->
                <div class="col-md-6 mb-4">
                    <div class="event-card">
                        <h5 class="card-title">Non-Technical Events</h5>
                        <p class="card-text">Engage in fun-filled activities, quizzes, debates, and cultural programs that promote creativity and collaboration.</p>
                        <a href="non-technical.php" class="btn-register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container text-center py-5">
        <h2>About</h2>
        <p>The Symposium is a platform for knowledge-sharing, networking, and growth. It brings together a community of passionate individuals who are eager to explore new ideas, engage in intellectual discussions, and be part of a transformative experience.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container text-center">
            <h2>Contact Us</h2>
            <p>Email: <a href="mailto:info@symposium.com">info@symposium.com</a></p>
            <p>Phone: +1 234 567 890</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Symposium. All Rights Reserved.</p>
        <p>Follow us on <a href="#">Social Media</a></p>
    </footer>

    <!-- Bootstrap JS, Popper, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
