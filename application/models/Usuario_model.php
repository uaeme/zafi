<?php

class Usuario_model extends CI_Model {

	public function _construct()
	{
		parent::_construct();
		$this->load->database();
	}


			public function login($username,$password,$tipo)
		{
			//$this->load->database();
				//$this->db->w
				if($tipo=='cliente')
				{
					$this->db->where('user',$username);
					$this->db->where('pass',$password);
					//$this->db->where('tipo',$tipo);
					//$this->db->where('user','angel');
					//$this->db->where('pass','angel');
					$q = $this->db->get('cliente');
				}
				else {
					$this->db->where('user',$username);
					$this->db->where('pass',$password);
					$this->db->where('tipo',$tipo);
					//$this->db->where('user','angel');
					//$this->db->where('pass','angel');
					$q = $this->db->get('administrador');
				}

				//$this->session->set_userdata('user',$q->);

				if ($q->num_rows()>0)
				{
					foreach ($q -> result() as $fila):
							$data[]=$fila;
					endforeach;
					$this->session->set_userdata('id_user',$fila->id_cliente);
					$this->session->set_userdata('coordenadas',$fila->domicilio);
					return true;
				}
				else
				{
					return false;
				}
		}

		public function productos()
		{
			//global $fila;
			$q = $this->db->get('producto');
			if ($q->num_rows()>0)
			{
				foreach ($q -> result() as $fila):
						$data[]=$fila;
				endforeach;
				return $data;
				//$this->session->set_userdata('coordenadas1',$data[0]->nombre);


			}
			else
			{
				return false;
			}
		}

		public function vertodo()
		{
			$this->db->select('P.id_pedido,P.cantidad,P.hora_pedido,P.estado,p.nombre,P.destino');
			$this->db->from('pedido P');
			$this->db->join('producto p','P.id_producto = p.id_producto');
			$this->db->where('id_cliente=',$this->session->userdata('id_user'));
			$query = $this->db->get();
			if($query->num_rows()>0)
			{
				return $query;
			}else {
				return false;
			}
		}

		function eliminar($id)
		{
			$this->db->where('id_pedido',$id);
			$this->db->delete('pedido');
		}

		function editar($id)
		{
			$this->db->where('id_pedido', $id);
			$query = $this->db->get('pedido');
			if($query->num_rows()>0)
			{
				return $query;
			}else {
				return false;
			}

		}
		function editarDatos($id, $data)
		{
				$this->db->where('id_pedido',$id);
				$this->db->update('pedido',$data);
		}

		function VerUser()
		{
			//SELECT * FROM `cliente` WHERE id_cliente= '2'
			/*SELECT id_cliente,nombre,paterno,materno,user,pass,telefono,email,tipo_cliente
FROM cliente
WHERE id_cliente='2'*/
			$this->db->select('id_cliente,nombre,paterno,materno,user,pass,telefono,email,tipo_cliente');
			$this->db->from('cliente');
			//$this->db->where('user=',$this->session->userdata('username'));
			$this->db->where('id_cliente=',$this->session->userdata('id_user'));
			$query = $this->db->get();
			if($query->num_rows()>0)
			{
				return $query;
			}else {
				return false;
			}

		}
		function editarUser($id, $data)
		{
				$this->db->where('id_cliente',$id);
				$this->db->update('cliente',$data);
		}


}
