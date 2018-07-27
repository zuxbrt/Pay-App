<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');

// instantiate customer
$transaction = new Transaction();

// get customer
$transactions = $transaction->getTransactions();


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
    <h2>Transactions</h2>
    <table class="table table-stripped">
        <thread>
            <tr>
                <th>Transaction ID</th>
                <th>Customer ID</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Created at</th>
            </tr>
        </thread>
        <tbody>
        <?php foreach ($transactions as $t): ?>
            <tr>
                <td><?php echo $t->id; ?></td>
                <td><?php echo $t->customer_id; ?></td>
                <td><?php echo $t->product; ?></td>
                <td><?php echo $t->amount; ?></td>
                <td><?php echo $t->currency; ?></td>
                <td><?php echo $t->status; ?></td>
                <td><?php echo $t->created_at; ?></td>
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