<?php
    class msmModel{
        public static function fetchmembers($scheme, $member_type, $connect)
		{
			$query = "SELECT u.empid, u.initials, u.sname, u.userId, uf.department, uf.acceptance_status FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.schemename = '{$scheme}' AND uf.member_type = '{$member_type}' AND uf.membership_status = 1 AND uf.is_deleted = 0 ORDER BY uf.user_id";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}

		public static function scheme($connect)
		{
			$query = "SELECT schemeName FROM tbl_medicalscheme WHERE is_deleted=0";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function membertype($connect)
		{
			$query = "SELECT member_type FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function getmembersdetails($connect)
		{
		    $query = "SELECT u.empid, u.initials, u.sname, uf.user_id, uf.department, uf.schemename, uf.member_type FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.membership_status = 1 AND uf.is_deleted = 0 ORDER BY uf.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteMember($user_id , $connect)
		{
			$query = "UPDATE tbl_user_flag SET is_deleted = 1 WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>