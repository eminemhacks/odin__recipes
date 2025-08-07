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
            <li data-filter=".filter-meatloafs">MEATLOAF</li>
            <li data-filter=".filter-beef">BEEF</li>
            <li data-filter=".filter-italian-chicken">ITALIAN CHICKEN</li>
            <li data-filter=".filter-specialty">Specialty</li>
            <li data-filter=".filter-specialty">Specialty</li>
            <li data-filter=".filter-specialty">Specialty</li>
          </ul>
        </div>
      </div><!-- Recipe Filters -->
      <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-6 recipe-list-item isotope-item filter-meatloafs">
          <img src="../assets/img/recipe-list/classic_meatloaf.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="../recipes/meatloaf_1.php">Classic Meatloaf</a><span>45 Ratings</span>
          </div>
          <div class="recipe-list-ingredients">
            A hearty, no-fuss favorite—this classic meatloaf delivers rich, savory flavor with every comforting slice.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-italian-chicken">
          <img src="../assets/img/recipe-list/bread-barrel.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#"></a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-meatloafs">
          <img src="../assets/img/recipe-list/dill_pickle_meatloaf.png" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Dill Pickle Meatloaf</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            A tangy twist on a classic, this dill pickle meatloaf blends savory beef with zesty pickle flavor for a bold, delicious bite.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-beef">
          <img src="../assets/img/recipe-list/beef-taco-meat.png" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Ground Beef Taco Meat</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Bold, seasoned, and ready in minutes—this ground beef taco meat is the perfect filling for tacos, bowls, and more.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-italian-chicken">
          <img src="../assets/img/recipe-list/tuscan-grilled.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Tuscan Grilled</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Bold, seasoned, and ready in minutes—this ground beef taco meat is the perfect filling for tacos, bowls, and more.
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-meatloafs">
          <img src="../assets/img/recipe-list/mozzarella.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Mozzarella Stick</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-beef">
          <img src="../assets/img/recipe-list/crispy-fried-ground-beef-tacos.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Crispy Fried Ground Beef Tacos</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-beef">
          <img src="../assets/img/recipe-list/cattle-ranch-casserole.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Cattle Ranch Casserole</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div><!-- Menu Item -->
        <div class="col-lg-6 recipe-list-item isotope-item filter-italian-chicken">
          <img src="../assets/img/recipe-list/recipe-list/lobster-roll.jpg" class="recipe-list-img" alt="">
          <div class="recipe-list-content">
            <a href="#">Lobster Roll</a><span>4.5 (695 Ratings)</span>
          </div>
          <div class="recipe-list-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div><!-- Menu Item -->
      </div><!-- Menu Container -->
    </div>
  </section><!-- /Menu Section -->


        <br>
        
        <br>
        <br>
</main>

<?php include '../templates/footer.html'; ?>