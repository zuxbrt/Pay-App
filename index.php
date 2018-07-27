<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>

<div class="container w-50 mt-5">

    <h2 class="my-4 text-center">Kila suhog mesa [$50]</h2>
    <form action="./charge.php" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" class="form-control mb-3 StripeElement StripeElement--empty" name="first_name" placeholder="First name">
            <input type="text" class="form-control mb-3 StripeElement StripeElement--empty" name="last_name" placeholder="Last name">
            <input type="email" class="form-control mb-3 StripeElement StripeElement--empty" name="email" placeholder="Email">
            <div id="card-element" class="form-control">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Buy</button>
    </form>

    <div class="container flex flex-direction row justify-content-center mt-5">
        <h5 class="text-center m-3"><a class="text-center" href="customers.php">View customers</a></h5>
        <h5 class="text-center m-3"><a class="text-center" href="transactions.php">View transactions</a></h5>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>