<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Global_model extends CI_Model {


	 public function __construct()
        {
                parent::__construct();
                
        }


  public function fetchStates(){
    $result = $this->db->get('states');
    if($result->num_rows() > 0 ){
      return $result->result();
    }
    return false;
  }

  public function getDetail($id){
    $result = $this->db->get_where('requests_detail_view', array('id_request' => $id));
     if($result->num_rows() > 0 ){
      return $result->result();
    }
    return false;
  }

  public function getInfo($id){
    $result = $this->db->get_where('requests_view', array('id_request' => $id));
     if($result->num_rows() > 0 ){
      return $result->row();
    }
    return false;
  }

    public function findUser($id){
    $result = $this->db->get_where('users', array('user_id' => $id));
    if($result->num_rows() > 0 ){
      return $result->row();
    }
    return false;
  }


  public function updateUser($data){
          $this->db->where('user_id',$data['user_id']);
    $this->db->update('users', $data);
     if($this->db->affected_rows() > 0){
      return true;
     }
    return false;
  }


     

}
