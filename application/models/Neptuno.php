<?php

class Neptuno extends CI_Model {

        public function __construct()
        {       
            parent::__construct();
            $this->load->database();
        }
        
        public function get_clientes($limites = FALSE)
        {
            if ($limites !== FALSE)
              {
                  $this->db->limit($limites['cuantos'],$limites['inicio']);//hay select, from, join, where, ...
              }
              
             $query = $this->db->get('cliente'); //ejecutamos la consulta
             return $query->result(); //devolvemos un array de objetos 
        }
        
        public function get_pedidos($cliente = FALSE)
        {
           if ($cliente !== FALSE)
            {
             $this->db->where('idCliente',$cliente);
            }
            
            $query = $this->db->get('pedido');
            return $query->result();
        }
        public function get_productos($limites = FALSE)
        {
           if ($limites !== FALSE)
              {
                  $this->db->limit($limites['cuantos'],$limites['inicio']);//hay select, from, join, where, ...
              }
             $this->db->order_by('precioE','DESC'); 
             $query = $this->db->get('producto'); //ejecutamos la consulta
             return $query->result(); //devolvemos un array de objetos 
        }
}