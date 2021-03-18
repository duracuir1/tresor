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
    $mail->Body = "<h3>Chambre : $room <br> Debut : $checkin <br>Fin: $checkout <br>Adulte : $adult <br>
    Enfants : $child <br>Prenom: $fname <br>Nom : $lname <br>
    Email : $email <br>Telephone: $phone <br>Adresse 1 : $address1 <br>
    Adresse 2 : $address2 <br>Region: $state <br>Ville : $city <br>
    Pays : $country <br>Code postal: $zipcode <br>Exigences : $requirements
    </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Envoyé! Merci de nous avoir contacté.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>