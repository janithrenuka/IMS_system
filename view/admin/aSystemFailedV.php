<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Request Denied!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            The system has failed to complete your request. Try again shortly. Thank you!
                        </h2>
                    </div>

                    <button class="mainbtn">
                        <a href="aHomeV.php">Visit Home Page</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>