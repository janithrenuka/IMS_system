<?php
    class claimFormModel {
        public static function checkWhetherOpd($claim_form_no,$user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} AND opd_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
		}

		public static function checkWhetherSurgical($claim_form_no,$user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} AND surgical_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
        }
        
        public static function opdReqFormIds($user_id, $connect){
		    $query = "SELECT claim_form_no FROM tbl_claimform WHERE user_id = {$user_id} AND opd_form_flag=1 AND acceptance_status=2 AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function surgicalReqFormIds($user_id, $connect){
		    $query = "SELECT claim_form_no FROM tbl_claimform WHERE user_id = {$user_id} AND surgical_form_flag=1 AND acceptance_status=2 AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getSubmitDate($user_id, $claim_form_no, $connect){
			$query = "SELECT submitted_date FROM tbl_claimform WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function checkClaimFormNo($claim_form_no, $user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function deleteClaimForm($claim_form_no, $user_id, $connect){
			$query = "UPDATE tbl_claimform SET is_deleted=1 WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMoEmail($connect){
			$query = "SELECT users.email FROM users INNER JOIN tbl_user_flag ON users.userId = tbl_user_flag.user_id WHERE tbl_user_flag.mo_flag= 1";
			//$query = "SELECT email FROM users WHERE userRole='medicalOfficer'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getNextFormNumber($connect){
			$query = "SELECT MAX(claim_form_no) FROM tbl_claimform";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDependantName($user_id, $connect){
			$query = "SELECT * FROM tbl_dependant WHERE user_id={$user_id} AND is_deleted='0'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function fillOpdForm($user_id, $dependant_id , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, dependant_id, doctor_name, treatment_received_date, bill_issued_date, purpose, bill_amount, opd_form_flag, surgical_form_flag, file_name, submitted_date) VALUES ( $user_id ,  '$dependant_id' , '$doctor_name' , '$treatment_received_date' ,'$bill_issued_date', '$purpose' , '$bill_amount', 1, 0, '$file_name_new','$submitted_date') ";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function fillOpdFormNew($user_id,  $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, doctor_name, treatment_received_date, bill_issued_date, purpose, bill_amount, opd_form_flag, surgical_form_flag, file_name, submitted_date) VALUES ( $user_id ,'$doctor_name' , '$treatment_received_date' ,'$bill_issued_date', '$purpose' , '$bill_amount', 1, 0, '$file_name_new','$submitted_date') ";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function fillSurgicalForm($user_id, $dependant_id, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, dependant_id,  accident_date, how_occured, injuries, nature_of_illness, commence_date, first_consult_date , doctor_name, doctor_address, hospitalized_date, discharged_date, illness_before, illness_before_years, sick_injury, insurer_claims, nature_of, opd_form_flag, surgical_form_flag, file_name, submitted_date) 
					  VALUES ( $user_id ,'$dependant_id','$accident_date','$how_occured','$injuries','$nature_of_illness','$commence_date','$first_consult_date','$doctor_name','$doctor_address','$hospitalized_date','$discharged_date','$illness_before','$illness_before_years','$sick_injury','$insurer_claims','$nature_of', 0, 1, '$file_name_new','$submitted_date')";
					  
			$result = mysqli_query($connect, $query);
			return $result;

		}

		public static function fillSurgicalFormNew($user_id,  $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id,  accident_date, how_occured, injuries, nature_of_illness, commence_date, first_consult_date , doctor_name, doctor_address, hospitalized_date, discharged_date, illness_before, illness_before_years, sick_injury, insurer_claims, nature_of, opd_form_flag, surgical_form_flag, file_name, submitted_date) 
					  VALUES ( $user_id ,'$accident_date','$how_occured','$injuries','$nature_of_illness','$commence_date','$first_consult_date','$doctor_name','$doctor_address','$hospitalized_date','$discharged_date','$illness_before','$illness_before_years','$sick_injury','$insurer_claims','$nature_of', 0, 1, '$file_name_new','$submitted_date')";
					  
			$result = mysqli_query($connect, $query);
			return $result;

		}

		public static function getSubmitDateDiff($claim_form_no, $user_id,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), submitted_date )FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateSurgicalForm($user_id, $claim_form_no,  $dependant_id, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of,$file_name_new, $updated_date ,$connect){
			$query = "UPDATE tbl_claimform SET dependant_id='{$dependant_id}', accident_date='{$accident_date}', how_occured='{$how_occured}', injuries='{$injuries}', nature_of_illness='{$nature_of_illness}', commence_date='{$commence_date}', first_consult_date='{$first_consult_date}', doctor_name='{$doctor_name}', doctor_address='{$doctor_address}', hospitalized_date='{$hospitalized_date}', discharged_date='{$discharged_date}', 
														illness_before='{$illness_before}', illness_before_years='{$illness_before_years}', sick_injury='{$sick_injury}', insurer_claims='{$insurer_claims}', nature_of='{$nature_of}', file_name= '{$file_name_new}', updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;

		}

		public static function updateOpdForm($user_id, $claim_form_no, $dependant_id,  $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $updated_date, $connect){
			$query = "UPDATE tbl_claimform SET dependant_id='{$dependant_id}', doctor_name='{$doctor_name}', treatment_received_date='{$treatment_received_date}', bill_issued_date='{$bill_issued_date}', purpose='{$purpose}', bill_amount='{$bill_amount}', file_name= '{$file_name_new}' , updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getReferredForms($user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE user_id={$user_id} AND (acceptance_status='0' OR acceptance_status='1') AND (paid_status='0' OR paid_status='1') ORDER BY claim_form_no DESC";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMedYearEndDate($year,$connect){
            $query = "SELECT * FROM tbl_medical_year WHERE YEAR(end_date)='{$year}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

		public static function getFormEndMedDate($medical_year, $connect){
			$query = "SELECT end_date FROM tbl_medical_year WHERE medical_year='{$medical_year}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDependPatientName($user_id,$dependant_id,$connect){
			$query = "SELECT * FROM tbl_dependant WHERE dependant_id={$dependant_id} AND user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDependPatientRela($user_id,$dependant_id,$connect){
			$query = "SELECT relationship FROM tbl_dependant WHERE dependant_id={$dependant_id} AND user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateOpdFormNew($user_id, $claim_form_no,  $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount, $file_name_db, $updated_date, $connect){
			$query = "UPDATE tbl_claimform SET   doctor_name='{$doctor_name}', treatment_received_date='{$treatment_received_date}', bill_issued_date='{$bill_issued_date}', purpose='{$purpose}', bill_amount='{$bill_amount}', file_name= '{$file_name_db}' , updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateSurgicalFormNew($user_id, $claim_form_no,  $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of,$file_name_db, $updated_date ,$connect){
			$query = "UPDATE tbl_claimform SET  accident_date='{$accident_date}', how_occured='{$how_occured}', injuries='{$injuries}', nature_of_illness='{$nature_of_illness}', commence_date='{$commence_date}', first_consult_date='{$first_consult_date}', doctor_name='{$doctor_name}', doctor_address='{$doctor_address}', hospitalized_date='{$hospitalized_date}', discharged_date='{$discharged_date}', 
														illness_before='{$illness_before}', illness_before_years='{$illness_before_years}', sick_injury='{$sick_injury}', insurer_claims='{$insurer_claims}', nature_of='{$nature_of}', file_name= '{$file_name_db}', updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;

		}

		public static function getDependRelation($dependant_id,$connect){
			$query = "SELECT * FROM tbl_dependant WHERE dependant_id='{$dependant_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getPrevDepend($claim_form_no,$connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no}";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>