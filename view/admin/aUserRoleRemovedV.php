<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aRemoveUserRoleV.php">Remove user role</a></li>
            <li class="active">Request Successful!</li>
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
                        <h2>The user roles is removed successfully!
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="aRemoveUserRoleV.php">Remove another</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="aHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>