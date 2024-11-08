<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .contact-info div {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border-radius: 8px;
            width: 30%;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            color: #007BFF;
            margin-bottom: 1rem;
        }

        .contact-info p {
            font-size: 1rem;
            color: #555;
        }

        form {
            background-color: white;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        form h2 {
            font-size: 2rem;
            color: #007BFF;
            margin-bottom: 1rem;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 8px;
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
            .contact-info {
                flex-direction: column;
                align-items: center;
            }

            .contact-info div {
                width: 80%;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PHP CRUD</a>
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
        <h1>Contact Us</h1>
    </header>

    <div class="container">
        <section class="contact-info">
            <div>
                <h3>Our Address</h3>
                <p>1234 Main Street, Suite 500, City, State, ZIP</p>
            </div>
            <div>
                <h3>Phone Number</h3>
                <p>+1 (123) 456-7890</p>
            </div>
            <div>
                <h3>Email</h3>
                <p>contact@yourcompany.com</p>
            </div>
        </section>

        <section>
            <form action="#" method="post">
                <h2>Get in Touch</h2>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>

        <section>
            <h2>Find Us Here</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.716829510582!2d-122.4194151846811!3d37.77492927975957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858132e22a6ccf%3A0x3b25c004603aba27!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1573562421045!5m2!1sen!2sin" allowfullscreen=""></iframe>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
    </footer>

</body>
</html>
