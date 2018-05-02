<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dulces_model extends Datatables_Model {


protected $table = 'sweets';
protected $column_order = array('id','codigo','name','stock','price'); //set column field database for datatable orderable
protected $column_search = array('id','codigo','name','stock','price'); //set column field database for datatable searchable 
protected $order = array('id' => 'desc'); // default order 


public function __construct(){
    parent::__construct();
}

}
