<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function index()
	 {
	





	}
	// 	if( $this->require_min_level(EJECUTIVE_LEVEL) )
	// 	{

	// 		$sweets = $this->sweets_model->_list();
	// 		$clients = $this->clients_model->_list();
	// 		$this->template->set('title', 'Generar Pedido Productos (OC)');
	// 		$this->template->set('page_header', 'Generar Pedido Productos (OC)');
	// 		$this->template->set('css', array());
	// 		$this->template->set('scripts', array('pages/welcome/index.js'));
	// 		$this->template->load('default_layout', 'contents' , 'welcome_message', array('sweets' => $sweets, 'clients' => $clients));
	//      }
	// }

	// public function test(){
	// 	//var_dump($this->sweets_model->_list());

	// }

	// public function sendRequest(){
	// 	header('Content-Type: application/json');
	// 	if($this->input->post()){
			
	// 		$prod = $this->input->post('producto');
	// 		$cant = $this->input->post('cantidad');
	// 		$id_client = $this->input->post('cliente');
	// 		$items = array();
	// 		$i = 0;
 //            foreach ($prod as $row) {
 //            		$data = array('id' => $row, 'cant' => $cant[$i]);
 //            		$items[] = $data;
 //            		$i++;
 //            }

 //            $result = $this->request_model->newRequest($id_client, $items);
             
 //            echo json_encode(array('result' => $result));
	// 	}
	//}
}
