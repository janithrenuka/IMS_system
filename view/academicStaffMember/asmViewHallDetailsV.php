<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Hall Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Hall Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Details</h2>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th>Name</th>
                        <th>AC / Non AC</th>
                        <th>Capacity</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <button class="subbtn" type="submit" name="">
                    <a href="asmHallDetailsV.php">View another hall</a>
                </button>
                <button class="cancelbtn" type="submit" name="">
                    <a href="asmHomeV.php">Cancel</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>