<?php
$field_name = $_POST['Name'];
$field_email = $_POST['E-Mail'];
$field_message = $_POST['Message'];
$field_subject = $_POST['Subject'];

/* change the email address on line 10 to match yours */
/* you can change the text on line 11, 'Message from ' to whatever you wish. This will be displayed in the subject line of your email*/

$mail_to = 'zanehugginsdesign@gmail.com';
$subject = 'Message from '.$field_name;

$body_message = 'From: '.$field_name."\r\n";
$body_message .= 'E-mail: '.$field_email."\r\n";
$body_message .= 'Message: '.$field_message;

$mail_status = mail($mail_to, $subject, $body_message);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'contact.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to yourname@email.com');
  window.location = 'contact.html';
 </script>
<?php
}
?>
