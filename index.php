<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="databaseconnection_db";

 $conn=mysqli_connect($servername,$username,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());

 }

 if(isset($_POST['save']))
 {	
      $name = $_POST['name'];
      $email = $_POST['mail'];
      $phone = $_POST['hone'];
      $message = $_POST['message'];
	 $sql_query = "INSERT INTO `databasec` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message');";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully !";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
  
 }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport"contents="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title> Best online Food delivery services in india | MyonlineMeal.com</title>
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" media="screen and (max-width: 1170px)"href="phone.css">
    
    </head>

    <body>
        <nav id="navbar">
            <div id="logo">
                <img src="image 2/logo.png" alt ="MyOnlineMeal.com">
            </div>
            <ul>
                <li class="item"><a href="#home">Home</a></li>
                <li class="item"><a href="#services-container">Service</a></li>
                <li class="item"><a href="#client-section">Our Clients</a></li>
                <li class="item"><a href="#contact">Contact us</a></li>
            </ul>
        </nav>
        <section id="home">
            <h1 class="h.primary">WELCOME TO POOJA'S KITCHEN</h1>
     <p>This the best place for odering differnt snacks we provide lots of varities.</p>
      <p>visit the templete for more information  </p>
           
               
                    
        </section>

        <section id="services-container">
            <h1 class="h-primary center">Our Services</h1>
            <div id="services">
                <div class="box">
              <img src="image 2/pp4.jfif" alt="">
              <h2 class="h-secondary center">Food Odering</h2>
              <p class="center">we provide all types of food services with minimum and 
                affordable cost . the differnt dishes are pizzas,burger,chiness,etc
                 check the differnt dishes and order now.</p>
                 <a href="page1.html">click here </a>
            </div>
            <div class="box">
                <img src="image 2/pp2.jpg" alt="">
                <h2 class="h-secondary center">Bakery Products</h2>
                <p class="center">With lunch and dinner services we also have bakery items
                    these atoms are fresh and nutritious
                    we include bread,rolls,cookies,pies,muffins,cakes etc</p>
                    <a href="page2.html">click here </a>
              </div>
              <div class="box">
                <img src="image 2/pp5.jpg" alt="">
                <h2 class="h-secondary center">Desserts</h2>
                <p class="center">here we provide best indian sweet dishes which you never taste 
                    before 
                    with best prize and best expirence lets come and explore with friends and family and 
                    relatives.
                </p>
                    
                <a href="page3.html">click here </a>
              </div>
        </section>
        <section id="client-section">
            <h1 class="h-primary center">Our Clients</h1>
            <div id="clients">
                <div class="client-item">
                    <img src="image 2/new1.png" alt="Our Clients">
                </div>
                <div class="client-item">
                    <img src="image 2/new2.png" alt="Our Clients">
                </div>
                <div class="client-item">
                    <img src="image 2/new3.png" alt="Our Clients">
                </div>
                <div class="client-item">
                    <img src="image 2/new5.jfif" alt="Our Clients">
                </div>
                
            </div>
        </section>

        <section id="contact">
            <h1 class="h-primary center">Contact Us</h1>
            <div id="contact-box">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type=" text" name="name"  placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="mail" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="phone" name="hone"  placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                       <textarea name="message" cols="30" rows="10"></textarea>
                    </div>
                    <tr>
                        <td><input name="save" type="submit" value="submit" id="submit"></td>
                    </tr>
                </form>
            </div>
        </section>
        <footer>
            <div class="center">
                copyright &copy; www.pooja's kitchen.com. All rigjts reserved!
            </div>
        </footer>
    </body>