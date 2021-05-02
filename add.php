<?php

if(isset($_POST['submit'])) {
    echo htmlspecialchars$_POST['email'];
    echo htmlspecialchars$_POST['title'];
    echo htmlspecialchars$_POST['ingredients'];
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php');?>

<section class="container">
<h4 class="center">Add a Pizza</h4>
<form action="add.php" class="white" method="POST">
<label for="email">Your Email:</label>
<input type="text" name="email">
<label for="email">Pizza Title:</label>
<input type="text" name="title">
<label for="email">Ingredients (comma seperated):</label>
<input type="text" name="ingredients">
<div class="center">
    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
</div>
</form>
</section>
<?php include('templates/footer.php');?>
    
</body>
</html>