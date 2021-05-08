<?php

include('config/db_connect.php');

if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
        header('Location:index.php');
    } else {
        echo   "query error :" . mysqli_error($conn);
    }
}

if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);
}

$sql = "SELECT * FROM pizzas WHERE id = $id";

$result = mysqli_query($conn, $sql);

$pizza = mysqli_fetch_assoc($result);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

<div class="container center">
    <?php if ($pizza) : ?>

        <div class="card z-depth-0  details">
            <img src="img/pizza-slice.png" class="slice" />
            <div class="card-content center">
                <h3><?php echo htmlspecialchars($pizza['title']); ?></h3>
                <h4>Created by: <?php echo $pizza['email']; ?></h4>
                <h4 class="grey-text">Ingredients:</h4>
                <ul class="grey-text">
                    <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                        <li class="ingredientDetails"><img src="img/ingredients.png" class="ingredients" /><?php echo htmlspecialchars($ing); ?></li>
                    <?php endforeach; ?>
                </ul>
                <h4><?php echo date($pizza['created_at']); ?></h4>
            </div>

        </div>
    <?php else : ?>
        <p>No such pizza exists</p>
    <?php endif ?>

    <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>" />
        <input type="submit" name="delete" value="Delete" class="btn brand" />
    </form>


</div>

<?php include('templates/footer.php'); ?>

</html>