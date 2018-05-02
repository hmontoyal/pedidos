<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Community Auth - Examples Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Sweets extends MY_Controller{

	public function index(){
		$states = $this->global_model->fetchStates();
			$this->template->set('title', 'Administrador de Productos');
			$this->template->set('page_header', 'Administrador de Productos');
			$this->template->set('css', array(
				        'vendor/datatables-plugins/dataTables.bootstrap.css',
                        'vendor/datatables-responsive/dataTables.responsive.css',
                        'vendor/clockpicker/dist/bootstrap-clockpicker.css',
                         'vendor/switch/bootstrap-switch.min.css',
                         'custom.css'));
			$this->template->set('scripts', array(
				         'vendor/datatables/js/jquery.dataTables.min.js',
                         'vendor/datatables-plugins/dataTables.bootstrap.min.js',
                         'vendor/datatables-responsive/dataTables.responsive.min.js',
                         'vendor/datatables-responsive/responsive.bootstrap.min.js',
                         'vendor/clockpicker/dist/bootstrap-clockpicker.js',
                         'vendor/confirmation/bootstrap-confirmation.js',
                         'vendor/switch/bootstrap-switch.min.js',
                         //buttons js
                         'vendor/datatables-plugins/dataTables.buttons.min.js',
               'vendor/datatables-plugins/buttons.bootstrap.min.js',
                         'vendor/datatables-plugins/buttons.flash.min.js',
                         'vendor/datatables-plugins/jszip.min.js',
                         'vendor/datatables-plugins/pdfmake.min.js',
                         'vendor/datatables-plugins/vfs_fonts.js',
                         'vendor/datatables-plugins/buttons.html5.min.js',
                         'vendor/datatables-plugins/buttons.print.min.js',
               			 '../init_tables.js',
               			 'pages/sweets/index.js'));
			$this->template->load('default_layout', 'contents' , 'sweets/index');
	}

		public function listar_dulces(){
		if($this->input->post()){
			 $this->load->model('datatables/dulces_model', 'sweets');
                  $estado = $this->input->post('estado');
			  switch ($estado) {
			  	case '1':
			  		# code...
			  	    $list = $this->sweets->get_datatables('state = 1');
			  		break;
			  	case '2':
			  	    $list = $this->sweets->get_datatables('state = 0');
			  	    break;
			  	
			  	default:
			  		$list = $this->sweets->get_datatables();
			  		break;
			  }
					        $data = array();
					        $no = $_POST['start'];
					        foreach ($list as $fila) {
					          //var_dump($tareas);
					            $no++;
					            $row = array();
					            $row[] = strtoupper($fila->id);
					            $row[] = strtoupper($fila->codigo);
					            $row[] = strtoupper($fila->name);
					            $row[] = strtoupper($fila->stock);
					            $row[] = strtoupper($fila->price);
					            
					            if($fila->state == 0){
					            	$row[] = '<button class="btn btn-sm btn-warning item-edit" data-id="'.$fila->id.'">Editar</button> <button class="btn btn-sm btn-danger item-delete" data-id="'.$fila->id.'">Habilitar</button>';
					            }else{
					            	$row[] = '<button class="btn btn-sm btn-warning item-edit" data-id="'.$fila->id.'">Editar</button> <button class="btn btn-sm btn-success item-delete" data-id="'.$fila->id.'">Deshabilitar</button>';
					           
					            }




					 
					 
					            $data[] = $row;
					        }
					 
					        $output = array(
					                        "draw" => $_POST['draw'],
					                        "recordsTotal" => $this->sweets->count_all(),
					                        "recordsFiltered" => $this->sweets->count_filtered(),
					                        "data" => $data,
					                );
					        //output to json format
					        echo json_encode($output);

		}
	}


	public function html(){
		if($this->input->post()){
			$id = $this->input->post('id');
			$prod = $this->sweets_model->find($id);
			$this->load->view('sweets/html', array('prod' => $prod));
		}
	}

	public function update(){
		header('Content-Type: application/json');
		if($this->input->post()){
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$price = $this->input->post('price');
			$stock = $this->input->post('stock');
			echo json_encode($this->sweets_model->update($id, array('name'=> $name, 'price' => $price, 'stock' => $stock, 'updated' => date('Y-m-d H:i:s'))));
				
			
		}
	}

	public function delete(){
		header('Content-Type: application/json');
		if($this->input->post()){
			$id = $this->input->post('id');

			echo json_encode($this->sweets_model->delete($id));
				
			
		}
	}

	public function crear(){
		header('Content-Type: application/json');
		if($this->input->post()){
			$name = $this->input->post('nombre');
			$precio = $this->input->post('precio');
			$stock = $this->input->post('stock');

			echo json_encode($this->sweets_model->create(array('name' => $name, 'price' => $precio, 'stock' => $stock)));
				
			
		}
	}

		public function disable(){
		header('Content-Type: application/json');
		if($this->input->post()){
			$id = $this->input->post('id');
			echo json_encode($this->sweets_model->disable($id));
		}

	}


}
