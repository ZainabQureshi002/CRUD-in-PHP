<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 1.5rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 3rem;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 2rem auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .about-section {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            text-align: center;
        }

        .about-section h2 {
            font-size: 2rem;
            color: #333;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .team-section {
            display: flex;
            justify-content: space-around;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .team-member {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            padding: 1.5rem;
            width: 250px;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            height: 200px;
            object-fit: cover;
        }

        .team-member h3 {
            margin-top: 1rem;
            font-size: 1.4rem;
            color: #007BFF;
        }

        .team-member p {
            font-size: 1rem;
            color: #666;
        }

        footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        @media (max-width: 768px) {
            .team-section {
                flex-direction: column;
                align-items: center;
            }

            .team-member {
                width: 80%;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <h1>About Us</h1>
    </header>

    <div class="container">
        <section class="about-section">
            <h2>Who We Are</h2>
            <p>We are a team of passionate individuals committed to delivering high-quality products and services that meet the needs of our clients. Our mission is to continuously innovate and provide exceptional value in every project we undertake. With years of experience and a deep understanding of industry trends, we are proud to be leaders in our field.</p>
        </section>

        <section class="team-section">
            <div class="team-member">
                <img src="https://via.placeholder.com/250" alt="Team Member">
                <h3>John Doe</h3>
                <p>CEO & Founder</p>
            </div>

            <div class="team-member">
                <img src="https://via.placeholder.com/250" alt="Team Member">
                <h3>Jane Smith</h3>
                <p>Lead Developer</p>
            </div>

            <div class="team-member">
                <img src="https://via.placeholder.com/250" alt="Team Member">
                <h3>Mary Johnson</h3>
                <p>Marketing Manager</p>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
    </footer>

</body>
</html>
