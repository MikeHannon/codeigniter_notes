<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notes extends CI_Model {

public function index(){
  $query = "SELECT * FROM notes";
  return $this->db->query($query)->result_array();
}
public function create($data){
  $query = "INSERT into notes (title, created_at, updated_at) values (?, NOW(), NOW())";
  $values = array($data['title']);
  $this->db->query($query,$values);
}

public function delete($id){
    $query = "DELETE from notes where id = ?";
    $values = array($id);
    $this->db->query($query,$values);
}

public function update($data,$id){
    $query = "UPDATE notes SET content = ?, updated_at= NOW() where id = ?";
    $values = array($data['content'],$id);
    $this->db->query($query,$values);
}
}
