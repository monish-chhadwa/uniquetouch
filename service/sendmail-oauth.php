<?php
//Follow: https://github.com/PHPMailer/PHPMailer/wiki/Using-Gmail-with-XOAUTH2
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* New aliases. */
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

/* Composer autoload.php file includes all installed libraries. */
require '../vendor/autoload.php';

//Get post data
$post = array();
if (count($_POST) === 0) {
    $input = file_get_contents('php://input');
    $inputArray = explode('&', $input); //convert JSON into array
    foreach ($inputArray as $item) {
        $param = explode('=', $item);
        $post[$param[0]] = urldecode($param[1]);
    }
} else {
    $post = $_POST;
}


/* If you installed league/oauth2-google in a different directory, include its autoloader.php file as well. */
// require 'C:\xampp\league-oauth2\vendor\autoload.php';

/* Set the script time zone to UTC. */
//date_default_timezone_set('Etc/UTC');

/* Information from the XOAUTH2 configuration. */
$google_email = 'monishchhadwa777@gmail.com';
$oauth2_clientId = '356685291152-seqj6raas6f4fhdbrb495arcmcg7nu7r.apps.googleusercontent.com';
$oauth2_clientSecret = 'JlN4Fyvnz6oxG2R-NiGUtSYN';
$oauth2_refreshToken = '1/aLctfHoCWHUuhk9AuwMB4WJgTR1kbCpi_5b2Psvl4Oo';

$mail = new PHPMailer(TRUE);

try {

    $mail->setFrom($google_email, 'Tech Shack');
    $mail->addAddress('monish.c@media.net', 'Jay Gala');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Unique Touch Enquiry';
//    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->Body = <<<EOL
<b>Name: </b>{$post['name']}<br/>
<b>Email: </b>{$post['email']}<br/>
EOL;
;
    $mail->isSMTP();
    $mail->Port = 587;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';

    /* Google's SMTP */
    $mail->Host = 'smtp.gmail.com';

    /* Set AuthType to XOAUTH2. */
    $mail->AuthType = 'XOAUTH2';

    /* Create a new OAuth2 provider instance. */
    $provider = new Google(
        [
            'clientId' => $oauth2_clientId,
            'clientSecret' => $oauth2_clientSecret,
            'accessType' => 'offline',
        ]
    );

    /* Pass the OAuth provider instance to PHPMailer. */
    $mail->setOAuth(
        new OAuth(
            [
                'provider' => $provider,
                'clientId' => $oauth2_clientId,
                'clientSecret' => $oauth2_clientSecret,
                'refreshToken' => $oauth2_refreshToken,
                'userName' => $google_email,
            ]
        )
    );

    /* Finally send the mail. */
    $mail->send();
} catch (Exception $e) {
    echo $e->errorMessage();
} catch (\Exception $e) {
    echo $e->getMessage();
}