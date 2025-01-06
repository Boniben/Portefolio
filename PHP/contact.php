<link rel="stylesheet" href="../CSS/affichage.css" />



<?php

require_once("../YAML/yaml.php");
$data=yaml_parse_file('../data/contact.yaml');

echo "<h1>".$data["titre"]."</h1>\n";



?>

<?php
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $sum = $num1 + $num2;

        session_start();
        $_SESSION['captcha_result'] = $sum;
?>


<label for="captcha">Quelle est la somme de <?php echo $num1; ?> + <?php echo $num2; ?> ?</label>
<input type="text" id="captcha" name="captcha" required>





<form id="contact" action="contact" method="post">
    <h2>Nom :<input type="text" name="nom" required></h2> 
    <h2>Prénom :<input type="text" name="prénom" required></h2>
    <h2>Entrez votre email :<input type="email" name="email" required></h2>
    <h2>Message :<textarea name="message" required></textarea><input type="submit"></h2>
</form>

<?php
if(!empty($_POST)) {
 
 $mail = new PHPMailer(true);

 try {
     //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth = true;                                   //Enable SMTP authentication
     $mail->Username = 'bboniface@sts-sio-caen.info';             //SMTP username
     $mail->Password = 'Password.1234';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

     //Recipients
     $mail->setFrom('bboniface@sts-sio-caen.info', 'Mailer');
     $mail->addAddress($_POST['to']??'bboniface@sts-sio-caen.info');     //Add a recipient

     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = $_POST['subject']??'Subject';
     $mail->Body = $_POST['body']??'This is the HTML message body <b>in bold!</b>';

     $mail->send();
     echo 'Votre message à bien été envoyé';
 } catch (Exception $e) {
     echo "Ton messsage n'a pas été envoyé: {$mail->ErrorInfo}";
 }
}
?>



<div class="button-page-container">
    
<form action="../index.php" method="post">
    <button type="submit">Retour à la page d'accueil</button>
</form>


</div>