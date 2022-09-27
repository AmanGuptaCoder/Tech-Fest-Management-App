<?php
//------------------------------>> CENTRALIZED TECHFEST NAME WITH YEAR
require_once "config/techfestName.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vishal Bait">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $techfestName ?> | ABOUT</title>

    <!-- First AOS Animation then Include Header Scripts then CSS file -->
    <?php include_once "includes/headerScripts.php"; ?>
    <link rel="stylesheet" href="css/aboutPage.css">

</head>

<body>

    <!-- Include User Navbar-->
    <?php include_once "includes/navbar.php"; ?>

    <main class="container">
        <div class="row">


            <section class="col-md-10 offset-md-1">
                <div class="p-5 my-3 text-justify" data-aos="zoom-in" data-aos-duration="1500">

                    <h1 class="p-1 text-center text-uppercase font-Staatliches-heading">About iNEURON</h1>
                    <hr class="mb-5" style="border-top: 2px solid rgba(0,0,0,.1);"/>
                    
                   <p>iNeuron started as a product development company, then launched its ed-tech division. We provide 360 degree solutions from learning to internship to finding a job, and the first ever educational OTT platform to upgrade your skill set.</p>

                <p>Our goal is to make education and experiential skills affordable and accessible to everyone regardless of their disparate economic and educational backgrounds. We empower students to make demands unlike any other platform or institute because curiosity cannot be contained. Learning cannot be boxed in a book. So let’s step ahead and ‘build together</p>
                </p>
                </div>
            </section>
        </div>
    </main>

    <!-- Include Footer & Footer Scripts -->
    <?php
    include_once 'includes/footer.php';
    include_once "includes/footerScripts.php";
    ?>

</body>

</html>