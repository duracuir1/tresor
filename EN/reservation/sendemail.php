<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once '../reservation/phpmailer/Exception.php';
require_once '../reservation/phpmailer/PHPMailer.php';
require_once '../reservation/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $room = $_POST['room-name'];
  $checkin = $_POST['check-in'];
  $checkout = $_POST['check-out'];
  $adult = $_POST['form-adults'];
  $child = $_POST['form-children'];
  $fname = $_POST['first-name'];
  $lname = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address1 = $_POST['address-line1'];
  $address2 = $_POST['address-line2'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $zipcode = $_POST['zip-code'];
  $requirements = $_POST['requirements'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'reservationtresor@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Tresor123'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('reservationtresor@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('reservationtresor@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Reservation Page)';
    $mail->Body = "<h3>Room : $room <br> Check-in : $checkin <br>Check-out: $checkout <br>Adult : $adult <br>
    Children : $child <br>First-name: $fname <br>Name : $lname <br>
    Email : $email <br>Phone: $phone <br>Address line 1 : $address1 <br>
    Address line 2 : $address2 <br>Region: $state <br>Ville : $city <br>
    Country: $country <br>Zip code: $zipcode <br>Requirements : $requirements
    </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message sent! Thnak you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>