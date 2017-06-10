<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

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
    //echo "Hola mundo";
    //$this->load->view('home');


	}
	public function reg()
	{
		$this->load->view('/home/registro');
	}

    public function insertar_cliente()
    {
        //if (isset($_POST['password']) && isset($_POST['username']) && isset($_POST['nombre']) )
      //  {
            $cliente = array(
            'nombre' => $_POST['nombre'],
            'paterno' => $_POST['paterno'],
            'materno' => $_POST['materno'],
            'user' => $_POST['username'],
            'pass' => $_POST['password'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['correo'],
            //'domicilio' => $_POST['coordenadas'],
            'tipo_cliente' => "1",
                                  );
            $this->load->model('Cliente_model');
            if($this->Cliente_model->insertar_cliente($cliente))
            {
              //redirect('home');
							//
							header ("Location: ".base_url());
							echo "<meta http-equiv='Refresh' content='2;url='".base_url();
							//header("Location: https://mydomain.com/myLoginAdress/");

							//return true;
            }
            else {
              redirect('registro#bad');
          //  }
        }


    }

		public function editar()
		{
			$this->load->model('Usuario_model');
			//$this->Usuario_model->productos();
			$id= $this->uri->segment(3);
			$EditarP = $this->Usuario_model->editar($id);
			if($EditarP != false)
			{
				foreach($EditarP->result() as $row)
				{
					$id_pedido=$row->id_pedido;
					$cantidad= $row->cantidad;
					$hora_pedido= $row->hora_pedido;
					$estado=$row->estado;
					$id_cliente= $row->id_cliente;
					$id_producto = $row->id_producto;
					$destino=$row->destino;
					$cord_dest=$row->cord_dest;
				}
				$data=array(
					'id' =>$id,
					'cantidad'=>$cantidad,
					'hora_pedido'=>$hora_pedido,
					'estado'=>$estado,
					'id_cliente'=>$id_cliente,
					'id_producto'=>$id_producto,
					'destino'=>$destino,
					'cord_dest'=>$cord_dest
				);

			}else {
				return false;
			}

			$this->load->view('/home/editar_pedido',$data);
		}

		public function VerCliente()
		{
			if ($this->session->userdata('user')) {
				$this->load->model('Usuario_model');
				//$this->Usuario_model->productos();
				$Edit=$this->Usuario_model->VerUser();
				if($Edit != false)
				{
					foreach($Edit->result() as $row)
					{
						$idc=$row->id_cliente;
						$nombrec=$row->nombre;
						$paternoc=$row->paterno;
						$maternoc=$row->materno;
						$userc=$row->user;
						$passc=$row->pass;
						$telefonoc=$row->telefono;
						$emailc=$row->email;
						$tipo_clientec=$row->tipo_cliente;
					}
					$data=array(
						'idc' =>$idc,
						'nombrec'=>$nombrec,
						'paternoc'=>$paternoc,
						'maternoc'=>$maternoc,
						'userc'=>$userc,
						'passc'=>$passc,
						'telefonoc'=>$telefonoc,
						'emailc'=>$emailc,
						'tipo_clientec'=>$tipo_clientec
					);

					$this->load->view('/home/editcliente',$data);
				}else {
					 redirect('home');
				}
			}else {
				# code...
				redirect('home');
			}

		}

		public function VerCliente1()
		{
			if ($this->session->userdata('user')) {
				$this->load->model('Usuario_model');
				//$this->Usuario_model->productos();
				$Edit=$this->Usuario_model->VerUser();
				if($Edit != false)
				{
					foreach($Edit->result() as $row)
					{
						$idc=$row->id_cliente;
						$nombrec=$row->nombre;
						$paternoc=$row->paterno;
						$maternoc=$row->materno;
						$userc=$row->user;
						$passc=$row->pass;
						$telefonoc=$row->telefono;
						$emailc=$row->email;
						$tipo_clientec=$row->tipo_cliente;
					}
					$data=array(
						'idc' =>$idc,
						'nombrec'=>$nombrec,
						'paternoc'=>$paternoc,
						'maternoc'=>$maternoc,
						'userc'=>$userc,
						'passc'=>$passc,
						'telefonoc'=>$telefonoc,
						'emailc'=>$emailc,
						'tipo_clientec'=>$tipo_clientec
					);

					$this->load->view('/home/editcliente',$data);
				}else {
					 redirect('home');
				}
			}else {
				# code...
				redirect('home');
			}


		}

		function editar_user()
		{
			$id = $this->session->userdata('id_user');
			 //id_cliente 	nombre 	paterno 	materno 	user 	pass 	telefono 	email 	tipo_cliente
			$data=array(
				'id_cliente'=>$this->session->userdata('id_user'),
				'nombre'=>$this->input->post('nombre', true),
				'paterno'=>$this->input->post('paterno', true),
				'materno'=>$this->input->post('materno', true),
				'user'=>$this->input->post('username', true),
				'pass'=>$this->input->post('password', true),
				'telefono'=>$this->input->post('telefono', true),
				'email'=>$this->input->post('correo', true),
				'tipo_cliente'=>'1'
			);
			$this->load->model('Usuario_model');
			$this->Usuario_model->editarUser($id,$data);
			redirect('home');
		}

}
