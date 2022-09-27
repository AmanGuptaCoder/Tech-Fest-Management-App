<?php

require_once "config/techfestName.php";

require_once "config/configPDO.php";

session_start();

//------------------------------>> VISITOR COUNTER

try {

    $visitorIpAddress = $_SERVER['REMOTE_ADDR'];

    $sql1 = "SELECT * FROM visitor_counter WHERE ipAddress = :visitorIpAddress";
    $result1 = $conn->prepare($sql1);
    $result1->bindValue("visitorIpAddress", $visitorIpAddress);
    $result1->execute();

    # Total row Count
    $totaVisitor = $result1->rowCount();

    if ($totaVisitor == 0) {
        $sql2 = "INSERT INTO visitor_counter (ipAddress) VALUES (:visitorIpAddress)";
        $result2 = $conn->prepare($sql2);
        $result2->bindValue(":visitorIpAddress", $visitorIpAddress);
        $result2->execute();
    }

    $sql = "SELECT * FROM visitor_counter";
    $result = $conn->prepare($sql);
    $result->execute();

    if ($result) {
        $totaVisitors = $result->rowCount();
    }
} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>

<!Doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <!--First Inlude Header Scripts, then Loader.css then Index.css-->
    <?php include_once "includes/headerScripts.php"; ?>
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/index.css">

    <title><?php echo $techfestName ?> | HOME</title>

</head>

<body>


    <!--Loader-->
  

    <!--Include User Navbar-->
    <?php include_once "includes/navbar.php"; ?>


    <main class="container-fluid welcome-section">
        <div class="row mx-auto text-center">
            <h1 class="p-3 font-Staatliches-heading mx-auto text-white" data-aos="zoom-in" data-aos-duration="1500">Welcome to <?php echo $techfestName ?> <br> Tech-Fest App
             </h1>
            <img src="images/home/shodh.jpg" class="img-fluid" alt="Shodh1">
        </div>
    </main>

    <main class="container-fluid p-5 second-section">
        <div class="row">
            <section class="col-md-7 mt-3 mb-5">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/home/git1.png" class="d-block w-100 img-fluid" alt="git1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/git2.jpg" class="d-block w-100 img-fluid" lt="git2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/git4.jpg" class="d-block w-100 img-fluid" lt="git4">

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="col-md-5">
                <h3 class="text-center font-time text-white"> <?php echo $techfestName ?></h3>
                <p class="text-justify text-white">iNeuron started as a product development company, then launched its ed-tech division. We provide 360 degree solutions from learning to internship to finding a job, and the first ever educational OTT platform to upgrade your skill set.

                Our goal is to make education and experiential skills affordable and accessible to everyone regardless of their disparate economic and educational backgrounds. We empower students to make demands unlike any other platform or institute because curiosity cannot be contained. Learning cannot be boxed in a book. So let’s step ahead and ‘build together
                </p>

            </section>
        </div>
    </main>


    <hr>

</body>

</html>