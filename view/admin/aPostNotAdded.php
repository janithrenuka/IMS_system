<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a Department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aAddPostV.php">Add Post</a></li>
            <li class="active">Action was success!</li>
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
                            The Post is not added.
                        </h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="aAddPostV.php">Try again</a>
                    </button>
                    <button class="cancelbtn" type="submit">
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