<?php
    include '../templates/header.html';
?>
<main class="main b-image">
    <!-- <img src="../assets/img/hero-bg.png" alt="Delicious food background" data-aos-delay="50"> -->
    <section class="section  d-flex justify-content-center align-items-center unique-recipe-section" style="padding-top: 140px;">
        <div class="unique-recipe-card">

            <h2 class="unique-recipe-title text-center">Add Recipes</h2>
                        
            <form class="unique-recipe-form" action="submit-recipe.php" method="POST">
                <label for="title" class="unique-label">Recipe Title:</label>
                <div class="form-floating unique-input-wrapper">
                    <input type="text" id="title" class="form-control unique-input" name="title" placeholder="e.g. Dill Pickle Meatloaf" required >
                </div>
                               
                <label for="ingredients" class="unique-label">Ingredients:</label>
                <div class="form-floating unique-input-wrapper">
                    
                    <input type="text" id="ingredients" class="form-control unique-input" name="ingredients" placeholder="e.g. Tomato, Eggs, Turnips"required>
                </div>

                <label for="instructions" class="unique-label">Instructions:</label>
                <div class="form-floating unique-input-wrapper">
                    
                    <textarea id="instructions" class="form-control unique-input" name="instructions" placeholder="e.g: Step 1: Gather ingredients
                    Step 2: Mix 2 ounces of..." style="height: 150px;" required></textarea>
                </div>
                <label for="recipeImage" class="unique-label">Upload Recipe Image(s):</label>
                <input type="file" name="recipeImage" id="recipeImage" accept="image/*">
                
                <button type="submit" class="btn unique-upload-btn">Upload Recipe</button>
                <div class="form-link">
                    <p>Already have an account? <a href="sign-in.php">Sign in</a></p>
                </div>
            </form>
        </div>
    </section>
</main>
<?php
    include '../templates/footer.html';
?>
