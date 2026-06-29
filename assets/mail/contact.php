<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email)
{
	return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = isset($_POST['name']) ? $_POST['name'] : '';
$email    = isset($_POST['email']) ? $_POST['email'] : '';
$phone    = isset($_POST['phone']) ? $_POST['phone'] : '';
$comments = isset($_POST['comments']) ? $_POST['comments'] : '';
$subject_dropdown = isset($_POST['subject']) ? $_POST['subject'] : '';

if (trim($name) == '') {
	echo '<div class="alert alert-error">You must enter your name.</div>';
	exit();
} else if (trim($email) == '') {
	echo '<div class="alert alert-error">You must enter email address.</div>';
	exit();
} else if (!isEmail($email)) {
	echo '<div class="alert alert-error">You must enter a valid email address.</div>';
	exit();
} else if (trim($phone) == '') {
	echo '<div class="alert alert-error">You must enter your phone number.</div>';
	exit();
} else if (trim($comments) == '' && (trim($subject_dropdown) == '' || trim($subject_dropdown) == 'Choose Subject')) {
	echo '<div class="alert alert-error">Please select a service or enter a message.</div>';
	exit();
}

$comments = stripslashes($comments);


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

$address = "admin@jagantechnicalservices.ae";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'New Inquiry: ' . ($subject_dropdown ? $subject_dropdown : 'Contact Form');


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "You have received a new inquiry from $name." . PHP_EOL . PHP_EOL;

if ($subject_dropdown && $subject_dropdown != 'Choose Subject') {
    $e_body .= "Requested Service: $subject_dropdown" . PHP_EOL . PHP_EOL;
}

if ($comments) {
    $e_content = "Message: \"$comments\"" . PHP_EOL . PHP_EOL;
} else {
    $e_content = "";
}

$e_reply = "You can contact $name via email: $email or phone: $phone";

// Require Composer's autoloader
require __DIR__ . '/../../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'admin@jagantechnicalservices.ae';
    $mail->Password   = 'Jagantechnical@2026';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('admin@jagantechnicalservices.ae', 'JTS Website');
    $mail->addAddress('admin@jagantechnicalservices.ae');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(false);
    $mail->Subject = $e_subject;
    $mail->Body    = $e_body . $e_content . $e_reply;

    $mail->send();
	echo "<div class='alert alert-success'>";
	echo "<h3>Email Sent Successfully.</h3>";
	echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
	echo "</div>";
} catch (Exception $e) {
	echo '<div class="alert alert-error">Server Error: The mail server failed to send the email. Mailer Error: ' . $mail->ErrorInfo . '</div>';
}
