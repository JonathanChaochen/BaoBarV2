<?php
if($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "289951406@qq.com";
    $email_subject = "New order from website";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['form_name']) ||
        !isset($_POST['form_email']) ||
        !isset($_POST['form_number']) ||
        !isset($_POST['form_date']) ||
        !isset($_POST['form_time']) ||
        !isset($_POST['form_comment']) ) {
        echo 'We are sorry, but there appears to be a problem with the form you submitted.';
    }

    $form_name = $_POST['form_name'];  // required
    $form_email = $_POST['form_email']; // required
    $form_number = $_POST['form_number']; // required
    $form_date =  $_POST['form_date']; // required
    $form_time = $_POST['form_time']; // required
    $form_comment = $_POST['form_comment'];


    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$form_email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$form_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }



  if(strlen($form_comment) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }


    $email_message .= "Name: ".clean_string($form_name)."\n";
    $email_message .= "Email: ".clean_string($form_email)."\n";
    $email_message .= "Telephone: ".clean_string($form_number)."\n";
    $email_message .= "Date: ".clean_string($form_date)."\n";
    $email_message .= "Time: ".clean_string($form_email)."\n";
    $email_message .= "Comments: ".clean_string($form_number)."\n";

// create email headers
$headers = 'From: '.$form_email."\r\n".
'Reply-To: '.$form_email."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($email_to, $email_subject, $email_message, $headers)) {
    header ("Location:contact.html") ;
}
?>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.
<?php
}
?>
