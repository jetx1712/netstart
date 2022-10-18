<?php
class plans_model extends CI_Model {

  public $table = 'plans';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_plans(){
    $this->db->select('id, title, speed, upload, amount, url_friendly,loyalty_discount, situation');
    $this->db->from('plans');
    $this->db->where('situation', '1');
    $this->db->order_by('speed', 'asc');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_itens_plans(){
    $this->db->select('i.description, ip.id_plans, i.img');
    $this->db->from('itens_plans as ip');
    $this->db->join('itens as i', 'ip.id_item = i.id');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_plan($id){
    $this->db->select('id, speed, upload, amount,loyalty_discount, situation');
    $this->db->from('plans');
    $this->db->where('url_friendly', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_items_recommended($id){
    $this->db->select('pir.id as id_recommended, pir.id_ideal_plan, pir.recommended,
    p.title, p.speed, p.upload, p.url_friendly, p.amount, p.frequency, p.situation, p.description
    ');
    $this->db->from('plans_items_recommended as pir');
    $this->db->join('ideal_plan as ip', 'pir.id_ideal_plan = ip.id');
    $this->db->join('plans as p', 'ip.id_plan = p.id');
    $this->db->where('pir.recommended', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_items_recommended_persons($qtdPersons){
    $this->db->select('p.title, p.url_friendly');
    $this->db->from('ideal_plan as ip');
    $this->db->join('plans as p', 'ip.id_plan = p.id');
    $this->db->where('ip.people', $qtdPersons);
    $query = $this->db->get();
    return $query->row();
  }

}
