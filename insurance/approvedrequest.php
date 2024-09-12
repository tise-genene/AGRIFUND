<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Farmer List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
   <style> 
   .container {
    margin-top: 40px;
}

h2 {
    margin-bottom: 20px;
}

.farmer-card {
    margin-bottom: 20px;
}

.card-title {
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    margin-bottom: 5px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}
</style>
</head>

<body>
    <div class="container">
        <h2>Approved Farmer List</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card farmer-card">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Insurance Savings: $10,000</p>
                        <p class="card-text">Loan Amount: $50,000</p>
                        <p class="card-text">Loan Duration: 12 months</p>
                        <a href="#" class="btn btn-primary">View Insurance Policy</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card farmer-card">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">Insurance Savings: $8,000</p>
                        <p class="card-text">Loan Amount: $40,000</p>
                        <p class="card-text">Loan Duration: 6 months</p>
                        <a href="#" class="btn btn-primary">View Insurance Policy</a>
                    </div>
                </div>
            </div>
            <!-- Add more farmer cards as needed -->
        </div>
    </div>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>