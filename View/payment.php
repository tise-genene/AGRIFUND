<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <style>
    .navbar-sidebar {
        height: 88vh;
        width: 250px;
        position: fixed;
        top: 20px;
        left: 0;
        z-index: 2;
        padding-top: 100px;
        background-color: green;
        display: flex;
        flex-direction: column;
    }

    .container {
        max-width: 500px;
        margin: auto;
        margin-top: 50px;
    }

    .payment-methods {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        margin-left:50px;
    }

    .payment-method {
        flex-basis: 48%;
        margin-bottom: 20px;
        margin-right: 10px; /* Add space between the images */
    }

    .payment-method:last-child {
        margin-right: 0; /* Remove the margin-right for the last image */
    }

    footer {
        background-color: #343a40;
        color: #fff;
        padding: 10px;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
    }

    .payment-method img {
        
        width: 30vh;
        height: 40vh;
        margin-left:10px;

    }
    .payment-methods img {
        
        width: 30vh;
        height: 40vh;
         
    }
    .payment-method label {
        display: block;
        text-align: center;
        margin-top: 10px;
    }

    .btn-pay {
        display: block;
        width: 100%;
    }

    .navbar-sidebar .nav-link {
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-bottom: 2px solid white;
        padding: 10px;
    }
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">AgriFund</a>
        </nav>
    </header>
    <div class="container">
        <h1>Payment Gateway</h1>
       <div class="navbar-sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="FarmerList.php">Farmers List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Regulation.php">Rules and Regulations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="TopRating.php">Top Rated Farmers</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="Payment.php">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?logout">Logout</a>
            </li>
        </ul>
    </div>
        <div class="payment-methods">
            <!-- Payment Method: Credit Card -->
            <div class="payment-method">
                <img src="images/visa.jpg" alt="Credit Card">
                <label>
                    <input type="radio" name="payment-method" value="credit-card">
                    Visa Card
                </label>
                <select id="credit-card-options" class="form-control">
                    <option value="paypal">PayPal</option>
                    <option value="mastercard">MasterCard</option>
                    <option value="visa">Visa</option>
                    <!-- Add more credit card options as needed -->
                </select>
            </div>

            <!-- Payment Method: Bank Transfer -->
            <div class="payment-method">
                <img src="images/local.jpg" alt="Bank Transfer">
                <label>
                    <input type="radio" name="payment-method" value="bank-transfer">
                    Local Bank Transfer
                </label>
                <select id="bank-transfer-options" class="form-control">
                    <option value="cbe">CBE</option>
                    <option value="abyssinya">Abyssinya Bank</option>
                    <option value="oromia">Oromia Bank</option>
                    <option value="amhara">Amhara Bank</option>
                    <option value="wegagen">Wegagen Bank</option>
                    <!-- Add more bank transfer options as needed -->
                </select>
            </div>
        </div>


        <button class="btn btn-primary btn-pay" onclick="makePayment()">Proceed to Payment</button>
    </div>
     <footer class="bg-dark text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Payment processing script -->
    <script>
        function makePayment() {
            var selectedMethod = document.querySelector('input[name="payment-method"]:checked');

            if (selectedMethod) {
                var paymentMethod = selectedMethod.value;
                var selectedOption;
                if (paymentMethod === 'credit-card') {
                    selectedOption = document.getElementById('credit-card-options').value;
                } else if (paymentMethod === 'bank-transfer') {
                    selectedOption = document.getElementById('bank-transfer-options').value;
                }
                alert('Payment method selected: ' + paymentMethod + ', Option selected: ' + selectedOption);

                // TODO: Implement payment processing logic here

                // Redirect to a success page or display a success message
                window.location.href = 'payment-success.php';
            } else {
                alert('Please select a payment method.');
            }
        }
    </script>
</body>
</html>