<?php

class Cliente_model extends CI_Model {

	public function _construct()
	{
		parent::_construct();
		$this->load->database();
	}

  public function insertar_cliente($cliente)
  {
    if($this->db->insert('cliente',$cliente))
    {
      return true;
    }
    else {
      return false;
    }
  }

	public function insertar_pedido($pedido)
  {
    if($this->db->insert('pedido',$pedido))
    {
      return true;
    }
    else {
      return false;
    }
  }


}
