<?php

session_start();

$pageTitle ="Dashboard Page" ;

//header section
include "includes/header.php";

//Navbar Section
include "includes/navbar.php";



//
$user_email = "";

//Logical Section
    // if(isset($_SESSION["logged_in_user"])){
    //     echo $_SESSION["logged_in_user"];
    // }

?>


<!-- Registar From -->

<div class="row mt-5">
    <div class="col-6 offset-md-3">

   <h1 class="text-success"><?php  if(isset($_SESSION["logged_in_user"])){
        echo $_SESSION["logged_in_user"];
    } ?></h1>

    </div>
</div>


<?php
//Footer Section
include "includes/footer.php";
?>