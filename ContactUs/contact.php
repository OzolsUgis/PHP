<?php 
	

	$msg = '';
	$msgClass = '';

	// Parbada vai poga strādā
	if (filter_has_var(INPUT_POST, 'submit')) {
 	// sanem datus

 				$name = htmlspecialchars($_POST['name']);
 				$email = htmlspecialchars($_POST['email']);
 				$message = htmlspecialchars($_POST['message']);
 		
 	

 		if (!empty($email) && !empty($name) && !empty($message)) {
 		// parbauda epastu 
 			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 			//failed
	 			$msg = 'Please use correct email';
	 			$msgClass = 'alert-danger';

	 		}else{
	 			// Saņēmēja epasts 
	 			$toEmail = "ozols.ugiss@gmail.com";
	 			$subject = "Contact request from " .$name;
	 			$body = '<h2>Contact request</h2>
	 					<h4>Name</h4><p>'.$name.'</p>
						<h4>Email</h4><p>'.$email.'</p>
						<h4>Message</h4><p>'.$message.'</p>
					';


					$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;chaset=UTF-8" . "\r\n";

		

				$headers .="From: " .$name. "<" .$email. ">" . "\r\n";

				if (mail($toEmail, $subject, $body, $headers)) {
					$msg = 'Your email has been sent  sent';
	 				$msgClass = 'alert-success';
	 			}else{
	 				$msg = 'Your email was not sent';
	 				$msgClass = 'alert-success';
	 			}

	 		}
	 	}else{
	 		$msg = 'Please fill in all fields';
	 		$msgClass = 'alert-danger';
	 	}

 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet"  href="https://bootswatch.com/4/minty/bootstrap.min.css">

</head>
<body>
		<nav class = "navbar navbar-default">
			<div class = "container">
				<div class = "navbar-header">
					<a class = "navbar-brand" href="contact.php">Test Contact form</a>
				</div>
			</div>
		</nav>


<form method = "post", action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<div class = "container">
	<div class = "textarea">
		<h6>To contact us, you must send an email, fill in all fields and press "Send" button and your email will be sent to our company ! </h6>
	</div>
	<div class = "container">
		<?php if ($msg != ''): ?>
			<div class = "alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif ; ?>
 
	<div class = "form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value = "<?php echo isset($_POST['name']) ? $name : ''; ?>">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email" class="form-control" value = "<?php echo isset($_POST['email']) ? $email : ''; ?>">
	</div>
	<div>
		<label>Message</label>
		<textarea type="message" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
	</div>
	<br>
	<button type="submut" name="submit" class="btn btn-primary">Send</button>
</form>



</body>
</html>