<!-- Php -->
<?php
$insert=false;
if(isset($_REQUEST['Submit']))
{
   $server="localhost";
   $username="root";
   $password="";
   $dbName="DishItOutJunction";

  $con=mysqli_connect($server,$username,$password,$dbName);
  if($con)
  {
    // echo "Connection Successfully Established...";
     $Name=$_POST['Name'];
     $Phone=$_POST['Phone'];
     $Email=$_POST['Email'];
     $Message=$_POST['Message'];
  
     $sql="INSERT INTO `dishitoutjunction` (`Name`, `Phone`, `Email`, `Message`, `Date`)     VALUES ('$Name', '$Phone', '$Email', '$Message', current_timestamp());";
     if($con->query($sql)==true)
     {
       $insert=true;
     }
     else
     {
        echo "Error:$sql <br> $con->error"; 
     }
     $con->close();
 }
else
{
  echo "Connection Failed Due To " . mysqli_connect_error;
}
}
?>

 <!-- HTML,CSS,Bootstrap -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dish It Out Junction</title>
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
  <style>
    .header {
      min-height: 150px;
    }

    .menu a {
      font-family: "Fed Pig Sans";
      text-align: center;
      border-radius: 10px;
    }

    .menu a:hover {
      background-color: black;
      color: white !important;
      transition: all 0.2s ease-in-out 0s;
      transition-duration: 0.5s;
      box-shadow: 1px 1px 5px purple;
      border-radius: 10px;
    }

    .order:hover {
      background-color: black !important;
      color: #ffc107;
    }

    .info {
      min-height: 600px;
      background-image: url(R19.jpg);
      border-radius: 40px;
      background-size: 100% 100%;
    }
    .fa-brands:hover{
      color:white;
    }
   
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-12 bg-warning header">
        <p class="h1 text-center mt-4" style="font-family: 'Black Ops One', cursive"><span class="h1 text-light">Dish
            It</span> Out</p>
        <p>
          <p class="text-center" style="font-family: 'Black Ops One', cursive;">Where every flavor tells a story.</p>
          <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-warning" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item menu">
                  <a class="nav-link ms-5 text-dark" href="#"><b>Our Menu</b></a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link ms-4 text-dark" href="#"><b>About us</b></a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link ms-4 text-dark" href="#"><b>Locations</b></a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link ms-4 text-dark" href="#"><b>Blog</b></a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link ms-4 text-dark" href="#"><b>Gallery</b></a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link ms-4 text-dark" href="#"><b>Contact</b></a>
                </li>
                <button class="ms-4 order border border-2 border-dark bg-warning px-3"><b>Order Online</b></button>
              </ul>
              <button class="ms-4 order border border-2 border-dark bg-warning px-3 py-2"><b>Franchise</b></button>

              <a href="#" style="text-decoration: none;color: black;" class="ms-5 mb-3">
                <i class="fa-brands fa-facebook fa-xl ps-4 pt-4"></i>
                <i class="fa-brands fa-twitter fa-xl ps-4 pt-4"></i>
                <i class="fa-brands fa-instagram fa-xl ps-4 pt-4"></i>
                <i class="fa-brands fa-youtube fa-xl ps-4 pt-4"></i>
              </a>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 bg-warning px-0">
        <!-- Start Slider -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="R2.jpg" class="d-block w-100" alt="Error While Loading" style="height:400px;">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="R3.jpg" class="d-block w-100" alt="Error While Loading" style="height:400px;">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="R4.jpg" class="d-block w-100" alt="Error While Loading" style="height:400px;">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- End Slider -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning p-0">
        <img src="R12.jpg" class="img-fluid p-5" style="height:350px;width:600px;">
      </div>
      <div class="col-sm-6 bg-warning">
        <p class="p-5" style="font-family: 'Black Ops One',cursive;">Dish It Out was started in the year 2023 by the Prince Singh. Dish It Out serves freshest ingredients with the finest taste. Our chefs fuse together flavor and aroma to capture the essence of the traditional North Indian cuisine.
          “Indulge in the finest vegetarian cuisine at Dish It Out restaurant! 🌿🍴 Our restaurant, located in Lakhimpur Kheri, India, offers a wide variety of delicious vegetarian dishes that are sure to satisfy your cravings. Our commitment to using only the freshest, locally-sourced ingredients ensures that every bite is bursting with flavor."</p>
         
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning p-5">
        <img src="R7.jpg" class="img-fluid">
      </div>
      <div class="col-sm-6 bg-warning pt-4">
        <div class="card mb-3 ms-4 mt-4" style="max-width: 560px;float: left;">
          <div class="row g-0">
            <div class="col-md-6 border border-2 border-success rounded-1">
              <img src="Prince.png" class="img-fluid rounded-start" style="height:350px;">
            </div>
            <div class="col-md-6 text-bg-success rounded-1">
              <div class="card-body">
                <h5 class="card-title"><b>Dish It Out</b></h5>
                <p class="card-text">
                  “We believe in creating an unmatched experience by maintaining the highest standard of quality,hygiene, service and customer satisfaction.”<br><br>
                  <b>Er.Prince Singh</b><br>
                  Chairman & Software Engineer
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 bg-warning pt-3">
          <h1 class="text-center" style="font-family: 'Alex Brush', cursive;font-size: 80px;"><b>Our Favorite</b></h1>
          <p class="text-center">Explore Our Authentic Vegetarian Barbecue & North Indian Cuisine</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning">
        <p class="h1 text-center mt-5" style="font-family: 'Bebas Neue', sans-serif;">Tawa Paneer Bread Pizza</p>
        <p class="mt-3 p-5">Tawa Paneer Bread Pizza is a delicious and easy-to-make dish that's perfect for satisfying your pizza cravings. This quick and easy recipe combines the classic flavors of paneer, capsicum, chili flakes, and salt to create a mouthwatering pizza that's cooked to perfection on a tawa. With a total cook time of just 25 minutes, this dish is perfect for a quick and satisfying meal. So why wait? Indulge in the irresistible taste of Tawa Paneer Bread Pizza today! 🍕
       </p>
      </div>
      <div class="col-sm-6 bg-warning p-5">
        <img src="R23.jpg" alt="" class="img-fluid border border-3 border-dark rounded-5">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning p-5">
        <img src="R25.webp" alt="" class="img-fluid border border-3 border-dark rounded-5">
      </div>
      <div class="col-sm-6 bg-warning">
        <p class="h1 text-center mt-5" style="font-family: 'Bebas Neue', sans-serif;">Pudina Aloo Curry</p>
        <p class="p-4">Pudina Aloo Curry, also known as Minty Potato Curry, is a delicious and aromatic dish that combines the comforting taste of potatoes with the refreshing flavor of mint. This simple yet flavorful curry is a testament to the ingenious way Indian cooking brings together seemingly simple ingredients to create a masterpiece of taste. The key ingredient in this dish is pudina, or mint leaves, which lend a fresh and tangy flavor to the curry, perfectly complementing the starchy goodness of potatoes. Serve it with steamed rice, fluffy naan, or hot rotis for a nourishing and satisfying meal.
       </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning">
        <p class="h1 text-center mt-5" style="font-family: 'Bebas Neue', sans-serif;">Peanut Tikki 🥜🍴</p>
        <p class="p-5">Peanut Tikki is a delicious and unique snack that's sure to satisfy your cravings. Made with roasted and ground peanuts, this tikki has a nutty flavor and a crunchy texture that's simply irresistible. The addition of spices, lemon juice, and green chilies adds a burst of flavor to this dish, making it the perfect snack for any occasion.
          Whether you're hosting a get-together or just looking for a tasty midday treat, Peanut Tikki is the perfect choice. Its earthy charm and distinct taste make it a standout dish that's sure to impress². So why wait? Indulge in the mouthwatering taste of Peanut Tikki today! 🥜🍴
       </p>
      </div>
      <div class="col-sm-6 bg-warning p-5">
        <img src="R26.webp" alt="" class="img-fluid border border-3 border-dark rounded-5">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning p-5">
        <img src="R27.jpg" alt="" class="img-fluid border border-3 border-dark rounded-5">
      </div>
      <div class="col-sm-6 bg-warning">
        <p class="h1 text-center mt-5" style="font-family: 'Bebas Neue', sans-serif;">Oats And Moong Dal Dahi Vada</p>
        <p class="p-4">Oats And Moong Dal Dahi Vada is a delicious and healthy twist on the classic Indian snack. This guilt-free version of Dahi Vada allows you to indulge in your favorite dish without any worry, as the vadas are not fried, but steamed. Made with a combination of oats and moong dal, this dish is packed with fiber and protein, making it a nutritious and satisfying snack.
          The creamy curd, tangy tamarind chutney, and crispy goodness of vadas combine to create an undeniably comforting taste.
          So why wait? Indulge in the mouthwatering taste of Oats And Moong Dal Dahi Vada today! 🍴🥣
       </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 bg-warning">
        <p class="h1 text-center mt-5" style="font-family: 'Bebas Neue', sans-serif;">Rice Rotla</p>
        <p class="mt-3 p-4">Rice Rotla is a delicious and versatile dish that's perfect for using up leftover rice. This super soft Gujarati dish combines leftover rice with wheat flour, green chilies, chopped onion, and spices to create a thin, crispy paratha that's packed with flavor¹. The unique combination of ingredients gives Rice Rotla a distinct taste and a satisfying crunch in every bite².
          Whether you're looking for a quick and easy breakfast or a tasty snack, Rice Rotla is the perfect choice. Its wholesome ingredients and simple preparation make it a great option for any time of day. So why wait? Indulge in the irresistible taste of Rice Rotla today! 🍚🍴
       </p>
      </div>
      <div class="col-sm-6 bg-warning p-5">
        <img src="R28.jpg" alt="" style="width: 530px;" class="img-fluid border border-3 border-dark rounded-5">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 bg-warning p-5">
      <h1 class="text-center mt-3" style="font-family: 'Alex Brush', cursive;font-size: 80px;"><b>Our Gallery</b></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
          <img src="R11.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
        <img src="R4.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
          <img src="R5.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
        <img src="R6.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
          <img src="R29.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
        <img src="R30.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
          <img src="R17.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 bg-warning">
        <img src="R32.jpg" alt="Error" style="float: left;" class="img-fluid rounded-5 p-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 bg-warning pt-3">
        <h1 class="text-center" style="font-family: 'Alex Brush', cursive;font-size: 80px;">Testimonial</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 bg-warning p-5">
           <img src="R33.jpg" alt="" class="img-fluid rounded-5" style="height:365px;">
          <h4 class="text-center pt-4"><b>Salman Khan</b></h4>
          <p class="text-center" style="font-family: 'Bebas Neue', sans-serif;">Actor <br><br>This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone ! Delicious food, waiters are very attentive, and super nice atmosphere. Plus it’s all at an affordable price. I would like to come back here again and again.</p>
      </div>
      <div class="col-sm-4 bg-warning p-5"> 
        <img src="R36.jpg" alt="" class="img-fluid rounded-5 h-50 w-100">
          <h4 class="text-center pt-4"><b>Priyanka Chopra</b></h4>
          <p class="text-center" style="font-family: 'Bebas Neue', sans-serif;">Actress <br> <br>This place is great! Atmosphere is chill and cool but the staff is also really friendly. They know what they’re doing and what they’re talking about, and you can tell making the customers happy is their main priority. Food is pretty good, some italian classics and some twists, and for their prices it’s 100% worth it.</p>
      </div>
      <div class="col-sm-4 bg-warning p-5">
        <img src="R37.webp" alt="" class="img-fluid rounded-5 w-100" style="height:365px;">
          <h4 class="text-center pt-4"><b>Fatima Sana Saikh</b></h4>
          <p class="text-center" style="font-family: 'Bebas Neue', sans-serif;">Actress <br> <br> Do yourself a favor and visit this lovely restaurant in Lakhimpur Kheri. The service is unmatched. The staff truly cares about your experience. The food is absolutely amazing – everything we tasted melted in other mouths. Absolutely the best meal we had in Dish It Out Junction. Highly recommend!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5 bg-warning">
        <img src="R38.png" alt="" class="img-fluid h-75 w-75 ms-5">
      </div>
      <div class="col-sm-7 bg-warning">
        <p class="text-primary h1 ps-5 pe-5" style="font-family: 'Black Ops One', cursive;"><b>Own a Franchise ! </b></p>
        <p style="font-family: 'Black Ops One', cursive;" class="ps-5 pe-5 pt-2">Are you looking for a new business opportunity? Look no further than Dish It Out Junction! Our franchise program offers a unique and exciting opportunity to be part of a growing and successful brand. With our delicious menu, top-notch customer service, and proven business model, you’ll be on your way to success in no time. Don’t miss out on this chance to join the Dish It Out Junction family – apply for a franchise today! 🍽️👨‍🍳👩‍🍳
          <br>A franchise with The Dish It Out Group comes with an immediate advantage of working with a well established brand.
          If you have the spirit of an entrepreneur, the zeal for growth, commitment for building a successful business and the ability to accept new challenges, we offer you the right opportunity.  </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5 bg-warning p-5">
        <p class="h2 ms-5 text-center" style="font-family: 'Black Ops One', cursive"><b>Dish It Out</b></p>
        <p class="ms-5 text-light" style="font-family:'Black Ops One' cursive;font-size: 18px;">Dish It Out is an authentic vegetarian barbecue and North India restaurants and one of the flagship brands of the Prince Group. With its humble beginnings in Lakhimpur Kheri in 2023, the Group today has more than 150 successfully operating restaurants across the globe. The group now is a highly diversified entity with interests in Hospitality, Packaged Foods, Manufacturing & Distribution, Exports, Hoteliering and Real Estate. </p>
      </div>
      <div class="col-sm-5 bg-warning p-5 container">
        <h4 class="text-center" style="font-family: 'Black Ops One', cursive"><b>LEAVE US A MESSAGE</b></h4>
        <p class="text-center">And we will reach out to you at the earliest </p>
        <form action="index.php" method="post">
        <input type="text" placeholder="Your Name" class="form-control bg-warning w-75 ms-5 mt-2" name="Name" id="Name">
        <input type="text" placeholder="Phone Number" class="form-control bg-warning w-75 ms-5 mt-2" name="Phone" id="Phone">
        <input type="email" placeholder="Email Address" class="form-control bg-warning w-75 ms-5 mt-2" name="Email" id="Email">
        <textarea  rows="3" placeholder="Your Message Here..." class="form-control bg-warning w-75 ms-5 mt-2" name="Message" id="Message"></textarea>
        <button class="btn btn-outline-dark mt-3 ms-5" onclick="change()" name="Submit"><b>Submit</b></button>
        </form>
      </div>
      <div class="col-sm-2 bg-warning p-5">
        <a href="#" style="text-decoration: none;color: black;">
          <i class="fa-brands fa-facebook fa-xl m-3 p-2"></i>
          <i class="fa-brands fa-twitter fa-xl m-3 p-2"></i>
          <i class="fa-brands fa-instagram fa-xl m-3 p-2"></i>
          <i class="fa-brands fa-youtube fa-xl m-3 p-2"></i>
        </a>
      </div>
    </div>
    <div class="row">
       <div class="col-sm-12 text-bg-dark p-2 text-center">
        Copyright 2023 © Dish It Out Restaurant - Prince Singh
       </div>
    </div>
  </div>
  <script>
    // function change()
    // {
    //   var changeDiv=document.querySelector(".container");
    //   changeDiv.innerHTML="Thanks For Contacting us.<br>Our Team Will Contact You Shortly...";
    //   changeDiv.style.fontSize="40px";
    //   changeDiv.style.fontFamily='Black Ops One','cursive';
    // }
  </script>
  <script src="bootstrap.bundle.js"></script>
</body>

</html>