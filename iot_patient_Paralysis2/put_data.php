<?php
$con = mysqli_connect('localhost','patient1_sing','smvM2-Teh5C@','patient1_sing');
if(!empty($_REQUEST))
{
$temp = @$_REQUEST['temp'];
$ecg = @$_REQUEST['ecg'];
$fal = @$_REQUEST['fal'];

$query = "INSERT INTO `akshi` (`temp`, `ecg`, `fal`)
 VALUES ('".$temp."', '".$ecg."', '".$fal."')";

//echo $query;
mysqli_query($con,$query);
///////////////////////////////////////////////////////////////////////////	
if($temp >= 50)
{
$to      = 'akshi.mann12@gmail.com';
$subject = ' BODY TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      High TEMPERATURE Alert."."\r\n";
$message .= "https://www.patienthealthcare.co.in/iot_patient_Paralysis2/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

	$to      = 'svskits@gmail.com';
$subject = ' BODY TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      High TEMPERATURE Alert."."\r\n";
$message .= "https://www.patienthealthcare.co.in/iot_patient_Paralysis2/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}

///////////////////////////////////////////////////////////////////////////	
if($fal == YES)
{
$to      = 'akshi.mann12@gmail.com';
$subject = ' PATIENT FALLEN';
$message = 'PATIENT FALLEN';
$message .= "https://www.patienthealthcare.co.in/iot_patient_Paralysis2/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

	
$to      = 'svskits@gmail.com';
$subject = ' PATIENT FALLEN';
$message = 'PATIENT FALLEN';
$message .= "https://www.patienthealthcare.co.in/iot_patient_Paralysis2/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);	
}
///////////////////////////////////////////////////////////////////////////	
}
?>



