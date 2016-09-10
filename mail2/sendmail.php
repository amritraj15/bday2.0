<?php
 include_once "./vendor/autoload.php";
 
 
 if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

 /*

  * Create the body of the message (a plain-text and an HTML version).
  * $text is your plain-text email
  * $html is your html version of the email
  * If the reciever is able to view html emails then only the html
  * email will be displayed
  */ 
 $text = 'Hi!\n You Sent the message:- '.$message.'\n';
 $html = '<html>
       <head></head>
       <body>
           <p>Hi!<br>
               You Sent the message:- '.$message.' <br>
           </p>
       </body>
       </html>";
 // This is your From email address
 $from = array('amritraj1510@gmail.com' => 'Amrit Raj');
 // Email recipients
 $to = array(
       $email_address=>$name,
       'patnabihar15@gmail.com'=>'EFGH'

 );
 // Email subject
 $subject = 'Example PHP Email';

 // Login credentials
 $username = 'azure_aa6a9564165bf5dd8a4355282861e7fd@azure.com';
 $password = 'asdf1234';

 // Setup Swift mailer parameters
 $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
 $transport->setUsername($username);
 $transport->setPassword($password);
 $swift = Swift_Mailer::newInstance($transport);

 // Create a message (subject)
 $message = new Swift_Message($subject);

 // attach the body of the email
 $message->setFrom($from);
 $message->setBody($html, 'text/html');
 $message->setTo($to);

 $message->addPart($text, 'text/plain');

 // send message 
 if ($recipients = $swift->send($message, $failures))
 {
     // This will let us know how many users received this message
     echo 'Message sent out to '.$recipients.' users';
 }
 // something went wrong =(
 else
 {
     echo "Something went wrong - ";
     print_r($failures);
 }