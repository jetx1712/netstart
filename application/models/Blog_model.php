<?php
class Blog_model extends CI_Model {

  public $table = 'posts';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_posts(){
    $this->db->select('p.id, p.title, p.text,p.sub_text, p.url_friendly, p.img, a.name');
    $this->db->from('posts as p');
    $this->db->join('admin as a', 'p.author = a.id');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_post($id){
    $this->db->select('p.id, p.title, p.text, p.url_friendly, p.category,p.reading_time, p.tags, p.img, p.register,c.description,p.sub_text');
    $this->db->from('category as c');
    $this->db->join('posts as p','p.category = c.id');
    $this->db->where('p.url_friendly', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_categories(){
    $this->db->select('id, description,url_friendly');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result();
  }
  public function fetch_category($id){
    $this->db->select('id, description');
    $this->db->from('category');
    $this->db->where('url_friendly',$id);
    $query = $this->db->get();
    return $query->row();
  }
  public function fetch_posts_category($id){
    $this->db->select('p.id, p.title, p.text, p.sub_text, p.url_friendly, p.img, a.name, c.description');
    $this->db->from('posts as p');
    $this->db->join('admin as a', 'p.author = a.id');
    $this->db->join('category as c', 'p.category = c.id');
    $this->db->where('c.url_friendly',$id);
    $query = $this->db->get();
    return $query->result();
  }
  public function insert_lead($posts){
    $data = array(
      'name' => $posts['name'],
      'email' => $posts['email'],
    );
    $this->db->insert('lead', $data);
    return $this->db->insert_id();
  }

  




}