<main>
    <div>
        <h2>Register to Staff Medical Scheme - Part 1</h2>
    </div>

    <div class="contentForm">
        <form action="../../controller/basicControllers/registerMSController2.php?loguser=<?php echo $_SESSION['userId'] ?>" method="post">
            <div class="row">
                <div class="col-25">
                    <label>Department</label>
                </div>
                <div class="col-75">
                    <select name="department"required>
                        <option value="">Select Department </option>
                        <?php echo $_SESSION['department'] ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Health condition</label>
                </div>
                <div class="col-75">
                    <input list="health_condition" name="health_condition" placeholder="Health condition" required>
                    <div class="tooltip"><i class="fa fa-question-circle"></i>
                        <span class="tooltiptext">If you have any chronic disease. Please notify it here.</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Member Type</label>
                </div>
                <div class="col-75">
                    <select name="member_type" id="membertype" required>
                        <option value="">Select Member Type</option>
                        <?php echo $_SESSION['member_type'] ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Civil status</label>
                </div>
                <div class="col-75">
                    <select name="civil_status" required>
                        <option value="">Select Civil Status</option>
                        <option value="1">Married</option>
                        <option value="0">Single</option>
                    </select>
                </div>
            </div>
            <button class="mainbtn" type="submit" name="registerNext-submit">Next</button>
        </form>
        <form>
            <button class="subbtn" type="submit">View Scheme Details</button>
            <button type="submit" class="cancelbtn"><a href="#">Cancel</a>
            </button>
        </form>
</main>