<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])){
	
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	 

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "Kindly provide valid email";
    }
    else{
     $body = "name -: ".$fname."\n email-: ".$email."\n phone_no-: ".$phone."\n subject for -:".$subject."\n message-:".$message;
      if(mail('pranwant8@gmail.com','Website Response',$body ,'From: pranwant.p22@gmail.com')){
         print "<script>document.location.href='thankyou.php' ;</script>";
      }
      else{
        echo "there is an problem to sending an email";
      }
    }
  }
    else{
      echo "all feild are required";
    }
  }

else{
  echo "<h1>Not ok</h1>";
}

?>