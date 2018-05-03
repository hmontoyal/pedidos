<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitudes extends MY_Controller {

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
		if( $this->require_min_level(EJECUTIVE_LEVEL) )
		{

			$states = $this->global_model->fetchStates();
			$this->template->set('title', 'Administrador de Pedidos (OC)');
			$this->template->set('page_header', 'Administrador de Pedidos (OC)');
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
               			 'pages/solicitudes/index.js'));
			$this->template->load('default_layout', 'contents' , 'solicitudes/index', array('states' => $states));
	     }
	}

	public function listar_solicitudes(){
		if($this->input->post()){
			 $this->load->model('datatables/solicitudes_model', 'solicitudes');
			 $estado = $this->input->post('estado');

			 switch ($estado) {
			 	case '0':
			 		 $list = $this->solicitudes->get_datatables('state = 0');
			 		break;
			 	case '1':
			 		 $list = $this->solicitudes->get_datatables('state = 1');
			 		break;
			 	case '2':
			 		 $list = $this->solicitudes->get_datatables('state = 2');
			 		break;
			 	case '3':
			 		 $list = $this->solicitudes->get_datatables('state = 3');
			 		break;
			 	
			 	default:
			 		 $list = $this->solicitudes->get_datatables();
			 		break;
			 }
                 
					        $data = array();
					        $no = $_POST['start'];
					        foreach ($list as $fila) {
					          //var_dump($tareas);
					            $no++;
					            $row = array();
					            $row[] = $fila->id_request;
					            $row[] = $fila->str_state;
					            $row[] = $fila->rut;
					           
					            $row[] = $fila->date;
					            $row[] = strtoupper($fila->nombre_cliente);
					            $row[] = $fila->total_pedido;
					            $row[] = '<a href="'.base_url('solicitudes/detalle/'.$fila->id_request).'" class="btn btn-info">Ver</a>';
					           



					 
					 
					            $data[] = $row;
					        }
					 
					        $output = array(
					                        "draw" => $_POST['draw'],
					                        "recordsTotal" => $this->solicitudes->count_all(),
					                        "recordsFiltered" => $this->solicitudes->count_filtered(),
					                        "data" => $data,
					                );
					        //output to json format
					        echo json_encode($output);

		}
	}


	public function detalle($id){

		$this->template->set('title', 'Resumen Pedido (OC)');

		$details = $this->global_model->getDetail($id);
		$info = $this->global_model->getInfo($id);

		$this->template->set('page_header', 'Detalle de Pedido');
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
               			 'pages/solicitudes/detalle.js'));
		$this->template->load('default_layout', 'contents' , 'solicitudes/detalle', array('details' => $details, 'info' => $info));
	}


	public function confirmar(){
		header('Content-Type: application/json');
		if($this->input->post()){
			$id= $this->input->post('id');
			$this->load->model('request_model', 'request');
			echo json_encode($this->request->confirm($id));
		}


	}

	
}
