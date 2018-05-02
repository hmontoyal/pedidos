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

class Clientes extends MY_Controller{

	public function index(){
		$states = $this->global_model->fetchStates();
			$this->template->set('title', 'Administrador de Clientes');
			$this->template->set('page_header', 'Administrador de Clientes');
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
               			 'pages/clientes/index.js'));
			$this->template->load('default_layout', 'contents' , 'clientes/index');
	}

		public function listar_clientes(){
		if($this->input->post()){
			 $this->load->model('datatables/clientes_model', 'clientes');
                  $list = $this->clientes->get_datatables();
					        $data = array();
					        $no = $_POST['start'];
					        foreach ($list as $fila) {
					          //var_dump($tareas);
					            $no++;
					            $row = array();
					            $row[] = strtoupper($fila->id);
					            $row[] = strtoupper($fila->rut);
					            $row[] = strtoupper($fila->commercial_name);
					            $row[] = strtoupper($fila->calle);
					            $row[] = strtoupper($fila->numero_calle);

					            
					            
					            $row[] = '<button class="btn btn-sm btn-warning item-edit" data-id="'.$fila->id.'">Editar</button> <button class="btn btn-sm btn-danger item-delete" data-id="'.$fila->id.'">Estado</button>';
					           



					 
					 
					            $data[] = $row;
					        }
					 
					        $output = array(
					                        "draw" => $_POST['draw'],
					                        "recordsTotal" => $this->clientes->count_all(),
					                        "recordsFiltered" => $this->clientes->count_filtered(),
					                        "data" => $data,
					                );
					        //output to json format
					        echo json_encode($output);

		}
	}


	public function html(){
		if($this->input->post()){
			$id = $this->input->post('id');
			$prod = $this->clientes_model->find($id);
			$this->load->view('clientes/html', array('prod' => $prod));
		}
	}

	public function update(){
		header('Content-Type: application/json');
		if($this->input->post()){
			$id = $this->input->post('id');
			$name = $this->input->post('commercial_name');
			$calle = $this->input->post('calle');
			$numero_calle = $this->input->post('numero_calle');
			echo json_encode($this->clientes_model->update($id, array('commercial_name'=> $calle, 'calle' => $numero_calle, 'numero_calle' => $stock, 'updated' => date('Y-m-d H:i:s'))));
				
			
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

	


}
