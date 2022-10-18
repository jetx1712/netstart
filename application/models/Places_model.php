<?php
class places_model extends CI_Model {

  public $table = 'places';

  public function __construct(){
      parent::__construct();
  }


  public function fetch_places(){
    $this->db->select('id, cep, address, number, complement, neighborhood, city, state, email, operating_hour');
    $this->db->from('places');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_place($id){
    $this->db->select('id, cep, address, number, complement, neighborhood, city, state, email, operating_hour');
    $this->db->from('places');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_phone_place($id){
    $this->db->select('id, phone');
    $this->db->from('phones_places');
    $this->db->where('id_place', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_gallery_places(){
    $this->db->select('id, img,id_place');
    $this->db->from('gallery_places');
   // $this->db->where('id_place', $id);
    $query = $this->db->get();
    return $query->result();
  }


}
