<?php


if(isset($_POST['Submit']))
{

  $contactName = $_POST['yourName'];
  $contactEmail = $_POST['email'];
  $contactPhone = $_POST['phone'];
  $contactBody = $_POST['message'];

	ini_set("SMTP","mail.shaynak112.com");
	ini_set("smtp_port","25");
	ini_set('sendmail_from', 'pointsendgl@shaynak112.com'); // here you would put in the subscribers email address after you have gotten it from "$_POST"

	$from = "Sender <pointsendgl@shaynak112.com>"; //again, put the subscribers email address
	$to = "Point <pointcontact@shaynak112.com>"; // your email address with your hosting
	$subject = "Point Contact";
	$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

  $message = "A message from " . $contactName . " at " . $contactEmail . " and " . $contactPhone . " The message is:     " . $contactBody;
  mail($to,$subject,$message,$from);
  echo "Thank you, " . $contactName;
}