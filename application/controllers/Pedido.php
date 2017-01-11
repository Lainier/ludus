<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {
    
    public function __construct()     
       {
        parent::__construct();
        $this->load->model('neptuno');
       }
       
    public function index() 
       {
        $data['clientes'] = $this->neptuno->get_clientes();
        $data['title'] = 'Listado Clientes';
        $this->load->view('cabecera', $data);
        $this->load->view('listado_clientes', $data);
        $this->load->view('pie');
       }
       
    public function cliente(){
        $this->load->helper('url');
        $idCliente = $this->uri->segment(3);
        $data['pedidos'] = $this->neptuno->get_pedidos($idCliente);
        $data['title'] = 'Listado Pedidos';
        $this->load->view('cabecera', $data);
        $this->load->view('listado_pedidos', $data);
        $this->load->view('pie');
    }
    
}