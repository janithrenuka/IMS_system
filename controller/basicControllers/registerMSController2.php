<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);

    if (isset($_POST['registerNext-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array('department'=>20, 'member_type'=>15, 'health_condition'=>100, 'civil_status'=>10);
		
		foreach ($userInfo as $info=>$maxLen) {
            if (strlen(trim($_POST[$info])) >  $maxLen) {
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        if (empty($errors)) {
            $department = mysqli_real_escape_string($connect, $_POST['department']);
            $member_type = mysqli_real_escape_string($connect, $_POST['member_type']);
            $health_condition = mysqli_real_escape_string($connect, $_POST['health_condition']);
            $civil_status = mysqli_real_escape_string($connect, $_POST['civil_status']);

            $medical = Model::registerMS1($user_id, $department, $health_condition, $civil_status, $member_type, $connect);

            if ($medical) {
                if (mysqli_num_rows($medical) ==1) {
                    $medical = mysqli_fetch_assoc($medical);
                    $_SESSION['department'] = $department;
                    $_SESSION['member_type'] = $member_type;
                    $_SESSION['health_condition'] = $health_condition;
                    $_SESSION['civil_status'] = $civil_status;
                }
            } else {
                echo "query failed";
            }
        }
    }

    if (isset($_POST['viewschemedetails-submit'])) {
        if ($result['userRole'] == "admin") {
            header('Location:../../view/admin/aViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "academicStaffMemb") {
            header('Location:../../view/academicStaffMember/asmViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "attendanceMain") {
            header('Location:../../view/attendanceMaintainer/amViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "hallAllocationMain") {
            header('Location:../../view/hallAllocationMaintainer/hamViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "mahapolaSchemeMain") {
            header('Location:../../view/mahapolaSchemeMaintainer/mmViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "medicalSchemeMain") {
            header('Location:../../view/medicalSchemeMaintainer/msmViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "recordsViewer") {
            header('Location:../../view/reportViewer/rvViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "departmentHead") {
            header('Location:../../view/departmentHead/dhViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "medicalSchemeMember") {
            header('Location:../../view/medicalSchemeMember/moViewSchemeDetailsV.php');
        } else {
            echo "USER";
        }
    }
?>