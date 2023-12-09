<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Housify | Wishlist</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .listing {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: left;
        }
        .listing img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .listing h3 {
            margin: 10px 0;
        }
        .listing p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Wishlist</h1>
        <!-- Mock Wishlist Items -->
        <?php for($i = 0; $i < 3; $i++): ?>
            <?php $randomNum = rand(1, 10); ?>
            <div class="listing">
                <img src="images/Listing<?= $randomNum ?>.jpg" alt="Listing Image <?= $randomNum ?>">
                <h3>Favorite Property <?= $randomNum ?></h3>
                <p>Address: 1234 Example St, City, State</p>
                <p>Price: $<?= number_format(rand(200000, 600000)) ?></p>
                <p>Beds: <?= rand(2, 5) ?> | Baths: <?= rand(1, 3) ?> | Sqft: <?= rand(1000, 3000) ?></p>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>
