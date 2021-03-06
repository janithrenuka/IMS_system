<?php
    require "../basic/topnav.php";
?>

<main>
    <title>OPD Claim Details</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Form List</a></li>
                        <li class="active">Update OPD Form</li>
                    </ul>
                
            <div class="row" style="margin-bottom: 4%;">
                    <div class="col left20">
                        <?php 
                            require('../medicalSchemeMember/memSideNavV.php');
                        ?>
                    </div>
                <div class="row">
                    <div class="col right80">
                        <div>                                                                  
                            <h2>OPD Claim Details</h2>
                        </div>

                        <div class="contentForm" style="margin-bottom: 1%;">
                            <form action="../../controller/memControllers/updateClaimFormControllerThree.php?user_id=<?php echo $_SESSION['user_id']?>&claim_form_no=<?php echo $_SESSION['claim_form_no'] ?>" method="post" enctype="multipart/form-data">
                             
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Claim Form No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"'?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Patient Name</label>
                                </div>
                                <div class="col-75">
                                    <select name="dependant_id" id="" required>
                                        <option value="<?php echo $_SESSION['patient_id'] ?>"><?php echo $_SESSION['patient_name'] ?></option>
                                        <?php echo $_SESSION['dependant_name'] ?> 
                                    </select>             
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Relationship</label>
                                </div>
                                <div class="col-75">
                                    <select name="relationship" required>
                                        <option value="<?php echo $_SESSION['relationship'] ?>"><?php echo $_SESSION['relationship'] ?></option>
                                        <option value="Myself">Myself</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Son">Son</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Doctor Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Treatment Received Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" max="<?php echo date('Y-m-d') ?>" name="treatment_received_date" <?php echo 'value="'.$_SESSION['treatment_received_date'].'"'?> id="tdate" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Issued Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" max="<?php echo date('Y-m-d') ?>" name="bill_issued_date" <?php echo 'value="'.$_SESSION['bill_issued_date'].'"'?> id="bdate" oninput="checkDate()"; required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Purpose</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['purpose'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" name="bill_amount" <?php echo 'value="'.$_SESSION['bill_amount'].'"'?> min="0" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Scanned copy of bill</label>
                                </div>
                                <div class="col-75">
                                    <input type="file" accept=".jpg, .png, .jpeg, .pdf" name="file" required>
                                    <div class="tooltip"><i class="fa fa-question-circle"></i>
                                        <span class="tooltiptext">Upload only image or PDF of prescription bill.</span>
                                    </div>
                                </div>
                            </div>

                                <button class="mainbtn" type="submit" name="update-opd-form">Update Form</button>
                            </form>

                            <form>
                                <button class="subbtn" type="submit" name="">
                                    <a href="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId']?>">View Claim Form List</a>
                                </button>
                                <button type="submit" class="cancelbtn">
                                    <a href="memHomeV.php">Cancel</a>
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <script>
            function checkDate(){
                var treat_date = document.getElementById("tdate").value;
                var bill_date = document.getElementById("bdate").value;

                if(bill_date < treat_date){
                    alert("Enter Bill issued date correctly !");
                    document.getElementById("bdate").value = "mm/dd/yyyy";
                    
                }
            }
        </script>
</main>

<?php
    require_once('../basic/footer.php');
?>
