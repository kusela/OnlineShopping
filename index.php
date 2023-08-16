<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SVG MART</title>
    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            margin: 0;
            padding: 0;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #343a40;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .navbar-right {
            display: flex;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-align: center;
            text-decoration: none;
            padding: 10px;
        }

        .navbar a:hover {
            background-color: #ffc107;
            color: black;
        }
   /* Dropdown Content */
.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black; 
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: white; 
    transition: background-color 0.3s;
}

.dropdown-content a:hover {
    background-color: #444; /* Darken the background on hover */
}

.dropdown:hover .dropdown-content {
    display: block;
}

#banner_content {
    background-image: url('images/flat-lay-vegetables-frame.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    border-radius: 0.5rem;
    padding: 20px;
    text-align: center;
    margin-top: 0px;
    height: 400px; /* Set the height to 300px */

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#banner_content h1 {
    font-size: 2.5rem;
    color: black;
    margin-bottom: 10px;
}

#banner_content p {
    font-size: 1.2rem;
    color: #ffc107;
    margin-bottom: 20px;
}
        .container-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .col-4 {
            padding: 10px;
        }

        .col-4 img {
            max-width: 100%;
            border-radius: 0.5rem;
            transition: transform 0.3s;
        }

        .col-4 img:hover {
            transform: scale(1.1);
        }

        .h5 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Footer Section */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* Hide Sign In and Login Forms */
        #signin-form,
        #login-form {
            display: none;
        }
    </style>
</head>
<body style="margin-bottom:200px">
<?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <div id="banner_content">
        <h1> SVG MART:)</h1>
        <p>We sell Happiness</p>
        <a href="index.php" style="background-color: #ffc107; color: black; padding: 10px 20px; border-radius: 5px;">Shop Now</a>
    </div>
    <div class="container pt-5">
    <h2 class="text-center" style="font-size: 30px; font-weight: bold;">Categories</h2>
        <div class="container-grid">
            <div class="col-4 py-3">
            <a href="groceries.php#groceries">
                <img src="grocery.jpg" class="img-fluid" alt="" style="border-radius: 0.5rem;">
                <div class="h5 pt-3 font-weight-bolder">
                    Groceries
                </div>
            </a>
        </div>
        <div class="col-4 py-3">
            <a href="personal.php#personal">
                <img src="images/pers.jpg" class="img-fluid zoom" alt="" style="border-radius: 0.5rem;">
                <div class="h5 pt-3 font-weight-bolder">
                    Personal Care
                </div>
            </a>
        </div>
        <div class="col-4 py-3">
            <a href="stationary.php#stationary">
                <img src="images/stat.jpeg" class="img-fluid" alt="" style="border-radius: 0.5rem;">
                <div class="h5 pt-3 font-weight-bolder">
                    Stationary
                </div>
            </a>
        </div>
        <div class="col-4 py-3">
            <a href="house.php#household">
                <img src="images/hh.jpeg" class="img-fluid" alt="" style="border-radius: 0.5rem;">
                <div class="h5 pt-3 font-weight-bolder">
                    Household
                </div>
            </a>
        </div>
        <div class="col-4 py-3">
            <a href="toys.php#toys">
                <img src="images/toy.jpeg" class="img-fluid" alt="" style="border-radius: 0.5rem;">
                <div class="h5 pt-3 font-weight-bolder">
                    Toys and Baby
                </div>
            </a>
        </div>
        <div class="col-4 py-3">
            <a href="snacks.php#snacks">
                <img src="images/sna.jpeg" class="img-fluid" alt="" style="border-radius: 0.5rem;">
                <div class="h5 pt-3 font-weight-bolder">
                    Snacks and Soft Drinks
                </div>
            </a>
        </div>
    </div>
</div>
        </a>
    </div>
</div>
    <?php include 'includes/footer.php'?>
</body>
</html>