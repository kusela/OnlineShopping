<?php
require "includes/common.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Items</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        .container {
            margin: 2rem auto;
            padding: 1rem;
            max-width: 800px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .remove_item_link {
            color: red;
            text-decoration: none;
        }
        .total {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cart Items</h1>
    </header>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $items = [
                    "Aashirvaad atta",
                    "Bengalgram",
                    "Fortune oil",
                    "Ricebag",
                    "Horlicks",
                    "Almonds",
                    "Cashews",
                    "Chilli Powder",
                    "Coriander powder",
                    "Ginger paste",
                    "GreenMoongdal",
                    "Raisins",
                    "Roasted bengalgram",
                    "Tea powder",
                    "Toor dal",
                    "Toothpaste"
                ];

                $total = 0;

                foreach ($items as $index => $item) {
                    $price = rand(50, 150);
                    $total += $price;

                    echo "<tr>
                            <td>#{$index}</td>
                            <td>{$item}</td>
                            <td>Rs {$price}</td>
                            <td><a href='#' class='remove_item_link'>Remove</a></td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <div>
            <p>Total: Rs <?php echo $total; ?></p>
            <button class="btn btn-primary" onclick="checkout()">Checkout</button>
            <a href="index.php">Home</a>
        </div>
    </div>
    
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->

    <script>
        function checkout() {
            alert("Order successful! Thank you for your purchase.");
        }
    </script>
    </body>
</html>

