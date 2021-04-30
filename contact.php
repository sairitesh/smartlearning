<?php
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Subject = $_POST['Subject'];
  $Message = $_POST['Message']; 
  $to = 'smatcha@mail.web540.net';
  $subject = 'Smart Learning- support';
  
  mail($to, $Subject, $Message, 'From:' . $Email);

  echo 'Thankyou.<br />';
  echo 'We Received your Message: ' . $Name;
?>