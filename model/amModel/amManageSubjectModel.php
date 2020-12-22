<?php
	class amModel {
		public static function viewSubjects ($connect)
		{
			$query = "SELECT * FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_id ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function checkSubCode ($subject_code, $connect) 
		{
			$query = "SELECT subject_code FROM tbl_subject 
			WHERE subject_code = '{$subject_code}' and is_deleted = 0
			LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function addSubject ($subject_code, $subject_name, $degree, $connect) 
		{
			$query = " INSERT INTO tbl_subject (subject_code, subject_name, degree) 
			VALUES ('$subject_code', '$subject_name', '$degree') ";
			
			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function fetchSubject ($subject_code, $connect) 
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE subject_code = '{$subject_code}' and is_deleted = 0
			LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function saveUpdatedSubject ($subject_code, $subject_name, $degree, $connect)
		{
			$query = "UPDATE tbl_subject 
			SET subject_name = '{$subject_name}', degree = '{$degree}'
			WHERE subject_code = '{$subject_code}' and is_deleted = 0 
			LIMIT 1";

			$result = mysqli_query($connect, $query);
            return $result;
		}

		public static function removeSubject ($subject_code, $connect)
		{
			$query = "UPDATE tbl_subject 
			SET is_deleted = 1 
			WHERE subject_code='{$subject_code}' and is_deleted = 0
			LIMIT 1";

			$result = mysqli_query($connect, $query);
			return $result;
		}
	}
?>