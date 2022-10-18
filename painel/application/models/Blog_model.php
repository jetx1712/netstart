<?php
class Blog_model extends CI_Model {

  public $table = 'posts';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts, $img){
    $data = array(
      'title' => $posts['blog_title'],
      'text' => $posts['text_blog'],
      'sub_text' => $posts['sub_text'],
      'url_friendly' => $posts['url_friendly'],
      'category' => $posts['category'],
      'reading_time' => $posts['reading_time'],
      'tags' => $posts['tags'],
      'author' => $_SESSION['user']['id'],
      'img' => $img,
    );
    $this->db->insert('posts', $data);
    return $this->db->insert_id();
  }

  public function insert_category($posts){
    $data = array(
      'description' => $posts['description'],
      'url_friendly' => $posts['url_friendly'],
    );
    $this->db->insert('category', $data);
    return $this->db->insert_id();
  }

  public function update_post($posts, $img, $id){
    $this->db->set('title', $posts['blog_title']);
    $this->db->set('text', $posts['text_blog']);
    $this->db->set('sub_text', $posts['sub_text']);
    $this->db->set('url_friendly', $posts['url_friendly']);
    $this->db->set('category', $posts['category']);
    $this->db->set('reading_time', $posts['reading_time']);
    $this->db->set('tags', $posts['tags']);
    if ($img != 'store-img.jpg') {
      $this->db->set('img', $img);
    }
    $this->db->where('id', $id);
    $this->db->update('posts');
  }

  public function update_category($posts){
    $this->db->set('description', $posts['edit_description']);
    $this->db->set('url_friendly', $posts['url_friendly']);
    $this->db->where('id', $posts['id_category']);
    $this->db->update('category');
  }

  public function fetch_posts(){
    $this->db->select('p.id, p.title, p.text,p.sub_text, p.url_friendly, p.category,
    p.reading_time, p.tags, p.img, p.register, a.name');
    $this->db->from('posts as p');
    $this->db->join('admin as a', 'p.author = a.id');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_post($id){
    $this->db->select('id, title, text, sub_text ,url_friendly, category, reading_time, tags, img, register');
    $this->db->from('posts');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_category(){
    $this->db->select('id, description,url_friendly');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result();
  }


}
