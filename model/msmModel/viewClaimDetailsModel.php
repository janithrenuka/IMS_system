<?php
    class viewClaimDetailsModel{
        public static function medicalyears($connect)
        {
            $query = "SELECT medical_year FROM tbl_medical_year ORDER BY myid";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function departments($connect)
        {
            $query = "SELECT department FROM tbl_department ORDER BY department_id";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getMemYears($connect){
			$query = "SELECT medical_year FROM tbl_medical_year";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getUserId($emp_id, $connect){
            $query = "SELECT userId FROM users WHERE empid='{$emp_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }
        
        public static function getMembClaimDetails($id, $year, $connect){
            $query = "SELECT * FROM tbl_claimdetails WHERE user_id='{$id}' AND year='{$year}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }
?>