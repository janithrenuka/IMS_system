<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Enter or Update Attendance</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Enter or Update Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Eenter date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="date" placeholder="Date"> <br>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-25">
                            <label>Eenter academic year</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="academic_year" placeholder="Academic Year"> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Eenter degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree" placeholder="Degree"> <br>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-25">
                            <label>Select subject code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject" placeholder="Subject"> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Mark absent/present</label>
                        </div>
                        <div class="col-75">
                            <select name="mark" required>
                                <option></option>
                                <option value="absent" >Mark absent</option>
                                <option value="present" >Mark present</option>
                            </select>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="select-submit">
                        <a href="amEnterAttendaceV.php">Mark Attendance</a>
                    </button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amUpdateAttendaceV.php">Update Attendance</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>