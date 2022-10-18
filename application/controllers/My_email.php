<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  * @author Lucas AC <lucas_alves_lbas@hotmail.com>
  * @copyright 2020 - JL TECNO - Soluções para Web <http://jltecno.com.br>
**/

class My_email extends CI_Controller {
  public function __construct(){
		parent::__construct();

    // $this->load->library("session");
    // $this->load->model("test_model");
    $this->load->model('my_email_model');

	}

	public function send_lead(){
    $this->session->set_userdata('is_close_modal', 'true');

    $posts = $this->security->xss_clean($this->input->post());
    if ($posts['dados'][0] == "") {
      // echo "não enviou";
    }else{
      $title = "Novo lead";
      $message = "<h3>Olá, recebemos mais um lead via tela de bloqueio inicial do site.<br><br>
      Segue dados do lead. <br><br>
      Cidade: ".$posts['dados'][0]." <br>
      Lead: ".$posts['dados'][1]." <br>
      Telefone: ".$posts['dados'][2]." <br>
      </h3> <br>
      <span style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);
      // echo "enviou";
    }
  }
  public function contact_us(){
    if (isset($_POST['contact_us'])) {

      $posts = $this->security->xss_clean($this->input->post());

      $title = "Fale conosco";
      $message = "<h3>Olá, recebemos mais um lead  via página fale conosco do site.<br><br>
      Segue dados do lead. <br><br>
      Lead: ".$posts['name']." <br>
      Telefone: ".$posts['tel']." <br>
      Email: ".$posts['email']." <br>
      Mensagem: ".$posts['message']."<br>
      </h3><br>
      <span font-size='20px' style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);
      $error = array();
			$error['error']['error_string']	= 'E-mail enviado com sucesso, enviado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
      $this->session->set_flashdata($error);
		}
		redirect(base_url().'fale-conosco');
  }

  public function we_call_you(){

    if (isset($_POST['we_call_you'])) {

      $posts = $this->security->xss_clean($this->input->post());

      $title = "Fale conosco";
      $message = "<h3>Olá, recebemos mais um lead via Home - Nós ligamos para você.
      <br><br>
      Segue dados do lead.
      <br><br>
      Lead: ".$posts['name']."
       <br>
       Email: ".$posts['email']."
       <br>
       Telefone1: ".$posts['tel1']."
       <br>
      Telefone2: ".$posts['tel2']."
      <br>
       Cidade: ".$posts['city']."
       <br>
       Bairro: ".$posts['neighborhood']."
       <br>
       <br>
       Melhor horário para ligação: ".$posts['opening_hours']."
      </h3>
      <br>
      <span font-size='30px' style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);
      $error = array();
			$error['error']['error_string']	= 'E-mail enviado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
      $this->session->set_flashdata($error);
		}
		redirect(base_url().'home');

  }



  public function contract(){
    if (isset($_POST['contract'])) {

      $posts = $this->security->xss_clean($this->input->post());

      $title = "Novo cliente";
      $message = "<h3>Olá, recebemos mais um lead via pagina de contrato.
      <br><br>
      Segue dados do lead.
      <br><br>
      Lead: ".$posts['name']."
       <br>
       CPF: ".$posts['cpf']."
       <br>
       Celular: ".$posts['phone']."
       <br>
       Email: ".$posts['email']."
       <br>
       <h2>Endereço de instalação</h2>
       <br>
       CEP: ".$posts['cep']."
       <br>
       street: ".$posts['street']."
      <br>
      Number: ".$posts['number']."
       <br>
       Complemento: ".$posts['complement']."
       <br>
       Bairro: ".$posts['neighborhood']."
       <br>
       Cidade: ".$posts['city']."
       <br>
       UF: ".$posts['uf']."
       <br>
       <h2>Plano escolhido</h2> - ".$posts['plan_choiced']."
       <h2>Valor a pagar</h2> - ".$posts['price']."
       <br>
       <h2>Pagamento</h2>
       <br>
       Meio de pagamento: ".$posts['payment_method']."
       <br>
       Melhor dia para o vencimento: ".$posts['expiration_day']."

      </h3>
      <br>
      <span font-size='30px' style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);
      $error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
      $this->session->set_flashdata($error);
		}
		redirect(base_url().'bemVindo');

	}

  public function black_friday(){
    // var_dump($this->input->post()); die;
    if (isset($_POST['name'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $title = "Black friday lead";
      $message = "<h3>Olá, recebemos mais um lead  via página da black friday.<br><br>
      Segue dados do lead. <br><br>
      Lead: ".$posts['name']." <br>
      Telefone: ".$posts['phone']." <br>
      </h3><br>
      <span font-size='20px' style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);

      return true;
    }
  }

  public function christmas(){
    // var_dump($this->input->post()); die;
    if (isset($_POST['name'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $title = "Natal Premiado lead";
      $message = "<h3>Olá, recebemos mais um lead via página de Natal Premiado.<br><br>
      Segue dados do lead. <br><br>
      Nome: ".$posts['name']." <br>
      Telefone: ".$posts['phone']." <br>
      Cidade: ".$posts['city']." <br>
      Provedor Atual: ".$posts['internet_provider']." <br>
      </h3><br>
      <span font-size='20px' style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);

      return true;
    }
  }

  public function indicate(){
    // var_dump($this->input->post()); die;
    if (isset($_POST['name'])) {
      $posts = $this->security->xss_clean($this->input->post());

      $title = "Indique e ganhe";
      $message = "<h3>Olá, recebemos mais um lead via página Indique e ganhe.<br><br>
      Segue dados do lead. <br><br>
      Nome: ".$posts['name']." <br>
      Indicação: ".$posts['indicated']." <br>
      Telefone: ".$posts['phone']." <br>
      Grau de parentesco: ".$posts['kinship']." <br>
      </h3><br>
      <span font-size='20px' style='color: #e56;'>E-mail automático, por favor, não responda.</span>";

      $this->my_email_model->send_email($title, $message);

      redirect(base_url());
    }
  }

}
