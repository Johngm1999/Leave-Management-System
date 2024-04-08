<?php
require('top.inc.php');
$result = mysqli_query($con,"SELECT * FROM faculty_leave  where id='$id' ");

while($row = mysqli_fetch_array($result))
{
 $status=$row['leave_status'];
 $name=$row['employee_name'];
 $from=$row['leave_from'];
 $to=$row['leave_to'];
 $message =" Dear  ".$name.". 

 I have gone through your requested leave and i am happy to grant approval.

 You are  hereby  granted leave between the following dates :
 " .$from. " - " .$to. ".
 I appreciate your thoughtfulness to inform us well in advance.

 You could also co-ordinate with your staffs if anybody needs to be replaced temporarily.

 Yours Sincerely
 HOD";
 $nam = 'Admin';
 $mails=$row['email'];
 var_dump($mails);
 $subject='Leave Approved';
	if ($status==2){


 
 email($nam,$mails,$subject,$message);

}	
	
elseif ($status==3) {
$subjec='Leave Rejected';
$messag =" Dear  ".$name.". 
   
I have just received you leave application and i am sorry to say that the application is rejected.
   
We hope that you be aware of the situation and carry on with the responsibility without any disappointment.
   
Yours Sincerely
HOD";
 emaili($nam,$mails,$subjec,$messag);
	}


}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
function email($name,$mails,$subject,$message){




	require "vendor/autoload.php";
	$mail = new PHPMailer(true);
	$mail->SMTPSecure = 'tls'; 
	//$mail->SMTPDebug  = 2;
	// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

	$mail->isSMTP();
	$mail->SMTPAuth = true;

	$mail->Host = "smtp.gmail.com";
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;

	$mail->Username = "jacobyohannan005@gmail.com";
	$mail->Password = "ttifzbjcmiscorhu";
    
	$mail->setFrom('jacobyohannan005@gmail.com', 'Admin');
	$mail->addAddress($mails,$name);

	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	$mail->send();
    
	header("Location: leave.php");
	}
function emaili($name,$mails,$subjec,$messag){

        require "vendor/autoload.php";
        $mail = new PHPMailer(true);
        $mail->SMTPSecure = 'tls'; 
        //$mail->SMTPDebug  = 2;
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
        $mail->isSMTP();
        $mail->SMTPAuth = true;
    
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
    
        $mail->Username = "jacobyohannan005@gmail.com";
        $mail->Password = "ttifzbjcmiscorhu";
        
        $mail->setFrom('jacobyohannan005@gmail.com', 'Admin');
        $mail->addAddress($mails,$name);
    
        $mail->Subject = $subjec;
        $mail->Body = $messag;
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        $mail->send();
        
        header("Location: leave.php");
        }
?>