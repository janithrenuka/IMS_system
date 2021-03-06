<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/claimFormModel.php');
?>

<?php

        $moEmail = claimFormModel::getMoEmail($connect);
        $email = mysqli_fetch_array($moEmail);
        $new_mail = $email['email'];

        if (isset($_GET['claim_form_no'])) {
            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
            
            $result = claimFormModel::deleteClaimForm($claim_form_no,$user_id, $connect);
    
            if ($result) {
                $to_email = $new_mail;
                $subject = "Claim Form Deleted.";
                $body = "Claim Form {$claim_form_no} has been deleted by {$user_id}";
                $headers = "From: imsSystem17@gmail.com";

                mail($to_email, $subject, $body, $headers);
                
                header('Location:../../view/medicalSchemeMember/memDeleteClaimFormSuccessV.php');
            }
            else{
                header('Location:../../view/medicalSchemeMember/memUpdateClaimFormsV.php');
            }
           
        }
?>