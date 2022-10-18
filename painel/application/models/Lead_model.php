<?php
class Lead_model extends CI_Model {

  public $table = 'lead';

  public function __construct(){
      parent::__construct();
  }



  public function fetch_leads(){
    $this->db->select('name, email');
    $this->db->from('lead');
    $query = $this->db->get();
    return $query->result();
  }


  

}
