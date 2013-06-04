<?php
				function validateInput($data, $fieldName){
					global $errorCount;
					if (empty($data)){
						echo "\"$fieldName\" is a required field.<br>\n";
						++$errorCount;
						$retval = "";
					}else{  //if not empty clean it up
						$retval = trim($data);
						$retval = stripslashes($retval);
					}
					return($retval);
				}
				function validateEmail($data, $fieldName){
					global $errorCount;
					if(empty($data)){
						echo "\"$fieldName\" is a required field.<br>\n";
						++$errorCount;
						$retval = "";
					}else{
						$retval = trim($data);
						$retval = stripslashes($retval);
						$pattern = "/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)*(\.[a-z]{2,})$/i";
						if (preg_match($pattern, $retval)==0) {
							echo "\"$fieldName\" is not a valid e-mail address.<br>\n";
							++$errorCount;
						}
					}
					return($retval);
				}
				$errorCount = 0;
				$Sender = "";
				$Subject= "Request for Information from Great Northwest Website Contact Form";
				$Email = "";
				$Phone = "";
				$Message = "";
				
				if (isset($_POST['Submit'])) {
					$Sender = validateInput($_POST['Sender'], "Your Name");
					$Email = validateEmail($_POST['Email'], "Your E-mail");
					$Phone = validateInput($_POST['Phone'], "Phone");
					$Message = validateInput($_POST['Message'], "Message");
					if ($errorCount == 0)

					$SenderAddress = "$Sender <$Email>";
					$Headers = "From: $SenderAddress\nCC:$SenderAddress\n";
					$email_body = "You have received a new message from the contact form on your website. ".
	" Here are the details:\n Name: $Sender \n Phone: $Phone \n Email: $Email \n Message: $Message";
					
					$result = mail("amccrery@hotmail.com", $Subject, $email_body, $Headers);
				}
            ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body data-theme="a">
<section data-role="page" data-theme="a" id="ThankYou">

<div data-role="header">
		<h1>Thank You</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left"  data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div>
    <div data-role="content">
<?php 
					if ($result) {
						echo "<p>Thank you, " . $Sender . ", for your interest in Great Northwest Music, your message has been sent and we will contact you soon.</p>\n";
					}else{
						echo "<p>Sorry" . $Sender . ", there was an error sending your message.</p>";
					}
?>
    </div>
    </section>
	
</body>
</html>
