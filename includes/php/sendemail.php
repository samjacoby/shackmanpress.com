<?php
$mailTo = 'sam@shackmanpress.com';
$mailFrom = 'request-mailinglist';
$subject = $_POST['emailTo'];
$message = 'Please add '.$_POST['emailTo'].' to the mailing list.';

mail($mailTo, $subject, $message, 'From: '.$mailFrom);

$mailTo = $_POST['emailTo'];
$subject = 'Shackman Press | Mailing List Confirmation';
$message = "<html>
				<head>Welcome to the Shackman Press Mailing List!</head>
			<body>
			<p>This automated email was sent to inform you that your subscription (".$mailTo.") to the <em>Shackman Press Mailing List</em> has been received and duly processed by a cunningly-made computer program. Thanks for your interest, and we look forward to keeping you posted.</p><p>Should you ever tire of the ceaseless string of emails you'll be receiving, don't hesitate to drop us a note at info@shackmanpress.com and let us now how your feel! If you <em>didn't</em> sign-up for this email list, let us know and we will combat whatever Internet thugs unjustly subscribed you! We care deeply about our Email inbox, and fully support you doing the same.</p>
			<br />
			<p style='font-size:small;color:#000099\;'>Shackman Press will never do anything irresponsible with your contact information. We can't even promise we'll remember it.</p>
			</body>
			</html>";

$headers = "From: \"Shackman Press\" <info@shackmanpress.com>\r\n";
$headers .= "Reply-To: info@shackmanpress.com\r\n";
$headers .= "Return-Path: info@shackmanpress.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=\"iso-8859-1\"";

//if (preg_match("/gmail/",$mailTo))
//	$headers = str_replace("\r\n","\n",$headers);

mail($mailTo, $subject, $message, $headers);
?>