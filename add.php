<?php

include('config/db_connect.php');

$title = $ingredients = $email = "";

$errors = ['title' => '', 'ingredients' => '', 'email' => ''];

if (isset($_POST['submit'])) {
    //check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'an Email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    //check title
    if (empty($_POST['title'])) {
        $errors['title'] = "A title is required";
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = "A valid title must be letters and spaces only";
        }
    }

    //check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = "At least one ingredient is required";
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = "Ingredients must be a comma separated list";
        }
    }

    if (array_filter($errors)) {
        // echo "erros in form";
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO pizzas(email,title,ingredients) VALUES ('$email','$title','$ingredients')";

        if (mysqli_query($conn, $sql)) {
            //sucess
            header('Location:index.php');
        } else {
            echo 'query error :' . mysqli_error($conn);
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" />
        <div class="red-text"><?php echo htmlspecialchars($errors['email']) ?></div>
        <label>Pizza Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>" />
        <div class="red-text"><?php echo htmlspecialchars($errors['title']) ?></div>
        <label>Ingredients (comma separated)</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" />
        <div class="red-text"><?php echo htmlspecialchars($errors['ingredients']) ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn z-depth-0 brand" />
        </div>

    </form>

</section>

<?php include('templates/footer.php'); ?>

</html>