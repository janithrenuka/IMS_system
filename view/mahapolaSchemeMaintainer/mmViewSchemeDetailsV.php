<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheme Details</title>
    <link rel="stylesheet" href="../css/main.css"></link>

</head>

<body>
    <div class="container">
        <div class="header">
              <!-- <div class="nameLogo"> -->
              <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="mmHomeV.php">Home</a>
                <a href="mmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        
        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="mmHomeV.php">Home</a></li>
            <li>View Scheme Details</li>
        </ul>
        
        <?php
          require_once('mmSideNavV.php');
        ?>
        
        <div class="banner">
            <div>
                  <h2>Mahapola Scheme Maintainer</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Scheme Details</h4>
            </div>
            <h3>Scheme 1 : </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum 
                architecto eius amet.</p>

                <h3>Scheme 2 : </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum 
                architecto eius amet.</p>

                <h3>Scheme 3 : </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum 
                architecto eius amet.</p>

            <a href="mmHomeV.php"><button type="submit" name="">OK</button></a>

        </div>
        <div class="footer">
            <?php
              require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>