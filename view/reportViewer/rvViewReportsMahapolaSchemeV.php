<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports in Mahapola Scheme</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('rvSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h4>View Reports in Mahapola Scheme</h4>
            </div>

            <select name="reporttype" id="">
                <option value="">Select Report Type</option>
                <option value="monthlyEligibiltyList">Monthly Eligibility List</option>
                <option value="monthlyInEligibiltyList">Monthly In-Eligibility List</option>
                <option value="monthlyReconciliationReport">Monthly Reconciliation Report</option>
            </select>
            <br>
            <br>

            <label for="yearmonth">Select Year & Month</label>
            <input type="month" id="yearmonth" name="yearmonth"><br><br>

            <label for="batchno">Enter batch no</label>
            <input type="text" id="batchno" name="batchno"><br><br>

            <label for="degree">Select Degree</label>
            <select name="degree" id="">
                <option value="">Select Degree</option>
                <option value="CS">CS</option>
                <option value="IS">IS</option>
            </select>
            <br>
            <br>

            <a href="mmDisplayReportV.php"><button type="submit" name="">Display Report</button></a><br>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>