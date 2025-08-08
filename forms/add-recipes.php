<?php
    include '../templates/header.html';
?>
<br><br><br><br>

<main class="main border border-light-subtle">
    <section class="section container d-flex justify-content-center align-items-center unique-recipe-section">
        <div class="unique-recipe-card">

            <h2 class="unique-recipe-title text-center">Add Recipes</h2>
                        
            <form class="unique-recipe-form" action="submit-recipe.php" method="POST">
                <div class="form-floating unique-input-wrapper">
                    <input type="text" id="title" class="form-control unique-input" name="title" required>
                    <label for="title" class="unique-label">Recipe Title:</label>
                </div>
                <div class="form-floating unique-input-wrapper">
                    <input type="text" id="ingredients" class="form-control unique-input" name="ingredients" required>
                    <label for="ingredients" class="unique-label">Ingredients:</label>
                </div>
                <div class="form-floating unique-input-wrapper">
                    <textarea id="instructions" class="form-control unique-input" name="instructions" style="height: 150px;" required></textarea>
                    <label for="instructions" class="unique-label">Instructions:</label>
                </div>
                <button type="submit" class="btn unique-submit-btn">Submit Recipe</button>
            </form>
        </div>
    </section>
</main>

<br><br><br><br>
<?php
    include '../templates/footer.html';
?>
