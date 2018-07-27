<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');

// instantiate customer
$customer = new Customer();

// get customer
$customers = $customer->getCustomers();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>View customers</title>
</head>
<body>

<div class="container mt-4">
    <h2>Customers</h2>
    <table class="table table-stripped">
        <thread>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thread>
        <tbody>
        <?php foreach ($customers as $c): ?>
        <tr>
            <td><?php echo $c->id; ?></td>
            <td><?php echo $c->first_name; ?></td>
            <td><?php echo $c->email; ?></td>
            <td><?php echo $c->created_at; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h5 class="text-center"><a class="text-center" href="index.php">Back</a></h5>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>