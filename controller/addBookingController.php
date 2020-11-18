<?php

    session_start();
    include('../config/database.php');
    include('../model/Model.php');

    if (isset($_GET['user_id']) && !isset($_POST['add-book-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $records = Model::hall($connect);

        $answers = Model::getRole($user_id, $connect);

        $answer = mysqli_fetch_assoc($answers);

        $role = $answer['userRole'];
        $_SESSION['role'] = $role;

        $_SESSION['halls'] = '';

        if ($records) {
            
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['halls'] .= "<option value='".$record['hall_name']."'>". $record['hall_name']."</option>";
            }

            if ($role == "hallAllocationMain") {
                header('Location:../view/hallAllocationMaintainer/hamAddBookingV.php');
            }
            elseif ($role == "academicStaffMemb") {
                header('Location:../view/academicStaffMember/asmAddBookingV.php');
            }

        }
    }

    if (isset($_POST['add-book-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $date = mysqli_real_escape_string($connect, $_POST['date']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $startTime =  mysqli_real_escape_string($connect, $_POST['startTime']);
        $endTime =  mysqli_real_escape_string($connect, $_POST['endTime']);
        $reason = mysqli_real_escape_string($connect, $_POST['reason']);

        $check = Model::checkHall($hall, $date, $startTime, $endTime, $connect);

        if (mysqli_num_rows($check)==1) {
            if ($role == "hallAllocationMain") {
                header('Location:../view/hallAllocationMaintainer/hamAllReadyBookedV.php');
            }
            elseif ($role == "academicStaffMemb") {
                header('Location:../view/academicStaffMember/asmAllReadyBookedV.php');
            }
            
        }
        else{
            
            $result = Model::book($user_id, $hall, $date, $startTime, $endTime, $reason, $connect);

            if ($result) {

                if ($_SESSION['role'] == "hallAllocationMain") {
                    header('Location:../view/hallAllocationMaintainer/hamBookingAddedV.php');
                }
                elseif ($_SESSION['role'] == "academicStaffMemb") {
                    header('Location:../view/academicStaffMember/asmBookingAddedV.php');
                }
                
            }

        }

    }
    

?>