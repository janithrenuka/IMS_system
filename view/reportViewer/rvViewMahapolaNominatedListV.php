<main>
    <title>Mahapola Nominated List</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Mahapola Nominated List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
                <h4>View Mahapola Nominated Student List</h4>
            </div>
            <input type="text" value="" placeholder="Enter batch no"> <br><br>
            <select name="degree" id="">
                <option value="">Select Degree</option>
                <option value="CS">CS</option>
                <option value="IS">IS</option>
            </select>
            <br>
            <br>
            <a href="rvNominatedListV.php"><button type="submit" name="">Display Student List</button></a><br>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
