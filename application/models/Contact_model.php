<?php
class Contact_model extends CI_Model {

  public $table = 'contact';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_contacts(){
    $this->db->select('id,phone, wpp, email, facebook,instagram');
    $this->db->from('contact');
    $query = $this->db->get();
    return $query->row();
  }
  
}
