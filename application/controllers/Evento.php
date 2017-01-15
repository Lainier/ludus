<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class evento extends CI_Controller {
    
    public function __construct()     
       {
        parent::__construct();
        $this->load->model('ludus');
       }
       
    public function index() 
       {
        $data['usuarios'] = $this->ludus->get_eventos();
        $data['title'] = 'Listado de Eventos';
        $data['active']='usuario';
        $this->load->view('cabecera', $data);
        $this->load->view('listado_eventos', $data);
        $this->load->view('pie');
       }
       
    public function eventos_usuario(){
        $this->load->helper('url');
        $idUsuario= $this->uri->segment(3);
        $eventos_de_usuario = $this->ludus->get_eventos_de_usuario($idUsuario);
        $data['eventos'] = $eventos_de_usuario;
        $data['title'] = 'Listado de Eventos';
        $data['active']='usuario';
        $this->load->view('cabecera', $data);
        $this->load->view('listado_eventos_usuario', $data);
        $this->load->view('pie');
        
    }
    
}