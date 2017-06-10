<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

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
		$this->load->model('Usuario_model');
		$this->Usuario_model->productos();
		if ($this->session->userdata('user')) {

			$this->load->view('/home/pedido');
		}else {
			# code...
			redirect('home');
		}


	}

	public function vistaPedidos()
	{
		$this->load->model('Usuario_model');
		$data = array(
			'enlaces' => $this->Usuario_model->vertodo()
		);
		if ($this->session->userdata('user')) {

			$this->load->view('/home/ver_pedido',$data);
		}else {
			# code...
			redirect('home');
		}

	}

    public function insertar_pedido()
    {
        //if (isset($_POST['password']) && isset($_POST['username']) && isset($_POST['nombre']) )
      //  {

            $pedido = array(
            'id_producto' => $_POST['producto'],
            'cantidad' => $_POST['cantidad'],
            'hora_pedido' => $_POST['date'],
            'destino' => $_POST['domicilio'],
						'cord_dest'=>$_POST['coordenadas'],
            'estado' => '0',
            'id_cliente' => $this->session->userdata('id_user'),

                                  );
            $this->load->model('Cliente_model');
            if($this->Cliente_model->insertar_pedido($pedido))
            {
              redirect('home');
            }
            else {
              redirect('registro#bad');
          //  }
        }


    }

		public function eliminar()
		{
				$this->load->model('Usuario_model');
				$id= $this->uri->segment(3);
				$this->Usuario_model->eliminar($id);
				redirect('home');
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

		function editar_pedido()
		{
			$id = $this->uri->segment(3);
			$data=array(
				'id_pedido'=>$this->input->post('id_pedido', true),
				'cantidad'=>$this->input->post('cantidad', true),
				'hora_pedido'=>$this->input->post('date', true),
				'estado'=>$this->input->post('estado', true),
				'id_producto'=>$this->input->post('producto', true),
				'destino'=>$this->input->post('domicilio', true),
				'id_cliente'=>$this->input->post('id_cliente', true),
				'cord_dest'=>$this->input->post('coordenadas', true)
			);
			$this->load->model('Usuario_model');
			$this->Usuario_model->editarDatos($id,$data);
			redirect('home');
		}

}
