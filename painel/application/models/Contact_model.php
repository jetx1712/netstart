<?php
class Contact_model extends CI_Model {

  public $table = 'contact';

  public function __construct(){
      parent::__construct();
  }

  public function insert_contact($posts){
    $data = array(
      'phone' => $posts['phone'],
      'wpp' => $posts['wpp'],
      'email' => $posts['email'],
      'facebook' => $posts['facebook'],
      'instagram' => $posts['instagram'],
    );
    $this->db->insert('contact', $data);
    return $this->db->insert_id();
  }

  public function fetch_contacts(){
    $this->db->select('id,phone, wpp, email, facebook,instagram');
    $this->db->from('contact');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function fetch_contact($id){
    $this->db->select('id,phone, wpp, email, facebook,instagram');
    $this->db->from('contact');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function update_contact($posts, $id){
    $this->db->set('phone', $posts['phone']);
    $this->db->set('wpp', $posts['wpp']);
    $this->db->set('email', $posts['email']);
    $this->db->set('facebook', $posts['facebook']);
    $this->db->set('instagram', $posts['instagram']);
    $this->db->where('id', $id);
    $this->db->update('contact');
    
  }

}
