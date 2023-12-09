<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Housify | Dashboard</title>
  <link rel="stylesheet" href="main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }
    .dashboard-nav {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      background-color: #333;
      padding: 10px 20px;
    }
    .dashboard-nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
    }
    .dashboard-nav ul li {
      padding: 0 10px;
    }
    .dashboard-nav ul li a {
      color: #fff;
      text-decoration: none;
    }
    .dashboard-nav ul li a:hover {
      text-decoration: underline;
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
      transition: box-shadow 0.3s ease;
      text-align: left;
    }
    .listing:hover {
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      cursor: pointer;
    }
    .listing img {
      max-width: 100%;
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
    .listing a {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>

<body>
  <div class="dashboard-nav">
    <ul>
      <li><a href="main.php">Home</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="signin.php">Log Out</a></li>
      <li><a href="show-wishlist.php">Wish List</a></li>
    </ul>
  </div>

  <div class="container">
    <h1>Featured Listings</h1>
    <!-- Mock Listings -->
    <?php
    // Sample data for properties
    $propertyTitles = ["Cozy Cottage", "Urban Studio", "Suburban Residence", "Luxury Villa", "Modern Condo", "Country House", "Lakefront Bungalow", "Downtown Loft", "Spacious Townhome", "Charming Farmhouse"];
    $streetNames = ["Maple Drive", "Broadway Avenue", "Cedar Street", "Elm Lane", "Oak Terrace", "Pine Court", "Birch Road", "Spruce Way", "Walnut Place", "Chestnut Circle"];

    for($i = 1; $i <= 8; $i++):
        $titleIndex = array_rand($propertyTitles);
        $streetIndex = array_rand($streetNames);
        $price = rand(150000, 500000);
        $beds = rand(2, 5);
        $baths = rand(1, 3);
        $sqft = rand(1000, 3000);
        $distance = rand(1, 30);
    ?>
    <div class="listing" onclick="location.href='property-details.php?id=<?= $i ?>'">
        <img src="images/listing<?= $i ?>.jpg" alt="House image <?= $i ?>">
        <h3><a href="property-details.php?id=<?= $i ?>"><?= $propertyTitles[$titleIndex] ?></a></h3>
        <p><?= $streetNames[$streetIndex] ?>, Atlanta, GA</p>
        <p>Price: $<?= number_format($price) ?></p>
        <p>Beds: <?= $beds ?> | Baths: <?= $baths ?> | Sqft: <?= $sqft ?></p>
        <p><?= $distance ?> miles away from 30316 Atlanta, GA</p>
    </div>
    <?php endfor; ?>
  </div>

</body>
</html>
