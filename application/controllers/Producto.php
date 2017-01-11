<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
    
    public function __construct()     
       {
        parent::__construct();
        $this->load->model('neptuno');
       }
       
    public function index() 
       {
        $data['productos'] = $this->neptuno->get_productos();
        $data['title'] = 'Listado Productos';
        $this->load->view('cabecera', $data);
        $this->load->view('listado_productos', $data);
        $this->load->view('pie');
       }
              
}