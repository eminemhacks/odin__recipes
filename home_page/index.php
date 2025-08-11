<?php include '../templates/header.html'; ?>

<main class="main">

  <!-- Hero Section  -->
  <section class="hero section dark-background" id="hero">
    <img src="../assets/img/hero-bg.png" alt="Delicious food background" data-aos-delay="50">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
          <h2 data-aos="fade-up" data-aos-delay="80">Our <span>Delicious Recipes</span></h2>
          <p data-aos="fade-up" data-aos-delay="150">Browse and view some of our recipes and learn to make the best dishes!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about"  class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-2">
          <img src="../assets/img/about.jpg" alt="" class="img-fluid meatloaf-info-img">
        </div>
        <div class="col-lg-6 col-sm-4 order-2 order-lg-1 content text-white">
          <h3>About OdinRecipes</h3>
          <p class="fst-italic">
            OdinRecipes is a simple, clean platform where cooking meets ease. We focus on making recipes accessible, enjoyable, and beginner-friendly.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>Discover a curated selection of classic and modern dishes.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Follow step-by-step instructions with clear visuals.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Enjoy tips, substitutions, and flavor-enhancing tricks.</span></li>
          </ul>
          <p>
            Whether you're cooking your first meal or perfecting a family favorite, OdinRecipes is your reliable kitchen companion—designed to grow with you, one recipe at a time.
          </p>
        </div>
      </div>
    </div>
  </section>
  <h1>        </h1>

  <!-- Recipe Section -->
  <section id="recipe" class="recipe-list section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2 class="text-white">Recipes</h2>
      <p>Check Our Delicious Recipes</p>
    </div><!-- End Section Title -->
    <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul class="recipe-list-filters isotope-filters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-meatloafs">Meatloaf</li>
            <li data-filter=".filter-beef">Beef</li>
            <li data-filter=".filter-italian">Italian</li>
          </ul>
        </div>
      </div><!-- Recipe Filters -->
      <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-6 recipe-list-item isotope-item filter-meatloafs">
          <img src="../assets/img/recipe-list/classic_meatloaf.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/classic-meatloaf.php">Classic Meatloaf</a><span>4.6 (670 Ratings) <strong>549 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            A hearty, no-fuss favorite—this classic meatloaf delivers rich, savory flavor with every comforting slice.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-italian">
          <img src="../assets/img/recipe-list/italian-pasta-salad.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/italian-pasta-salad.php">Italian Pasta Salad</a><span>4.8 (Ratings) <strong>139 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Italian Pasta Salad is a zesty, colorful mix of pasta, fresh vegetables, salami, cheese, and Italian dressing—served chilled for a refreshing side or light meal.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-meatloafs">
          <img src="../assets/img/recipe-list/dill_pickle_meatloaf.png" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/dill-pickle-meatloaf.php">Dill Pickle Meatloaf</a><span>4.4 (376 Ratings) <strong>305 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            A tangy twist on a classic, this dill pickle meatloaf blends savory beef with zesty pickle flavor for a bold, delicious bite.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-beef">
          <img src="../assets/img/recipe-list/beef-taco-meat.png" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/beef-taco-meat.php">Ground Beef Taco Meat</a><span>4.5 (395 Ratings) <strong>225 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Bold, seasoned, and ready in minutes—this ground beef taco meat is the perfect filling for tacos, bowls, and more.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-italian">
          <img src="../assets/img/recipe-list/italian-lasagna.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/italian-lasagna.php">Italian Lasagna</a><span>4.2 (89 Ratings) <strong>89 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Bold, seasoned, and ready in minutes—this ground beef taco meat is the perfect filling for tacos, bowls, and more.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-meatloafs">
          <img src="../assets/img/recipe-list/tenesse-meatloaf.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/tennese-meatloaf.php">Tennessee Meatloaf</a><span>4.6 (167 Ratings) <strong>138 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Tennessee Meatloaf is a hearty blend of ground meats, oats, and spices, topped with a sweet and tangy ketchup glaze for classic Southern comfort.

          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-beef">
          <img src="../assets/img/recipe-list/crispy-fried-ground-beef-tacos.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/crispy-fried-beef-taco.php">Crispy Fried Ground Beef Tacos</a><span>4.5 (695 Ratings) <strong>376 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-beef">
          <img src="../assets/img/recipe-list/cattle-ranch-casserole.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/cattle-ranch-casserole.php">Cattle Ranch Casserole</a><span>4.5 (695 Ratings) <strong>376 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-italian">
          <img src="../assets/img/recipe-list/italian-beef-sandwich.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/italian-beef-sandwich.php">Italian Beef Sandwich</a><span>4.5 (695 Ratings) <strong>376 Reviews</strong></span>
          </div>
          <div class="recipe-list-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div><!-- Menu Item -->
      </div><!-- Menu Container -->
    </div>
  </section><!-- /Menu Section -->
        <!-- <br>
        <br> -->
        <br>
</main>

<?php include '../templates/footer.html'; ?>