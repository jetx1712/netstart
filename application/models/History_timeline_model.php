<?php
class History_timeline_model extends CI_Model {

  public $table = 'history_timeline';

  public function __construct(){
      parent::__construct();
  }


  public function fetch_years(){
    $this->db->select('id,title, year');
    $this->db->order_by('year','ASC');
    $this->db->from('history_timeline');
    $query = $this->db->get();
    return $query->result();
  }

}
