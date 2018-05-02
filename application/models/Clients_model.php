<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Clients_model extends CI_Model {

   private $table = 'clients';

	 public function __construct()
        {
                parent::__construct();
                
        }

    public function save($data){
       $this->db->insert($this->table, $data);
        if ( $this->db->affected_rows() == '1' ) {
                     return TRUE;
                  }
                return FALSE;
}

  public function _list($comercial = false){
    $result = $this->db->get($this->table);
    if($result->num_rows() > 0 ){
      return $result->result();
    }
    return false;
  }

    public function find($id){
    $result = $this->db->get_where($this->table, array('id' => $id));
    if($result->num_rows() > 0 ){
      return $result->row();
    }
    return false;
  }

  public function update($id, $data){
         $this->db->where('id', $id);
         $this->db->update($this->table, $data);
         return ($this->db->affected_rows() > 0);
         
  }

  public function disable($id){
    $query = $this->db->query("UPDATE ".$this->table." SET disabled = IF(disabled=1, 0, 1) where id =".$id.";");
    //$result = $query->result();
    if($this->db->affected_rows() >= 1){
      return true;
    }

    return false;
  }
     

}
