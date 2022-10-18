<?php
class places_model extends CI_Model {

  public $table = 'places';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts){
    $data = array(
      'cep' => $posts['cep'],
      'address' => $posts['address'],
      'number' => $posts['number'],
      'complement' => $posts['complement'],
      'neighborhood' => $posts['neighborhood'],
      'city' => $posts['city'],
      'state' => $posts['state'],
      'operating_hour' => $posts['opening_hours'],
    );
    $this->db->insert('places', $data);
    return $this->db->insert_id();
  }

  public function insert_img($filename, $place){
    $data = array(
      'id_place' => $place,
      'img' => $filename,
    );
    $this->db->insert('gallery_places', $data);
    return $this->db->insert_id();
  }

  public function update_place($posts, $id){
    $this->db->set('cep', $posts['cep']);
    $this->db->set('address', $posts['address']);
    $this->db->set('number', $posts['number']);
    $this->db->set('complement', $posts['complement']);
    $this->db->set('neighborhood', $posts['neighborhood']);
    $this->db->set('city', $posts['city']);
    $this->db->set('state', $posts['state']);
    $this->db->set('operating_hour', $posts['opening_hours']);
    $this->db->where('id', $id);
    $this->db->update('places');
  }



  public function update_img($posts, $filename, $id, $i){
    $this->db->set('img', $filename);
    $this->db->where('id', $posts['id_img'][$i]);
    $this->db->where('id_place', $id);
    $this->db->update('gallery_places');
  }

  public function fetch_places(){
    $this->db->select('id, city, email, operating_hour');
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


  public function fetch_gallery_places($id){
    $this->db->select('id, img');
    $this->db->from('gallery_places');
    $this->db->where('id_place', $id);
    $query = $this->db->get();
    return $query->result();
  }

  

}
