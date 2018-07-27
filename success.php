<?php
    if (!empty($_GET['tid']) && !empty($_GET['product'])){
        $data = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $data['tid'];
        $product = $data['product'];
    } else {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Thank you</title>
</head>
<body>

<div class="container">

    <h2 class="my-4 text-center">Thank you for purchasing <?php echo $product; ?></h2>
    <h2 class="my-4 text-center">Your transaction id <?php echo $tid; ?></h2>
    <p class="text-center">Check your email for more info</p>
    <h5 class="text-center"><a class="text-center" href="index.php">Back</a></h5>

</div>

<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>