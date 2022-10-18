<?php
class History_timeline_model extends CI_Model {

  public $table = 'history_timeline';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts){
    $data = array(
      'title' => $posts['title'],
      'year' => $posts['year'],
    );
    $this->db->insert('history_timeline', $data);
    return $this->db->insert_id();
  }

  public function update($posts,$id){
    $this->db->set('title', $posts['title']);
    $this->db->set('year', $posts['year']);
    $this->db->where('id', $id);
    $this->db->update('history_timeline');
  }

  public function fetch_years(){
    $this->db->select('id,title, year');
    $this->db->order_by('year','ASC');
    $this->db->from('history_timeline');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_year($id){
    $this->db->select('id,title, year');
    $this->db->from('history_timeline');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }
  

}
