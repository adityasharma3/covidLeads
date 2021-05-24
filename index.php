<?php
    include './include/index.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Leads</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="./static/global.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Covid Leads</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./src/leads.php">Have Leads?</a>
                    </li>
       
                     <li class="nav-item">
                        <a class="nav-link text-white" href="./src/leads.php">View Available Leads</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content-container shadow-lg">
        <h2 style="text-align: center;">CovidLeads</h2><br>
        <h4>This is a portal where users can enter verified leads and also users can post reqest for leads.</h4>
        <h4>Also, a request for leads can be posted and user's with resources are requested to help those in need</h4>
    </div>

    <div class="content-container shadow-lg">
        <h4>Please consider contributing if you have verified leads. This helps those in need ❤️</h4>
        <button class="btn-primary"><a style="color: white;" href = "./src/leads.php">Add</a></button>
        <h4>If you or your loved ones need resources, Please click the button down below</h4>
        <button class="btn-primary"><a href = "./src/view-leads.php" style =" color: white;">View Resources</a></button>
    </div>      

    <div class="content-container shadow-lg">
        <?php
            echo "<h4>$count_data</h4>";
        ?>
        <h6>Verified Leads</h6>

        <!-- <?php
            // echo "<h4>$latest_addition</h4>";
        ?>
        <h6>Latest Available Resource</h6> -->
    </div>
</body>

<footer>
    <h5>Made with ❤️ by <a href = "https://github.com/adityasharma3">Aditya Sharma</a></h5>
</footer>

</html>