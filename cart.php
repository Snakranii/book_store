<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

// if(isset($_POST['update_cart'])){
//    $cart_id = $_POST['cart_id'];
//    $cart_quantity = $_POST['cart_quantity'];
//    mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
//    $message[] = 'cart quantity updated!';
// }

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE cart_id = '$delete_id'") or die('query failed');
    header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$user_id'") or die('query failed');
    header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

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


    <section class="products">
        <h1 class="title">products added</h1>
        <div class="container">
            <div class="row">
                <?php
                $grand_total = 0;
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE id = '$user_id'");
                if (mysqli_num_rows($select_cart) > 0) {
                    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                        ?>
                        <div class="col-lg-3 col-sm-3">
                            <div class="card cart-delete">
                               
                                <div class="card-img">
                                    <img src="./assets/upload_img/<?php echo $fetch_cart['image']; ?>" class="card-img"
                                        alt="image" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $fetch_cart['name']; ?>
                                    </h5>
                                </div>
                                <div class="card-footer">
                                    <div class="card-footer-label">
                                        <h5> &#8377;
                                            <?php echo $fetch_cart['price']; ?>/-
                                        </h5>
                                    </div>
                                    <div class="card-footer-link">
                                    <a href="cart.php?delete=<?php echo $fetch_cart['cart_id']; ?>" class="btn btn-primary" onclick="return confirm('delete this from cart?');">delete</a>
                                        <!-- <input type="submit" value="delete" name="add_to_cart" class="btn btn-primary"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $sub_total = $fetch_cart['price'];
                        $grand_total += $sub_total;
                    }
                } else {
                    echo '<p class="empty">your card is empty!</p>';
                }
                ?>
            </div>
            <div class="delete-all">
            <a href="cart.php?delete_all" class="btn btn-primary <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all</a>
        </div>

        <div class="cart-total">
            <p class="card-total-label">grand total : <span>$
                    <?php echo $grand_total; ?>/-
                </span></p>
            <div class="cart-total-buttons">
                <div>
                    <a href="shop.php" class="btn btn-primary">continue shopping</a>
                </div>
                <div>
                    <a href="checkout.php" class="btn btn-primary <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">proceed to checkout</a>
                </div>
            </div>
        </div>
        </div>
        
    </section>





    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>