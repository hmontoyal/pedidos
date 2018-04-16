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

     

}
