<?php
    echo $_POST['data-sitekey'];


  $to = "tommaso.palo@gmail.com";
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $name = $_POST['name'];
  $comments = $_POST['message'];
  $subject = "Messaggio da Foresta Roccarainola .it";
  $message = $name."\r\n".$email."\r\n".$comments;

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: <info@forestadiroccarainola.it>' . "\r\n";

  mail($to,$subject,$message,$headers);
  echo "OK";
  //$res=array();
//$res['ok']="OK";
  //echo json_encode($res);
  //header("location: ../index.php");

  // Replace contact@example.com with your real receiving email address
  //  $receiving_email_address = 'info@forestadiroccarainola.it';

  //  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //    include( $php_email_form );
  //  } else {
  //    die( 'Unable to load the "PHP Email Form" Library!');

  //  }
  //  $contact = new PHP_Email_Form;
  //  $contact->ajax = true;

  //  $contact->to = $receiving_email_address;
  //  $contact->from_name = $_POST['name'];
  //  $contact->from_email = $_POST['email'];
  //  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  //  $contact->add_message( $_POST['name'], 'From');
  //  $contact->add_message( $_POST['email'], 'Email');
  //  $contact->add_message( $_POST['message'], 'Message', 10);

  //  echo $contact->send();
  //







  ?>
