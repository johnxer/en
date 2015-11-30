<?php
ini_set('display_errors', '1');
require_once('email_conf.php');

require_once('swiftmailer/swift_required.php');

//EMAIL TO SUBSCRIBER
	$transport = Swift_MailTransport::newInstance();

	$mailer = Swift_Mailer::newInstance($transport);

	$message = Swift_Message::newInstance()

	 // Give the message a subject
  ->setSubject('Thank you')

  // Set the From address with an associative array
  ->setFrom(array('info@eagleninja.com' => 'Thank you'))

  // Set the To addresses with an associative array
  ->setTo(array($_POST['sponsor_email']));

  // Give it a body
	
	$message->setBody(file_get_contents('learn_more_to_subscriber.php'), 'text/html');

	$result = $mailer->send($message);





//EMAIL TO ADMIN
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance()
	 // Give the message a subject
  ->setSubject('New Custom Demo Form')
  // Set the From address with an associative array
  ->setFrom(array('info@eagleninja.com' => 'New Custom Demo Form'))
  // Set the To addresses with an associative array
  ->setTo($send_to_admin);
  // Give it a body
	$the_body=file_get_contents('learn_more_to_admin.php');

	$key_array=['{name}','{email}','{phone}','{company}','{product_category}','{hear}','{referrer}'];
	$value_array=[$_POST['sponsor_name'],$_POST['sponsor_email'],$_POST['sponsor_phone'],$_POST['sponsor_cname'],$_POST['aff_intend'],$_POST['sponsor_heard'],$_POST['sponsor_referral']];
	$the_body=str_replace($key_array, $value_array, $the_body);


	$message->setBody($the_body, 'text/html');

	$result = $mailer->send($message);
 