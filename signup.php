<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Housify | Sign Up</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .form-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        .button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
        #cardType {
            font-size: 1rem;
            color: #333;
            margin-bottom: 15px;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h2>Welcome to Housify</h2>
        <p>Let's get started with your account setup.</p>

        <form action="dashboard.php" method="post">
            <!-- User Type Selection -->
            <div id="userType">
                <input type="radio" id="buyer" name="userType" value="buyer" required>
                <label for="buyer">Buyer</label>
                <input type="radio" id="seller" name="userType" value="seller" required>
                <label for="seller">Seller</label>
            </div>

            <!-- Personal Information -->
            <input class="form-field" type="text" name="username" placeholder="Username" required />
            <input class="form-field" type="email" name="email" placeholder="Email" required />
            <input class="form-field" type="password" name="password" placeholder="Password" required />
            <input class="form-field" type="password" name="confirmPassword" placeholder="Confirm Password" required />

            <!-- Credit Card Information -->
            <input class="form-field" type="text" name="cardNumber" id="cardNumber" placeholder="Credit Card Number" oninput="detectCardType(this.value)" required />
            <div id="cardType">Card Type: Unknown</div>
            <input class="form-field" type="text" name="expiryDate" placeholder="Expiration Date (MM/YY)" required />
            <input class="form-field" type="text" name="cvv" placeholder="CVV" required />

            <!-- Billing Information -->
            <input class="form-field" type="text" name="address" placeholder="Address" required />
            <input class="form-field" type="text" name="billingAddress" placeholder="Billing Address" />
            <input class="form-field" type="tel" name="phoneNumber" placeholder="Phone Number" />

            <input type="checkbox" name="terms" id="terms" />
            <label for="terms">I accept the Terms of Use & Privacy Policy</label>
            <br />
            <input class="button" type="submit" value="Sign Up" />
        </form>
    </div>

    <script>
        function detectCardType(number) {
            var re = {
                mastercard: /^5[1-5][0-9]{14}$/,
                visa: /^4[0-9]{12}(?:[0-9]{3})?$/,
                amex: /^3[47][0-9]{13}$/
            };

            for (var key in re) {
                if (re[key].test(number.replace(/ /g, ''))) {  // Remove spaces for validation
                    document.getElementById('cardType').innerText = 'Card Type: ' + key.charAt(0).toUpperCase() + key.slice(1);
                    return;
                }
            }

            document.getElementById('cardType').innerText = 'Card Type: Unknown';
        }
    </script>
</body>
</html>
