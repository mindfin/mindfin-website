<?php
	class Website{
		
		function fetchEmploeeType(){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="SELECT * FROM employeetype";
			
			$result=mysqli_query($con,$sql);
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					array_push($list, $row);
					}
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}
		
		// function fetchLoanPurpose(){
		// 	$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
		// 	$list = array();
		// 	echo $sql="SELECT * FROM loantype where status = 'active'";
			
		// 	$result=mysqli_query($con,$sql);
		// 	if($result){
		// 		while($row = mysql_fetch_assoc($result)){
		// 			array_push($list, $row);
		// 			}
		// 		} else {
		// 		$list = 0;
		// 	}
		// 	mysqli_close($con);
		// 	return $list;
		// }
		
		function fetchBankInfo(){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="SELECT * FROM bank where status = 'active'";
			
			$result=mysqli_query($con,$sql);
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					array_push($list, $row);
					}
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}
		
		function fetchtrackinginfo($trackid){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="SELECT c.*,l.loantype FROM customer c,loantype l where c.applytype = l.idloantype and c.mobile = '$trackid'";
			
			$result=mysqli_query($con,$sql);
			if($result){
				while($row = mysqli_fetch_assoc($result)){
					array_push($list, $row);
					}
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}
		
		// function InsertCustomerForm($name,$cemail,$pemail,$dob,$gender,$mobile,$altmobile,$address,$emptype,$cname,$designation,$salary,$loan_amount,$loanpurpose,$applieddate){
		// 	$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
		// 	$list = array();
		//     $sql="INSERT INTO `customer`(`name`, `mobile`,`email`, `dob`, `altmobile`, `address`, `gender`, `emptype`, `cname`, `designation`, `applytype`, `salary`, `status`,`displaystatus`,`applieddate`,`source`,`cemail`,`amount`)
		// 			VALUES('$name', '$mobile','$pemail', '$dob', '$altmobile', '$address', '$gender', '$emptype', '$cname', '$designation', '$loanpurpose', '$salary', 'PENDING','PENDING', '$applieddate','WEBSITE','$cemail','$loan_amount')";
		// 	$result=mysqli_query($con,$sql);
		// 	if($result){
		// 		$list = 1;
		// 		} else {
		// 		$list = 0;
		// 	}
		// 	mysqli_close($con);
		// 	return $result;
			
		// }
		function customeraddForm($applieddate, $name, $mobile, $email, $dob, $panno, $pincode, $loanpurpose, $cname, $loan_amount){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
		    $sql="INSERT INTO `customer`(`name`, `mobile`,`email`, `dob`, `pincode`, `applieddate`, `cname`, `applytype`, `status`, `displaystatus`, `amount`, `source`, `panno`)
					VALUES('$name', '$mobile','$email', '$dob', '$pincode', '$applieddate', '$cname','$loanpurpose', 'PENDING', 'PENDING','$loan_amount','Website', '$panno')";
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $result;
			
		}
		function InsertcareerForm($name,$email,$gender,$mobile,$applieddate,$experience,$position,$age){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
		    $sql="INSERT INTO `website`(`name`, `mobileno`,`email`, `age`, `experience`, `position`, `gender`, `formtype`, `applieddate`)
					VALUES('$name', '$mobile','$email', '$age', '$experience', '$position', '$gender', 'Careerform', '$applieddate')";
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $result;
			
		}
		function InsertcontactForm($name,$email,$message,$mobile
		,$applieddate){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
		    $sql="INSERT INTO `website`(`name`, `mobileno`,`email`, `message`, `formtype`,`applieddate`)
					VALUES('$name', '$mobile','$email', '$message', 'Contactform', '$applieddate')";
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $result;
			
		}
		function InsertcallbackForm($name,$email,$mobile,$applieddate){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
		    $sql="INSERT INTO `website`(`name`, `mobileno`,`email`,`formtype`,`applieddate`)
					VALUES('$name', '$mobile','$email', 'Callbackform', '$applieddate')";
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $result;
			
		}
		function InsertPreviousBankDetails($idcustomer,$idloantype,$loanamount,$idbank){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="INSERT INTO `previousbankdetails`(`idcustomer`, `idbank`, `idloantype`, `amount`)
					VALUES('$idcustomer', '$idbank', '$idloantype', '$loanamount')";
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}
		
		function InsertFeedbackEmoji($feedback_id,$emoji,$created){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="INSERT INTO `feedback_emoji`(`id`,`feedback_id`, `rating`, `created`)
					VALUES('NULL', '$feedback_id', '$emoji', '$created')";
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}

		function UpdateFeedbackEmojiOne($feedback_id,$em){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="UPDATE `add_feedback`
			SET 
			`emoji_one`='$em'
			WHERE `id`='$feedback_id'";			
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}

		function UpdateFeedbackEmojiTwo($feedback_id,$em){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="UPDATE `add_feedback`
			SET 
			`emoji_two`='$em'
			WHERE `id`='$feedback_id'";			
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}

		function UpdateFeedbackEmojiThree($feedback_id,$em){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="UPDATE `add_feedback`
			SET 
			`emoji_three`='$em'
			WHERE `id`='$feedback_id'";			
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}

		function UpdateFeedbackEmojiFour($feedback_id,$em){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="UPDATE `add_feedback`
			SET 
			`emoji_four`='$em'
			WHERE `id`='$feedback_id'";			
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}

		function UpdateFeedbackEmojiFive($feedback_id,$em){
			$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
			$list = array();
			$sql="UPDATE `add_feedback`
			SET 
			`emoji_five`='$em'
			WHERE `id`='$feedback_id'";			
			$result=mysqli_query($con,$sql);
			if($result){
				$list = 1;
				} else {
				$list = 0;
			}
			mysqli_close($con);
			return $list;
		}
		
		// function subvendorLoginValidation($username, $password){
		// 	$con = mysqli_connect('localhost', 'root', 'mindfin@098','mindfin');
		// 	$list = array();
		// 	$sql="SELECT *
		// 	FROM `customer`
		// 	WHERE (`email`='$username')
		// 	AND `password`='$password'";
		// 	$result=mysqli_query($con,$sql);
		// 	if($result){
		// 		while($row = mysql_fetch_assoc($result)){
		// 			array_push($list, $row);
		// 			}
		// 		} else {
		// 		$list = 0;
		// 	}
		// 	mysqli_close($con);
		// 	return $list;
		// }
		
	}
