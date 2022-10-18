<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Myemail{
	/**
     * @var array
     */

    public function __construct() {
        $this->CI =& get_instance();
        //$this->CI->config->load('myemail');
    }

    /**
     * @param Array $data
     * @return Array
     * @throws \Exception
     */

    private function send_email($title, $message){
    	// Load Composer's autoloader
  		require 'vendor/autoload.php';

  		// Instantiation and passing `true` enables exceptions
  		$mail = new PHPMailer(true);

  		try {
  			 //$mail = new PHPMailer\PHPMailer\PHPMailer();
  			$mail->CharSet = 'UTF-8';
  			 $mail->IsSMTP(); // enable SMTP
  			 //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  			 $mail->SMTPAuth = true; // authentication enabled
  			 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  			 $mail->Host = "mail.jltecno.com.br";
  			 $mail->Port = 465; // or 587
  			 $mail->IsHTML(true);
  			 $mail->Username = "contato@jltecno.com.br";
  			 $mail->Password = "YyVl&rDL*$12";
  			 $mail->SetFrom("contato@jltecno.com.br");
  			 $mail->Subject = $title;
  			 $mail->Body = $message;
  			 $mail->AddAddress('lucas_alves_lbas@hotmail.com');
  		     if(!$mail->Send()) {
  		       //echo "Mailer Error: " . $mail->ErrorInfo;
  		     } else {
  		       //echo "Mensagem enviada com sucesso";
  		     }
  		} catch (Exception $e) {
  		   //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  		}
    }

    public function send_lead(){
      $title = "Novo lead";
      $message = "<h5>Olá, recebemos mais um lead via tela de bloqueio inicial do site.<br>
      Segue dados do lead. <br>
      .</h5> <br>
      <span style='color: #e56;'>E-mail automático, por favor, não responda.</span>";
      $this->send_email($email, $title, $message);
    }
}
