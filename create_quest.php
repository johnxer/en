<?php
ini_set('display_errors', '1');
require_once('email_conf.php');
	$task_types=[
		'video'=>'Watch a video',
		'picture'=>'Take a picture',
		'single'=>'Single choiceo',
		'multi'=>'Multiple choice',
		'action'=>'Action task',
		'text'=>'Text answer',
	];
	require_once('swiftmailer/swift_required.php');
	$transport = Swift_MailTransport::newInstance();

	$mailer = Swift_Mailer::newInstance($transport);

	$message = Swift_Message::newInstance()

	 // Give the message a subject
  ->setSubject('New quest')

  // Set the From address with an associative array
  ->setFrom(array('new_quest@whatever.com' => 'New quest'))

  // Set the To addresses with an associative array
  ->setTo($send_to_admin);

  // Give it a body
	$the_body=file_get_contents('body_template_admin.php');
	
	$task='';
  	foreach ($_POST['task_type'] as $k=>$type)
  	{
  		$task.="<h5>".$task_types[$type]."</h5>";
  		$task.="<div>".$_POST['editor'][$k]."</div>";
  		if ($type=="video")
  			$message->attach(Swift_Attachment::fromPath($_FILES['file']['tmp_name'][$k])->setFilename($_FILES['file']['name'][$k]));

  		if ($type=="single" || $type=="multi")
  		{
  			$task.="<div>Choices: ".$_POST['text'][$k]."</div>";
  		}
  		$task.="<hr>";
  	}
  	
	$key_array=['{description}','{tasks}','{coupon}','{participants}','{start}','{end}','{times}','{name}','{email}','{company}','{title}','{phone}'];
	$value_array=[$_POST['description'],$task,$_POST['coupon_code'],$_POST['number_of_participants'],$_POST['start'],$_POST['end'],$_POST['times'],$_POST['name'],$_POST['email'],$_POST['company'],$_POST['title'],$_POST['phone']];
	$the_body=str_replace($key_array, $value_array, $the_body);
	$message->setBody($the_body, 'text/html');

  	$message->attach(Swift_Attachment::fromPath($_FILES['background_image']['tmp_name'])->setFilename($_FILES['background_image']['name']));

  $result = $mailer->send($message);



  //email to subscriber
  $transport = Swift_MailTransport::newInstance();

  $mailer = Swift_Mailer::newInstance($transport);

  $message = Swift_Message::newInstance()

   // Give the message a subject
  ->setSubject('New quest')

  // Set the From address with an associative array
  ->setFrom(array('new_quest@whatever.com' => 'New quest'))

  // Set the To addresses with an associative array
  ->setTo(array($_POST['email']));

  // Give it a body
  $the_body=file_get_contents('body_template_subscriber.php');
  $message->setBody($the_body, 'text/html');
  $result = $mailer->send($message);

