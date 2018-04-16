<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Solicitudes_model extends Datatables_Model {


protected $table = 'requests_view';
protected $column_order = array('id_request','rut','str_state','date', 'state', 'nombre_cliente', 'iscommercial', 'commercial_name', 'address', 'email', 'phone', 'total_pedido'); //set column field database for datatable orderable
protected $column_search = array('id_request','rut','str_tate','date', 'state', 'nombre_cliente', 'iscommercial', 'commercial_name', 'address', 'email', 'phone', 'total_pedido'); //set column field database for datatable searchable 
protected $order = array('id_request' => 'desc'); // default order 


public function __construct(){
    parent::__construct();
}

}
