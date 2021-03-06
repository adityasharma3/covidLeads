<?php
    include '../include/view-leads.inc.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Leads</title>
    <!-- CSS only -->
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https:cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../static/global.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../index.php">Covid Leads</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="leads.php">Have Leads?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">View Available Leads</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <div class="content-container shadow-lg">
        <div class="output">
            <?php
                if ($dataFound) {
                    echo $output;
                    
                } else {
                    echo "<h4>No data found!</h4>";
                }
            ?>
            <form action="view-leads.php">
                <button class="btn-primary"><a href = "./filter-leads.php" style="color: whitesmoke;">Filter data</a></button>
            </form>
        </div>
    </div>
</body>
<!-- <footer>
    <h5>Made with ?????? by <a href = "https://github.com/adityasharma3">Aditya Sharma</a></h5>
</footer> -->
</html>