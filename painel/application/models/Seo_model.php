<?php
class Seo_model extends CI_Model {

  public $table = 'seo';

  public function __construct(){
      parent::__construct();
  }

  public function insert_seo_pag($posts){
    $data = array(
      'pag' => $posts['pag'],
      'tags' => $posts['tags'],
      'description' => $posts['description'],
    );
    $this->db->insert('seo', $data);
    return $this->db->insert_id();
  }

  public function fetch_seo_pags(){
    $this->db->select('id,pag, tags, description');
    $this->db->from('seo');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function fetch_seo_pag($id){
    $this->db->select('id,pag, tags, description');
    $this->db->from('seo');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function update_seo_pag($posts){
    $this->db->set('pag', $posts['pag']);
    $this->db->set('tags', $posts['tags']);
    $this->db->set('description', $posts['description']);
    $this->db->where('id', $posts['id_seo']);
    $this->db->update('contact');
  }

}
