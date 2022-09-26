<?php 



if(isset($_POST['submit'])){

    //basic validation 

    if(!empty($_POST['Email'])){
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo 'email validation error' . '<br />';
        }
    }else{
        echo 'Error: required email' . '<br/>';
    }

    // check name 

    if(!empty($_POST['Name'])){
        $name = $_POST['name'];
        if(preg_match('/^[a-zA-Z\s]+$/', $name)) {
            echo 'name must be in letters and space only';
        }
    }else{
        echo 'Error: required name' . '<br/>';
    }

    // check ingredients 

    if(!empty($_POST['Ingredients'])){
        echo htmlspecialchars($_POST['Ingredients']) .'<br />';
    }else{
        echo 'Error: required ingredients';
    }

}


?> 


<html lang="en">


    <?php require('header.php') ?>

    <section class="container grey-text">
        <h4 class="center">
            Add Pizza
        </h4>

        <form action="add.php" class="white" method="POST">

        <label>Add Your Email</label>
        <input type="text" name="Email">

        <label>Pizza Name</label>
        <input type="text" name="Name">

        <label>Add Ingredients</label>
        <input type="text" name="Ingredients">

        <div class="center">
            <input type="submit" name="submit" class="btn brand z-depth-0">
        </div>

        </form>

    </section>





    <?php require('footer.php') ?>


</html>