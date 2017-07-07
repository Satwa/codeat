<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		if(isset($_POST['name']) && !empty($_POST['name'])){
			if(isset($_POST['subject']) && !empty($_POST['subject'])){
				if(isset($_POST['email']) && !empty($_POST['email'])){
					if(isset($_POST['comment']) && !empty($_POST['comment'])){
						$name = htmlentities(addslashes($_POST['name']));
						$subject = htmlentities(addslashes(nl2br($_POST['subject'])));
						$email = htmlentities(addslashes($_POST['email']));
						$comment = htmlentities(addslashes($_POST['comment']));

						mail("e-mail", "CodEat user sent you a mail!", "
								Name: $name,
								Subject: $subject,
								Email: $email,
								Timestamp: ".time()."
								Content: 
								$comment
							");
						echo '<script src="assets/js/js-cookie.js"></script>';
						echo '<script>Cookies.set("sent", true, {expires: 1/48});window.location.replace("index.php");</script>';
						return true;
					}
				}
			}
		}
	}
	return false;
?>