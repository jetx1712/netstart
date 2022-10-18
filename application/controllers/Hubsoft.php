<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  * @author Lucas AC <lucas_alves_lbas@hotmail.com>
  * @copyright 2020 - JL TECNO - Soluções para Web <http://jltecno.com.br>
**/

class Myemail extends CI_Controller {
  public function __construct(){
		parent::__construct();

    // $this->load->library("session");
    // $this->load->model("test_model");
    $this->load->model('my_email_model');

	}

  public function contract(){
    if (isset($_POST['contract'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://endereco_do_servidor/oauth/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
              "grant_type":"password",
              "client_id":"3",
              "client_secret":"ONe7Ns48Y30tB",
              "username":"teste@teste.com",
              "password":"1234"
      }',
        CURLOPT_HTTPHEADER => array(
          'Content-Type: text/plain'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      echo $response;

      $curl = curl_init();

      // Ver sobre estes dados
      // Id do serviço
      // Meio de pagamento: ".$posts['payment_method']."
      // Melhor dia para o vencimento: ".$posts['expiration_day']."

      $json = '{
        "cep": "'.$posts['cep'].'",
        "servico": {
            "id_servico": 1,
            "valor": "'.$posts['price'].'"
        },
        "cpf_cnpj": "'.$posts['cpf'].'",
        "telefone": "'.$posts['phone'].'",
        "nome_razaosocial": "'.$posts['name'].'",
        "tipo_pessoa": "pf",
        "bairro": "'.$posts['neighborhood'].'",
        "endereco": "'.$posts['street'].', '.$posts['complement'].', '.$posts['city'].'",
        "numero": "'.$posts['number'].'"
      }';

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://endereco_do_servidor/api/v1/integracao/prospecto',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      echo $response;

      $error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
      $this->session->set_flashdata($error);

      redirect(base_url().'bemVindo');
		}
	}
}
