<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <div class="container">
<!--         <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
 -->
        <div class="header">breadcrums</div>

        <div class="content">
            <div>
                <h3>Weekly Time Table</h3>
            </div>

            <table>
                <tr>
                    <th>Date</th>
                    <th>Time Duration</th>
                    <th>Hall Name</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <a href="asmHomeV.php"><button type="submit" name="">OK</button></a>

            <!-- if lecturer registered as a medical scheme member then redirect to the lecturer home page without "Register to the medical scheme button"  -->

        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>