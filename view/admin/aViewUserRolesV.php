<?php
    require "../basic/topnav.php";
?>

<main>
  <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">User Roles List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>User roles</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 10%;" >
                    <tr>
                        <th>User role</th>
                        <th>Description</th>
                    </tr>
                    <?php echo $_SESSION['user_role']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>