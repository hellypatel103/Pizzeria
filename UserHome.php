<?php
    include 'db_connect.php';
    
    session_start();
    $name = $_SESSION['user'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media=" screen and (max-width: 1120px)" href="css/phone1.css">
    <link href="piz2.jpg" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

    #logout{
        padding: 5px 20px;
        font-weight: bold;
        font-size: 20px;
        border-radius: 4px;
        margin: 5px 20px;
        position:absolute;
        top: 10px;
        right: 10px;
        background-color: #28a745;
        color: white;
        border-color: #28a745;
    }

    #logout:hover{
        background-color:chocolate;
        border-color: chocolate;
    }

    body{
        background-color: rgb(61, 59, 59);
    }

    #book-info p{
        color: white;
    }

    #intro h1{
        color: rgb(249, 191, 191);
        font-weight: bold;
    }
</style>
<body>
    <div class="navp sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div id="logo">
            <img src="img/piz2.jpg" alt="Logo">
        </div>
        <div id="name">Pizzeria</div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active mr-auto">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-auto">
              <a class="nav-link" href="#book-table">About Us</a>
            </li>
            <li class="nav-item mr-auto">
                <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item mr-auto">
                <a class="nav-link" href="#menu">Menu</a>
            </li>
            <li class="nav-item mr-auto">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li>
                <form action="logout.php">
                    <button id="logout">Logout</button>
                </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <section id="home">
        <div id="intro">
            <h1 id="primary">Hi <?php echo $name;?>! Welcome to the best PIZZERIA!❤️</h1>
        </div>
        <div id="book-table">
            <div id="book-info">
                <h1 style="color: white;">About us</h1>
                <p>Are you craving mouthwatering, delicious pizza that will transport your taste buds to Italy? Look no further than Crust & Cheese Pizzeria, the ultimate destination for pizza lovers like you!                </p>
                <p>We serve one of the healthiest pizzas among all other pizza outlets. Pizzeria has finger-licking pizzas, pasta, and garlic bread prepared by the usage of fresh ingredients and innovative techniques. </p>
                <p>
                    We offer the option to customize pizzas according to individual preferences. Customers can choose their desired crust, sauce, cheese, and toppings, allowing for a personalized dining experience.
                </p> 
            </div>
            <div id="book-form">
                <form action="BookTable.php" method="post">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <label for="phone">Phone No. :</label>
                    <input type="tel" name="phone" id="phone" placeholder="1234-567-890" required>
                    <label for="email">Email Id :</label>
                    <input type="email" name="email" id="email" placeholder="abc@gmail.com" required>
                    <label for="date">Date :</label>
                    <input type="date" name="date" id="date" pattern="dd/mm/yyyy" required>
                    <label for="time">Time :</label>
                    <input type="time" name="time" id="time" placeholder="Time" required>
                    <button id="book-now" onclick="showmsg();">Book Now</button>
                </form>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="left">
            <h4>Why choose us</h4>
            <h1>
                Our key fetures
            </h1>
            <img src="img/piz2.jpg" alt="">
        </div>
        <div class="right">
            <div class="quality">
            <h4>Gourmet Pizzas: </h4> <p>Indulge in a wide array of gourmet pizzas made with love and the finest ingredients. From classic Margherita and Pepperoni to innovative combinations like BBQ Chicken and Pesto Veggie, our pizzas are bursting with flavor and prepared to perfection.</p>
            </div>
            <div class="quality">
           <h4>Fresh, Quality Ingredients:</h4>  <p>We believe that great ingredients make all the difference. That's why we source the freshest produce, finest meats, and premium cheeses to create pizzas that are both satisfying and unforgettable.</p>
            </div>
            <div class="quality">
            <h4>Warm and Welcoming Atmosphere:</h4><p>Step into our cozy pizzeria, filled with the aroma of freshly baked pizza. Our friendly staff will greet you with a smile and provide exceptional service, ensuring you have a memorable dining experience with friends and family.</p>
            </div>
        </div>
        </div>
    </section>

    <section id="menu" style="color: white">
        <h2>Delicious Food Menu</h2>
        <div id="food-menu">
            <div class="container">
                <div class="item">
                    <img src="img/piz2.jpg" alt="">
                    <div class="details">
                        <h3>Classic Pizza&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span>150.00 Rs</span></h3>
                        <p style="color: rgb(130, 199, 199)">
                            Cheesy layer with tomato, jalepano and onion toppings with extra mozerella cheese.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/piz2.jpg" alt="">
                    <div class="details">
                        <h3>Papperoni Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>120.00 Rs</span></h3>
                        <p style="color: rgb(130, 199, 199)">
                           Fusion of paneer, cheese and tomato on bread
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/piz2.jpg" alt="">
                    <div class="details">
                        <h3>7 Cheese World Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>200.00 Rs</span></h3>
                        <p style="color: rgb(130, 199, 199)">
                            We use 7 types of cheese to drool you more
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/piz2.jpg" alt="">
                    <div class="details">
                        <h3>Margerita Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>140.00 Rs</span></h3>
                        <p style="color: rgb(130, 199, 199)">
                            Cheesy cheese pizzaa
                        </p>
                    </div>
                </div>
            </div>
            <div id="poster">
                <img src="img/piz4.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="contact">
        <h1>Contact us</h1>
        <div id="contact-info">
            <div class="address">
                <img src="img/location.png" alt="">
                <div class="det">
                    <h3>Address</h3>
                    <p>Surat,India</p>
                </div>
            </div>
            <div class="call">
                <img src="img/telephone.png" alt="">
                <div class="det">
                    <h3>Call Us</h3>
                    <p>+919988776655</p>
                </div>
            </div>
            <div class="email">
                <img src="img/email.png" alt="">
                <div class="det">
                    <h3>Email Us</h3>
                    <p>support@pizzeria.com</p>
                </div>
            </div>
            <div class="followus">
                <img src="img/follower.png" alt="">
                <div class="det">
                    <h3>Follow us</h3>
                    <img src="img/below.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <script>
        function showmsg(){
            alert("Your table has been booked!");
        }
    </script>
</body>
</html>