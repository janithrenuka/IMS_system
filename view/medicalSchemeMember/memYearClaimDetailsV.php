<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Details</title>
    <link rel="stylesheet" href="../css/main.css"></link>

</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
           
            
                  <a href="memRenewMembershipV.php" ><button type="submit" name="" class="button">Renew Membership</button></a><br>
                  <a href="memViewSchemeDetailsV.php" ><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
                  <a href="memFillClaimFormsV.php" ><button type="submit" name="" class="button">Fill Claim Forms</button></a><br>
                  <a href="memUpdateClaimFormsV.php" ><button type="submit" name="" class="button">Update Claim Form</button></a><br>
                  <a href="memViewClaimFormsV.php" ><button type="submit" name="" class="button">View Claim Forms</button></a><br>
                  <a href="memGetClaimDetailsV.php" ><button type="submit" name="" class="button">Get Claim Detials</button></a><br>
        </div>
        <div class="banner">
            <div>
                  <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
                <div>
                    <h4>Claim Details</h4>
                </div>
            <!-- memberge year eke claim details pdf ekak wiidyat show kranna one -->

            <a href="memGetClaimDetailsV.php" ><button type="submit" name="" >OK</button></a><br>

        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>