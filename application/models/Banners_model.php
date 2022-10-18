<?php
class banners_model extends CI_Model {

  public $table = 'banners';

  public function __construct(){
      parent::__construct();

  }
  public function fetch_banners_home(){
    $this->db->select('id, small, medium, big, location, description');
    $this->db->from('banners');
    $this->db->where('location','Home');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetch_banners_about_us(){
    $this->db->select('id, small, medium, big, location, description');
    $this->db->from('banners');
    $this->db->where('location','A Conecta');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetch_banners_blog(){
    $this->db->select('id, small, medium, big, location, description');
    $this->db->from('banners');
    $this->db->where('location','Blog');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetch_banners_contact_us(){
    $this->db->select('id, small, medium, big, location, description');
    $this->db->from('banners');
    $this->db->where('location','Fale conosco');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetch_banners_our_plans(){
    $this->db->select('id, small, medium, big, location, description');
    $this->db->from('banners');
    $this->db->where('location','Nossos Planos');
    $query = $this->db->get();
    return $query->result();
  }

}
