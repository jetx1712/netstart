<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class My_email_model extends CI_Model {

  public function __construct(){
      parent::__construct();
  }

  public function send_email($title, $message){
    /**
     * @param Array $data
     * @return Array
     * @throws \Exception
     */

     // Load Composer's autoloader
     require 'vendor/autoload.php';

     // Instantiation and passing `true` enables exceptions
     $mail = new PHPMailer(true);

     try {
        //$mail = new PHPMailer\PHPMailer\PHPMailer();
       $mail->CharSet = 'UTF-8';
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "cpl04.main-hosting.eu";
        // $mail->Host = "mail.conectafibra.com.br";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "noreply@conectafibra.com.br";
        $mail->Password = "!~U=phFQ,#sZ";
        $mail->SetFrom("noreply@conectafibra.com.br");
        $mail->Subject = "$title";
        $mail->Body = "$message";
        $mail->AddAddress('marketing@conectafibra.com.br');
        // $mail->addCC("edmundo@conectafibra.com.br");
        // $mail->addCC("karoline@conectafibra.com.br");
        // $mail->AddAddress('gs988559@gmail.com'); // só ativar em caso de teste de desenvolvimento
        // $mail->addCC("lucas_alves_lbas@hotmail.com"); // só ativar em caso de teste de desenvolvimento
          if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
          } else {
            echo "Mensagem enviada com sucesso";
          }
     } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
  }


}
