<?php
include('config.php');

function saveReference($data, $file)
{

	global $db, $conn;

	// print_r($data);

	$name = (isset($data['name']) ? $data['name'] : false);

	$countyCode = (isset($data['country_code']) ? $data['country_code'] : false);

	$phone = (isset($data['phone']) ? $data['phone'] : false);

	$email = (isset($data['email']) ? $data['email'] : false);

	$message = (isset($data['message']) ? $data['message'] : '');

	$form_name = (isset($data['form_name']) ? $data['form_name'] : '');

	$project_name = (isset($data['project']) ? $data['project'] : '');

	$utm_primarysource = (isset($data['utm_primarysource']) ? $data['utm_primarysource'] : '');

	$utm_secondarysource = (isset($data['utm_secondarysource']) ? $data['utm_secondarysource'] : '');

	$utm_tertiarysource = (isset($data['utm_tertiarysource']) ? $data['utm_tertiarysource'] : '');

	$utm_campaign = (isset($data['utm_campaign']) ? $data['utm_campaign'] : '');

	$utm_keywords = (isset($data['utm_keywords']) ? $data['utm_keywords'] : '');

	$gclid = (isset($data['gclid']) ? $data['gclid'] : '');

	$pageUrl = (isset($data['pageUrl']) ? $data['pageUrl'] : '');

	$ip_address = getIP();

	$phone = "+".$countyCode ."". $phone;

	// $city_name = (isset($data['city_name']) ? $data['city_name'] : '');

	$isUserExistsQry = mysqli_query($conn, "SELECT email FROM " . _TABLE_NAME_ . " WHERE `email` = '$email'");
	$isUserExists = mysqli_fetch_array($isUserExistsQry);

	$userExist = $isUserExists['email'];

	if ($userExist)

		$response = showResponse(2, 'user already exists');

	else {
	
		if ($name && $phone && $email) {
			// $insert = array(
			// 	'name' => $name,
			// 	'email' => $email,
			// 	'phone' => $phone,
			// 	'message' => $message
			// 	);

			$dateTime = date('Y-m-d H:i:s');

			$result = mysqli_query($conn, "INSERT INTO " . _TABLE_NAME_ . "(`name`, `email`, `phone`, `form_name`,`project`, `primarySource`, `secondarySource`, `tertiarySource`, `keywords`, `campaign`, `page_url`,`ip_address`, `last_updated_time` ) VALUES ('$name','$email','$phone', '$form_name', '$project_name', '$utm_primarysource', '$utm_secondarysource', '$utm_tertiarysource', '$utm_keywords', '$utm_campaign', '$pageUrl', '$ip_address', '$dateTime' )");

			// echo $result;

			//sendToCRM($data);
			// fnSendMail($data);

			if ($result)
				$response = showResponse(1, 'informations successfully saved');
			else
				$response = showResponse(0, 'failed to saved info'.mysqli_error($conn));
		} else
			$response = showResponse(-1, 'data insuffient');
	}
	return $response;
}

// function fnSendMail($post){

//  $headers = "From: ".EMAIL_FROM_NAME."<".FROM_EMAIL.">"."\r\n";
// 	$headers .='Content-type: text/html; charset=iso-8859-1; format=flowed\n';
// 	$headers .="MIME-Version: 1.0\n";
// 	$headers .="Content-Transfer-Encoding: 8bit\n";
// 	$headers .="X-Mailer: PHP\n";	
// 	$headers .= 'Cc: '.CONTACT_CC.'' . " \r\n";
// 	$headers .= 'Bcc: ' .CONTACT_BCC.''." \r\n";

// 	// Mail it
//     $message='<html>
// 	<head>
// 	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
// 	  <title>'.CONTACT_SUBJECT.'</title>
// 	</head>
// 	<body>
// 		<p>Hi,<br/>
// 		Please find below registration details of '.LP_NAME.' landing page,</p>
// 		<table>';
// 	 if(isset($post['name'])){
// 	  	 $message .='<tr>
// 	      	<td>Name</td><td>:</td><td>'.$post['name'].'</td>
// 	    </tr>';
// 	  }  	
// 	   if(isset($post['phone'])){
// 	  	 $message .='<tr>
// 	      	<td>Phone No.</td><td>:</td><td>'.$post['phone'].'</td>
// 	    </tr>';
// 	  }  

// 	  if(isset($post['email'])){
// 	  	 $message .='<tr>
// 	      	<td>Email</td><td>:</td><td>'.$post['email'].'</td>
// 	    </tr>';
// 	  }  

// 	 if(isset($post['message'])){
// 	  	 $message .='<tr>
// 	      	<td>Message</td><td>:</td><td>'.$post['message'].'</td>
// 	    </tr>';
// 	  }  

// 	  if(isset($post['pageUrl'])){
// 	  	 $message .='<tr>
// 	      	<td>Page URL</td><td>:</td><td>'.$post['pageUrl'].'</td>
// 	    </tr>';
// 	  }  

// 	   $message .='<tr>
// 	      	<td>Date Time</td><td>:</td><td>'.date('d/m/20y h:i:s').'</td>
// 	    </tr>';

//      $message .='<tr>
// 	      	<td><br>Track All Leads in this URL <a href="'.BASE_URL.'/list-leads.php">Here</a></td>
// 	    </tr>';

// 	$message .='</table></body>
// 	</html>
// 	';
// 	//echo $message.CONTACT_TO;exit;
// 	mail(CONTACT_TO,CONTACT_SUBJECT, $message, $headers);

// }

function getIP()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function showResponse($response_code, $response_message)
{
	header('Content-Type: application/json');
	$responseArray = array(
		"code" => $response_code,
		"message" => $response_message
	);
	$responseArray = array("response" => $responseArray);
	return stripslashes(json_encode($responseArray, 128));
}
echo saveReference($_POST, $_FILES);

?>
 <?php mysqli_close($conn); ?>