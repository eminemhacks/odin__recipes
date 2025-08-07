<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <title>OdinRecipes</title>
    <meta name="description" content="A collection of delicious recipes to try at home.">
    <meta name="keywords" content="recipes, cooking, food, delicious, home cooking">
    <meta name="author" content="OdinRecipes Team">
    
      <!-- Fonts -->
    <link href="../https://fonts.googleapis.com" rel="preconnect">
    <link href="../https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="../https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor ../CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS file -->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">

        <div class="branding d-flex align-items-center">

          <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="../home_page/index.php" class="logo d-flex align-items-center me-auto me-xl-0">
              <h1 class="sitename">OdinRecipes  </h1>
            </a>
            
            <nav id="navmenu" class="navmenu">
              <ul>
                <li><a href="#hero" class="active">Home<br></a></li>
                <li><a href="../home_page#about">About<br></a></li>
                <li><a href="../home_page#recipe">Recipes<br></a></li>
                <!-- <li><a href="#services">Services<br></a></li>
                <li><a href="#contact">Contact<br></a></li> -->
                
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

          </div>

        </div>

    </header>
    
    <br>
    <br>
    <br>
    <main class="main">
        <section id="meatloaf" class="recipe section">
            <!-- Section Title -->
            <div class="container d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="classic-meatloaf">
                    <h1 class="">Classic Meatloaf</h1>
                </div>
            </div><!-- End Section Title -->
        </section>

        <!-- Classic meatloaf steps to make -->
        <section class="section">
            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <div class="meatloaf-info">
                    <div class="card col-lg-2 col-md-2">
                        <img class="img-fluid" src="../assets/img/recipe-list/classic_meatloaf.jpg" alt="">
                    </div><br>
                    <h2 class="text-align-center">How to Make Meatloaf</h2>
                    <div class="col-lg-6 col-sm-4 order-2 order-lg-1 content text-white"></div>
                        <p>You'll find the full, simple recipe below, but here's a brief overview of what you can expect when making this Classic Meatloaf.</p>
                        <h3>Chop the Vegetables</h3>
                        <p>Combine the vegetables and garlic in a food processor until nearly pureed.</p>       
                        <h3>Form the Meatloaf</h3>
                        <p>Combine the vegetables, ground chuck, Worcestershire sauce, spices, and egg. Sprinkle in the bread crumbs and mix them with your hands (be careful not to overmix).</p>
                        <h3>Bake</h3>
                        <p>Form the meat mixture into a loaf and place it in a prepared baking pan. Bake for about 15 minutes.</p>
                        <h3>Make the Glaze</h3>
                        <p>Combine brown sugar, ketchup, Dijon, and sriracha to make the glaze.</p>
                        <h3>Glaze the Meatloaf</h3>
                        <p>Spoon the glaze over the slightly hot meatloaf. Return meatloaf to the oven and bake until the internal temperature reaches 160 degrees F.</p>
                    </div>
                </div>
            </div>
        </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include '../templates/footer.html';?>