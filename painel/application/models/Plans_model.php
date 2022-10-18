<?php
class plans_model extends CI_Model {

  public $table = 'plans';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts){
    $data = array(
      'title' => $posts['title'],
      'speed' => $posts['speed'],
      'upload' => $posts['upload'],
      'loyalty_discount' => $posts['loyalty_discount'],
      'url_friendly' => $posts['url_friendly'],
      'amount' => $posts['amount'],
      'promotional_value' => $posts['promotional_value'],
      'frequency' => $posts['frequency'],
      'description' => $posts['description'],
      'situation' => $posts['situation'],
    );
    $this->db->insert('plans', $data);
    return $this->db->insert_id();
  }

  public function insert_itens_plans($posts, $id_plans){
    foreach ($posts['itens'] as $key => $value) {
      $data = array(
        'id_plans' => $id_plans,
        'id_item' => $value,
      );
      $this->db->insert('itens_plans', $data);
    }
    return $this->db->insert_id();
  }

  public function insert_new_item_plan($posts){
    $data = array(
      'id_plans' => $posts['id_plans'],
      'id_item' => $posts['item'],
    );
    $this->db->insert('itens_plans', $data);
    return $this->db->insert_id();
  }

  public function insert_itens($posts, $image){
    $data = array(
      'description' => $posts['description'],
      'img' => $image,
    );
    $this->db->insert('itens', $data);
    return $this->db->insert_id();
  }

  public function insert_ideal_plan($posts){
    $data = array(
      // 'people' => $posts['people'],
      'id_plan' => $posts['id_plan'],
    );
    $this->db->insert('ideal_plan', $data);
    return $this->db->insert_id();
  }

  public function insert_plans_items_recommended($id_ideal_plan, $posts){
    foreach ($posts['recommended'] as $key => $value) {
      $data = array(
        'id_ideal_plan' => $id_ideal_plan,
        'recommended' => $value,
      );
      $this->db->insert('plans_items_recommended', $data);
    }
  }

  public function update_itens($posts, $image){
    $this->db->set('description', $posts['edit_description']);
    if (isset($image) && $image != "") {
      $this->db->set('img', $image);
    }
    $this->db->where('id', $posts['id_itens']);
    $this->db->update('itens');
  }

  public function update_plan($posts, $id){
    $this->db->set('title', $posts['title']);
    $this->db->set('speed', $posts['speed']);
    $this->db->set('upload', $posts['upload']);
    $this->db->set('url_friendly', $posts['url_friendly']);
    $this->db->set('loyalty_discount', $posts['loyalty_discount']);
    $this->db->set('amount', $posts['amount']);
    $this->db->set('promotional_value', $posts['promotional_value']);
    $this->db->set('frequency', $posts['frequency']);
    $this->db->set('description', $posts['description']);
    $this->db->set('description', $posts['description']);
    $this->db->set('situation', $posts['situation']);
    $this->db->where('id', $id);
    $this->db->update('plans');
  }
  public function update_ideal_plan($posts){
    // $this->db->set('people', $posts['people']);
    $this->db->set('id_plan', $posts['id_plan']);
    $this->db->where('id', $posts['id']);
    $this->db->update('ideal_plan');
  }

  public function delete_item_plan($posts, $isset_item){
    $this->db->where('id', $isset_item->id);
    $this->db->where('id_item', $posts['item']);
    $this->db->where('id_plans', $posts['id_plans']);
    $this->db->delete('itens_plans');
  }

  public function delete_recommended($posts){
    $this->db->where('id', $posts['id']);
    $this->db->delete('plans_items_recommended');
  }

  public function fetch_itens_plans(){
    $this->db->select('id, description, img');
    $this->db->from('itens');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_items_recommended($id_ideal_plan){
    $this->db->select('pir.id as id_recommended, pir.recommended, i.description');
    $this->db->from('plans_items_recommended as pir');
    $this->db->join('items_recommended as i', 'pir.recommended = i.id');
    $this->db->where('pir.id_ideal_plan', $id_ideal_plan);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_plans(){
    $this->db->select('id, title, speed, upload, amount,description, situation, register');
    $this->db->from('plans');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_plan($id){
    $this->db->select('id, title, speed, upload, loyalty_discount,url_friendly, amount, promotional_value, frequency, description, situation, register');
    $this->db->from('plans');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_itens_plan($id){
    $this->db->select('ip.id, ip.id_item, i.img');
    $this->db->from('itens_plans as ip');
    $this->db->join('itens as i', 'ip.id_item = i.id');
    $this->db->where('ip.id_plans', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function isset_itens_plan($posts){
    $this->db->select('ip.id, ip.id_item, i.img');
    $this->db->from('itens_plans as ip');
    $this->db->join('itens as i', 'ip.id_item = i.id');
    $this->db->where('ip.id_item', $posts['item']);
    $this->db->where('ip.id_plans', $posts['id_plans']);
    $query = $this->db->get();
    return $query->row();
  }

  public function fetch_ideal_plans(){
    $this->db->select('i.id, p.speed, p.situation');
    $this->db->from('ideal_plan as i');
    $this->db->join('plans as p', 'i.id_plan = p.id');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_ideal_plan($id){
    $this->db->select('ip.id,  ip.id_plan, p.situation');
    $this->db->from('plans as p');
    $this->db->join('ideal_plan as ip','ip.id_plan = p.id');
    $this->db->where('ip.id', $id);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function fetch_how_use(){
    $this->db->select('id, description');
    $this->db->from('items_recommended');
    $query = $this->db->get()->result();
    return $query;
  }

  public function fetch_how_use_recommended(){
    $this->db->select('id, description');
    $this->db->from('items_recommended');
    $this->db->where('id', $_POST['id']);
    $query = $this->db->get()->row();
    return $query;
  }

}
