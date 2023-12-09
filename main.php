<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housify | Your Dream Home Awaits</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
        }

        header {
            background: #333333;
            color: #ffffff;
            padding: 10px 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            overflow: auto;
            padding: 0 20px;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar h1, .navbar ul {
            padding: 0;
            margin: 0;
        }

        .navbar ul {
            list-style: none;
        }

        .navbar ul li {
            display: inline;
            margin: 0 10px;
        }

        .navbar a {
            text-decoration: none;
            color: #ffffff;
        }

        .navbar a:hover {
            color: #1db954;
        }

        .btn {
            padding: 9px 25px;
            background: #1db954;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .btn:hover {
            background: #16943e;
        }

        .hero {
            padding: 60px 0;
            background: url('images/mainHouseWide.png') no-repeat center center/cover;
        }

        .hero-inner {
            text-align: center;
            color: #ffffff;
        }

        .hero-inner h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero-inner p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        section {
            padding: 20px 0;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        footer {
            background: #333333;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 700px) {
            .hero {
                padding: 30px 0;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container navbar">
            <h1>Housify</h1>
            <nav>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div>
                <button class="btn" onclick="location.href='signin.php'">Sign In</button>
                <button class="btn" onclick="location.href='signup.php'">Sign Up</button>
            </div>
        </div>
    </header>
    <div class="hero">
        <div class="hero-inner">
            <h1>Welcome to Housify</h1>
            <p>Find your perfect home with us, where dreams become a reality.</p>
        </div>
    </div>
    <section class="container">
        <h2>About Housify</h2>
        <p>Housify is the leading real estate platform where finding or listing properties is made effortless and reliable. Join us and make the process of buying, selling, or renting a home as enjoyable as moving into one.</p>
        <div class="cards">
            <div class="card">
                <h3>Buy a Home</h3>
                <p>With our extensive database, find a place that you can call your own.</p>
            </div>
            <div class="card">
                <h3>Rent a Home</h3>
                <p>Explore rental options that cater to your comfort and budget.</p>
            </div>
            <div class="card">
                <h3>Sell a Home</h3>
                <p>Reach potential buyers and get the best deals with our expert marketing.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Housify. All Rights Reserved.</p>
    </footer>
</body>
</html>
