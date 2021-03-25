<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamManageWeeklyTTModel.php');

    if (isset($_POST['entertt-submit'])) {
        
        $semesters = hamModel::getAllsemesters($connect);
        $degrees = hamModel::getAlldegrees($connect);
        $_SESSION['acayear'] = "";
        $_SESSION['semester'] = "";
        $_SESSION['acayear_with_sem'] = "";

        $subjects = hamModel::getAllsubjects($connect);
        $halls = hamModel::getAllHalls($connect);
        
        $_SESSION['subjects'] = "";
        $_SESSION['subject_code'] = "";
        $_SESSION['subject_with_code'] = "";
        
        $_SESSION['allhalls'] = "";
        $_SESSION['degree'] = "";
        $_SESSION['wtt'] = "";
        
        if ($semesters && $degrees && $subjects && $halls) {
            while ($sem = mysqli_fetch_array($semesters)) {
                $_SESSION['acayear_with_sem'] .= "<option value='".$sem['sem_id']."'>".$sem['academic_year']." - ".$sem['semester']."</option>";
            }

            while ($deg = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$deg['degree_id']."'>".$deg['degree_name']."</option>";
            }

            while ($sub = mysqli_fetch_array($subjects)) {
                $_SESSION['subject_with_code'] .= "<option value='".$sub['subject_id']."'>".$sub['subject_code']." - ".$sub['subject_name']."</option>";
            }
    
            while ($hall = mysqli_fetch_array($halls)) {
                $_SESSION['allhalls'] .= "<option value='".$hall['hall_id']."'>".$hall['hall_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamEnterTimeTableV.php');
        }
    } elseif (isset($_POST['savett-submit'])) {

        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        $degree = mysqli_real_escape_string($connect, $_POST['degree']);
        $year = mysqli_real_escape_string($connect, $_POST['year']);
        $starttime = mysqli_real_escape_string($connect, $_POST['starttime']);
        $endtime = mysqli_real_escape_string($connect, $_POST['endtime']);
        $subject = mysqli_real_escape_string($connect, $_POST['subject']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $day = mysqli_real_escape_string($connect, $_POST['day']);

        $timetable = hamModel::addWeeklyTT($semester, $degree, $year, $starttime, $endtime, $subject, $hall, $day, $connect);
        echo $timetable;
        // if ($timetable) {
            header('Location:../../view/hallAllocationMaintainer/hamEnterTTsuccesV.php');   
        // } else {
        //     echo "failed";
        // }
    
    } elseif (isset($_POST['updateremovett-submit'])) {

        $semesters = hamModel::getAllsemesters($connect);
        $degrees = hamModel::getAlldegrees($connect);
        $_SESSION['acayear'] = "";
        $_SESSION['semester'] = "";
        $_SESSION['acayear_with_sem'] = "";
        
        $_SESSION['degree'] = "";
        
        if ($semesters && $degrees) {
            while ($sem = mysqli_fetch_array($semesters)) {
                $_SESSION['acayear'] .= $sem['academic_year'];
                $_SESSION['semester'] .= $sem['semester'];
                $_SESSION['acayear_with_sem'] .= "<option value='".$sem['semester']."'>".$sem['academic_year']." - ".$sem['semester']."</option>";
            }

            while ($deg = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$deg['degree_id']."'>".$deg['degree_name']."</option>";
            }
        }
        header('Location:../../view/hallAllocationMaintainer/hamUpdateTimeTableSelectV.php');

    } elseif (isset($_POST['unpdatett-submit'])) {

        

    }

?>