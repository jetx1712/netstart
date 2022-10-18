<?php
class Home_model extends CI_Model {

  public $table = 'posts';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_posts(){
    $this->db->select('p.id, p.title, p.text,p.sub_text, p.url_friendly, p.img, a.name');
    $this->db->from('posts as p');
    $this->db->join('admin as a', 'p.author = a.id');
    $this->db->limit(3);
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    return $query->result();
  }
}
