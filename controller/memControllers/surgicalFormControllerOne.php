<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel.php');

?>

<?php

    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = memModel::viewMember($user_id, $connect);
    $count = memModel::getNextFormNumber($connect);
    $name = mysqli_fetch_array($result_set);
    $form_count = mysqli_fetch_array($count);
    $f_count = $form_count[0];
    $initials = $name[2];
    $sname = $name[3];

    $dependants = memModel::getDependantName($user_id, $connect);
    $_SESSION['dependant_name'] = '';
    //$_SESSION['myself'] = '';

    if ($result_set) {
        if(mysqli_num_rows($result_set)==1){
            $_SESSION['claim_form_no'] = $f_count + 1;
            //$_SESSION['myself']  = $initials.' '.$sname;

            while ($dependant = mysqli_fetch_array($dependants)) {
                $_SESSION['dependant_name'] .= "<option value='".$dependant['dependant_name']."'>".$dependant['dependant_name']."</option>";
                
            }

            header('Location:../../view/medicalSchemeMember/memSurgicalFormV.php');
                                    
        }
        else{
            echo "User not Found!";
        }
    }
    else
        {
            echo "Query Unsuccessful"; 
        }

?>