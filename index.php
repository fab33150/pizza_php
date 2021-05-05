<?php
//connect to database
$connect = mysqli_connect('localhost', 'bruce88', 'test123', 'lit_pizza');
if(!$connect) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query and get result
$result = mysqli_query($connect, $sql);

//fetch data from database and format into an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection 
mysqli_close($connect);



?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php');?>

<h4 class="center grey-text">Pizzas!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="#">more info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
<?php include('templates/footer.php');?>
    
</body>
</html>