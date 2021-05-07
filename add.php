<?php 

include ('config/db-connect.php');

$title = $ingredients = $email = "";

$errors =['title'=> '', 'ingredients'=>'', 'email'=>''];






?>
<!DOCTYPE html>
<html lang="en">

include('template/header.php');

<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="POST">
        <label>Your Email</label>
        <input type="text" name="email" value=""/>
        <label>Pizza Title</label>
        <input type="text" name="title" value=""/>
        <label>Ingredients (comma separated)</label>
        <input type="text" name="ingredients" value=""/>

        </form>

</section>

include('template/footer.php');
</html>