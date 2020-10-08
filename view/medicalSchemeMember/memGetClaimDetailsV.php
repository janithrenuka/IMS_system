<?php
    require_once('../header.php');
    require_once('memSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Enter Year</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>View Claim Details</h4>
            </div>

            <label for="medicalYear">Enter Medical Year</label><br><br>
            <input type="text" value=""> <br>

            <a href="memYearClaimDetailsV.php"><button type="submit" name="">Display Claim Details</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>