<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

		$recipient = "info@kwanzaoil.co.tz";
		$subject = "Subscription mail";
		$email_content = "New subscription mail: $email\n";

		if (mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your email has been sent.";
        }
	}
?>