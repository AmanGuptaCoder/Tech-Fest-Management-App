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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $techfestName ?> | Events</title>

    <!--Header Scripts -->
    <?php include_once "includes/headerScripts.php";?>

</head>

<body>

    <!--Include User Navbar-->
    <?php include_once "includes/navbar.php";?>

    <main class="container mt-5 text-uppercase">

        <!-- EXTC Events -->
        <section class="row mb-5">
            <div class="col-md-4">
                <img src="images/departments/ff.jpg" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">Tech-A-Thon 1.0</h3>
                <hr>

                <form id="extcForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center text-uppercase btn  btn-outline-dark rounded-pill"
                        value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Electronics and Telecommunication">
                </form>

            </div>
        </section>

        <!-- Chemical Events -->
        <section class="row mb-5">
            <div class="col-md-4">
                <img src="images/departments/ff.jpg" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">Tech-A-Thon 2.0</h3>
                <hr>

                <form id="chemicalForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center text-uppercase btn btn-outline-dark rounded-pill"
                        value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Chemical">
                </form>
            </div>
        </section>

        <!-- Computer Events -->
        <section class="row mb-5">
            <div class="col-md-4">
                <img src="images/departments/ff.jpg" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">Tech-A-Thon 2.0</h3>
                <hr>

                <form id="computerForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center btn btn-outline-dark rounded-pill" value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Computer">
                </form>
            </div>
        </section>

        <!-- Mechanical Events -->
        <section class="row mb-5">
            <div class="col-md-4">
                <img src="images/departments/ff.jpg" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">Tech-A-Thon 3.0</h3>
                <hr>

                <form id="mechanicalForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center btn btn-outline-dark rounded-pill" value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Mechanical">
                </form>
            </div>
        </section>

        <!-- Civil Events -->
        <section class="row mb-5">
            <div class="col-md-4">
                <img src="images/departments/ff.jpg" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="max-height:250px">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">Tech-A-Thon 4.0</h3>
                <hr>

                <form id="civilForm" action="departmentalEvents.php" method="post">
                    <input type="submit" class="text-center btn btn-outline-dark rounded-pill" value="View Events">
                    <input type="hidden" name="eventDepartmentName" value="Civil">
                </form>
            </div>
        </section>

        <!-- Synergy Events -->
        <section class="row mb-5">
            <div class="col-md-4">
                <img src="images/departments/ff.jpg" class="img-fluid w-100" data-aos="fade-right"
                    data-aos-duration="1500" style="height:250px">
            </div>

            <div class="col-md-8 text-center">
                <h3 class="font-time font-weight-bold text-uppercase mt-2">Tech-A-Thon 5.0</h3>
                <hr>
                <a href="synergyEvents.php" class="text-center btn btn-outline-dark rounded-pill">View Events</a>
            </div>
        </section>

    </main>

    <!-- Include Footer & Footer Scripts -->
    <?php
include_once "includes/footer.php";
include_once "includes/footerScripts.php";
?>

    <!-- Javascript -->
    <script src="js/eventPage.js"></script>

</body>

</html>