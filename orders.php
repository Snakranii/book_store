<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- custom css filr link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/navbar.js"></script>
</head>

<body id="nav-togglebar">
    <?php include 'header.php'; ?>
    <?php include 'navbar.php'; ?>


    <section class="placed-orders">

        <h1 class="title">placed orders</h1>
        <div class="container">
            <div class="row">
                <?php
                $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE id = '$user_id'") or die('query failed');
                if (mysqli_num_rows($order_query) > 0) {
                    while ($fetch_orders = mysqli_fetch_assoc($order_query)) {
                        ?>

                        <div class="col-lg-6 ">
                            <div class="order-border">
                            <p> placed on : <span>   <?php echo $fetch_orders['placed_on']; ?>     </span> </p>
                            <p> name : <span>   <?php echo $fetch_orders['name']; ?>     </span> </p>
                            <p> number : <span>   <?php echo $fetch_orders['number']; ?>     </span> </p>
                            <p> email : <span>   <?php echo $fetch_orders['email']; ?>     </span> </p>
                            <p> address : <span>   <?php echo $fetch_orders['address']; ?>     </span> </p>
                            <p> payment method : <span>   <?php echo $fetch_orders['method']; ?>     </span> </p>
                            <p> your orders : <span>   <?php echo $fetch_orders['total_products']; ?>     </span> </p>
                            <p> total price : <span>$   <?php echo $fetch_orders['total_price']; ?>/-     </span> </p>
                            <p> payment status : <span
                                    style="color:<?php if ($fetch_orders['payment_status'] == 'pending') {
                                        echo 'red';
                                    } else {
                                        echo 'green';
                                    } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
                        </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p class="empty">no orders placed yet!</p>';
                }
                ?>
            </div>
        </div>

    </section>








    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>