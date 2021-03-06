<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/claimFormModel.php');
?>

<?php
    
        $user_id='';
        $_SESSION['claim_form_no'] = '';

        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $result_opd = claimFormModel::opdReqFormIds($user_id, $connect);
        $result_surgical = claimFormModel::surgicalReqFormIds($user_id, $connect);
        
        
        if(mysqli_num_rows($result_opd)>0){
                while($row = mysqli_fetch_assoc($result_opd)){

                $date_diff = claimFormModel::getSubmitDateDiff($row['claim_form_no'], $user_id, $connect);
                $submit_diff = mysqli_fetch_array($date_diff);
                $diff = (int)$submit_diff[0];

                $date = claimFormModel::getSubmitDate($user_id,$row['claim_form_no'],$connect);
                $sub_date = mysqli_fetch_array($date);
                $submitted_date = $sub_date[0];

                    if($diff<=2){
                            $_SESSION['claim_form_no'] .= "<tr>";
                            $_SESSION['claim_form_no'] .= "<td>OPD</td>";
                            $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                            $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                            $_SESSION['claim_form_no'] .= "<td><a class=\"green\" href=\"../../controller/memControllers/updateClaimFormControllerTwo.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Update Form</a></td>";
                            $_SESSION['claim_form_no'] .= "<td><a class=\"red\" href=\"../../controller/memControllers/deleteClaimFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\" onclick=\"return confirm('Are you sure?');\">Delete Form</a></td>";
                            $_SESSION['claim_form_no'] .= "</tr>";

                            header('Location:../../view/medicalSchemeMember/memUpdateClaimFormsV.php');
                        }
                    else{
                            $_SESSION['claim_form_no'] .= "<tr>";
                            $_SESSION['claim_form_no'] .= "<td>OPD</td>";
                            $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                            $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                            $_SESSION['claim_form_no'] .= "<td><a class=\"red\">Out of Date</a></td>";
                            $_SESSION['claim_form_no'] .= "<td><a class=\"red\">Out of Date</a></td>";
                            $_SESSION['claim_form_no'] .= "</tr>";

                            header('Location:../../view/medicalSchemeMember/memUpdateClaimFormsV.php'); 
                    }

                }
        }
        
        if(mysqli_num_rows($result_surgical)>0){
            while($row = mysqli_fetch_assoc($result_surgical)){

                $date_diff = claimFormModel::getSubmitDateDiff($row['claim_form_no'], $user_id, $connect);
                $submit_diff = mysqli_fetch_array($date_diff);
                $diff = (int)$submit_diff[0];

                $date = claimFormModel::getSubmitDate($user_id,$row['claim_form_no'],$connect);
                $sub_date = mysqli_fetch_array($date);
                $submitted_date = $sub_date[0];

                    if($diff<=2){
                        $_SESSION['claim_form_no'] .= "<tr>";
                        $_SESSION['claim_form_no'] .= "<td>Surgical</td>";
                        $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                        $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                        $_SESSION['claim_form_no'] .= "<td><a class=\"green\" href=\"../../controller/memControllers/updateClaimFormControllerTwo.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Update Form</a></td>";
                        $_SESSION['claim_form_no'] .= "<td><a class=\"red\" href=\"../../controller/memControllers/deleteClaimFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\" onclick=\"return confirm('Are you sure?');\">Delete Form</a></td>";
                        $_SESSION['claim_form_no'] .= "</tr>";

                        header('Location:../../view/medicalSchemeMember/memUpdateClaimFormsV.php');
                    }
                    else{
                        $_SESSION['claim_form_no'] .= "<tr>";
                        $_SESSION['claim_form_no'] .= "<td>Surgical</td>";
                        $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                        $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                        $_SESSION['claim_form_no'] .= "<td><a class=\"red\">Out of Date</a></td>";
                        $_SESSION['claim_form_no'] .= "<td><a class=\"red\">Out of Date</a></td>";
                        $_SESSION['claim_form_no'] .= "</tr>";

                        header('Location:../../view/medicalSchemeMember/memUpdateClaimFormsV.php'); 
                    }
            
            }
        }

        if(mysqli_num_rows($result_surgical)==0 && mysqli_num_rows($result_opd)==0){
            
            header('Location:../../view/medicalSchemeMember/memNoFormsAvaliableV.php');
        }
    
    
?>