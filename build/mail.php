<?php
if((isset($_POST['form_firstName'])&&$_POST['form_firstName']!="")){
    $firstName = '<p>First Name: '.$_POST['form_firstName'].'</p>';
}
if((isset($_POST['form_lastName'])&&$_POST['form_lastName']!="")){
    $lastName = '<p>Last Name: '.$_POST['form_lastName'].'</p>';
}
if((isset($_POST['form_email'])&&$_POST['form_email']!="")){
    $email = '<p>Email: '.$_POST['form_email'].'</p>';
}
if((isset($_POST['form_phone'])&&$_POST['form_phone']!="")){
    $phone = '<p>Phone: '.$_POST['form_phone'].'</p>';
}
if((isset($_POST['form_company'])&&$_POST['form_company']!="")){
    $company = '<p>Company: '.$_POST['form_company'].'</p>';
}
if((isset($_POST['form_yourTitle'])&&$_POST['form_yourTitle']!="")){
    $yourTitle = '<p>Your Title: '.$_POST['form_yourTitle'].'</p>';
}
if((isset($_POST['form_message'])&&$_POST['form_message']!="")){
    $message = '<p>Message: '.$_POST['form_message'].'</p>';
}

  $to = 'rodergstep@gmail.com'; //Your email should be here
  $subject = 'Kangaroo. New message'; 
  $message = '
    <html>
      <head>
      <title>'.$subject.'</title>
      </head>
      <body>
        '.$firstName.'
        '.$lastName.'
        '.$email.'
        '.$phone.'
        '.$company.'
        '.$yourTitle.'
        '.$message.'
      </body>
    </html>';
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: Kangaroo <admin@Kangaroo.com>\r\n";
  mail($to, $subject, $message, $headers);
?>