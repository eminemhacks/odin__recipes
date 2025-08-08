<?php
    include '../templates/header.html';
?>
<main class="main b-image">
    <!-- <img src="../assets/img/hero-bg.png" alt="Delicious food background" data-aos-delay="50"> -->
    <section class="section  d-flex justify-content-center align-items-center unique-recipe-section" style="padding-top: 140px;">
        <div class="unique-recipe-card">

            <h2 class="unique-recipe-title text-center">Sign-up for OdinRecipes</h2>
                        
            <form class="unique-recipe-form" action="submit-recipe.php" method="POST">
                <label for="name" class="unique-label">Full name:</label>
                <div class="form-floating unique-input-wrapper">
                    <input type="text" id="name" class="form-control unique-input" name="name" placeholder="e.g. John Doe" required >
                </div>

                <label for="email" class="unique-label">Email:</label>
                <div class="form-floating unique-input-wrapper">
                    <input type="email" id="email" class="form-control unique-input" name="email" placeholder="e.g. dillpickle@example.com" required >
                </div>

                <label for="country" class="unique-label">Country:</label>
                <div class="form-floating unique-input-wrapper">
                    <input type="text" id="country" class="form-control unique-input" name="country" placeholder="e.g. USA" required>
                </div>

                <label for="instructions" class="unique-label">Instructions:</label>
                <div class="form-floating unique-input-wrapper">
                    
                    <textarea id="instructions" class="form-control unique-input" name="instructions" placeholder="e.g: Step 1: Gather ingredients
                    Step 2: Mix 2 ounces of..." style="height: 150px;" required></textarea>
                </div>
                <label for="recipeImage" class="unique-label">Upload Recipe Image(s):</label>
                <input type="file" name="recipeImage" id="recipeImage" accept="image/*">
                <br>
                <button type="submit" class="btn unique-submit-btn">Upload Recipe</button>
            </form>
        </div>
    </section>
</main>
<?php
    include '../templates/footer.html';
?>
