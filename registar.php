<?php

session_start();

$pageTitle ="Registar Page" ;

//header section
include "includes/header.php";

//Navbar Section
include "includes/navbar.php";



//
$messageText = "";
$messageType = "";

//Logical Section

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];

    
// validation
    if (empty($email) || empty($password)) {
        // echo $email, $password; //এটি পাসওয়ার্ড বা ইমেইল প্রিন্ট করে
        $messageText = "All Fields are required";
        $messageType = "danger";
    }
    else{
        $_SESSION ["users"][$email] = $password;
        header("Location: login.php");
    }

}

?>



<!-- Registar From -->

<div class="row mt-5">
    <div class="col-6 offset-md-3">

    <?php if($messageText != ""){ ?>
        <div class="alert alert-danger <?php echo $messageType ?> my-2" role="alert">
        <?php echo $messageText ?>
        </div>
        <?php } ?>



        <form method="POST" action="registar.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>


<?php
//Footer Section
include "includes/footer.php";
?>