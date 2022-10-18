<?php
class banners_model extends CI_Model {

  public $table = 'banners';

  public function __construct(){
      parent::__construct();
  }

  public function insert($images, $posts){
    $data = array(
      'location' => $posts['location'],
      'description' => $posts['description'],
      'small' => $images['small'],
      'medium' => $images['medium'],
      'big' => $images['big'],
    );
    $this->db->insert('banners', $data);
    return $this->db->insert_id();
  }

  public function update_banner($image, $posts ){
    //if ($image != '') {
      $this->db->set('img', $image);
      $this->db->set('location', $posts['location']);
      $this->db->where('id', $posts['id_banner']);
      $this->db->update('banners');
    //}
  }
  public function delete_banner( $posts ){
      $this->db->where('id', $posts['id_banner']);
      $this->db->delete('banners');
  }

  public function fetch_banners(){
    $this->db->select('id, small, medium, big, location, description');
    $this->db->from('banners');
    $query = $this->db->get();
    return $query->result();
  }

}
