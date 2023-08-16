<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.container {
    font-family: Arial, sans-serif;
}

.product-row {
    display: flex;
    flex-wrap: wrap;
    margin: -10px; 
}

.product-col {
    flex: 25%; /* 4 columns per row */
    padding: 10px;
    box-sizing: border-box;
}

.card {
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 20px;
}

.card img {
    max-width: 100%;
}

.btn {
    background-color: #ffc107;
    border: none;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #ffca2c;
}
.product-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0;
}

.product-col {
    flex-basis: calc(25% - 20px);
    margin-bottom: 20px;
}

.card {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.card img {
    max-width: 100%;
    height: auto;
}

.card h6 {
    font-size: 16px;
    font-weight: bold;
}

.card p {
    margin-top: 10px;
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    cursor: pointer;
}

 </style>
    <title>TOYS</title>
</head>
<body style="margin-bottom:200px">
<?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <div class="container" style="margin-top: 65px">
    <h1 class="text-center">TOYS AND BABY CARE</h1>
        <div class="product-row">
            <?php
                              $imageNames = [
                                "babylotion", "babysoap", "CleansingBaby", "Feeding Bottle", "Car", "Cerelac",  "panda toy", "perfume",
                                "Huggies", "Lactogen","Barbieset", "Biketoy",
                               
                                "powder", "Teddy toy"
                            ];
                            
            // Loop through your products
            for ($i = 1; $i <= 16; $i++) {
                ?>
                <div class="product-col">
                    <div class="card">

                    <img src="images/Toys/<?= $imageNames[$i - 1] ?>.webp" alt="<?= $imageNames[$i - 1] ?>" class="img-fluid pb-1">

                        <div class="figure-caption">
                        <h6><?= $imageNames[$i - 1] ?></h6>
                            <h6>Price : Rs <?= ($i * 1000) ?></h6>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a></p>
                            <?php } else {
                                if (check_if_added_to_cart($i)) {
                                    echo '<p><a href="#" class="btn btn-warning text-white" disabled>Added to cart</a></p>';
                                } else {
                                    ?>
                                    <p><a href="cart-add.php?id=<?= $i ?>" name="add" value="add" class="btn btn-warning text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
    <!--footer ends-->
</body>
</html>