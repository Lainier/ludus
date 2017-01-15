<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('ludus');
    }
    
    public function add(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title']='Alta de Usuarios';
        $data['active']='usuario';
        $this->form_validation->set_rules('username', 'nombre de usuario', 'trim|required|alpha_dash|min_length[5]|max_length[12]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password_confirm', 'confirmar password', 'trim|matches[password]');
        $this->form_validation->set_rules('email', 'correo electrónico', 'trim|required|strtolower|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('date_of_birth', 'fecha de nacimiento', 'trim|callback_valid_date[y-m-d,-]');
        $this->form_validation->set_rules('phone', 'teléfono', 'numeric');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('cabecera',$data);
            $this->load->view('usuario/create');
            $this->load->view('pie');
        }
        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
            );
            $this->ludus->add_user($data);
            $this->load->view('usuario/perfil');
        }
    }
    
    public function valid_date($str, $params)
        {
        $CI =&get_instance();
        $params = explode(',', $params);
        $delimiter = $params[1];
        $date_parts = explode($delimiter, $params[0]);

        $di = $this->valid_date_part_index($date_parts, 'd');
        $mi = $this->valid_date_part_index($date_parts, 'm');
        $yi = $this->valid_date_part_index($date_parts, 'y');

        $dre =   "(0?1|0?2|0?3|0?4|0?5|0?6|0?7|0?8|0?9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31)";
        $mre = "(0?1|0?2|0?3|0?4|0?5|0?6|0?7|0?8|0?9|10|11|12)";
        $yre = "([0-9]{4})";
        $red = ''.$delimiter; // escape delimiter for regex
        $rex = "/^[0]{$red}[1]{$red}[2]/";

        $rex = str_replace("[{$di}]", $dre, $rex);
        $rex = str_replace("[{$mi}]", $mre, $rex);
        $rex = str_replace("[{$yi}]", $yre, $rex);

        if (preg_match($rex, $str, $matches))
          {
           // skip 0 as it contains full match, check the date is logically valid
           if (checkdate($matches[$mi + 1], $matches[$di + 1], $matches[$yi + 1]))
             {
              return true;
             }
           else
             {
             // match but logically invalid
               $CI->form_validation->set_message('valid_date', "El campo fecha de nacimiento debe contener una fecha válida.");
               return false;
             }
        }

        $CI->form_validation->set_message('valid_date', "El formato de la fecha no es válido. Usa {$params[0]}");
        return false;
 }

    public function valid_date_part_index($parts, $search)
    {
     for ($i = 0; $i <= count($parts); $i++)
      {
       if ($parts[$i] == $search)
        {
         return $i;
        }
      }
    }
   
    public function index() 
       {
        $data['datos_usuario'] = $this->ludus->get_usuario();
        $data['title'] = 'Perfil del usuario';
        $data['active']='usuario';
        $this->load->view('cabecera', $data);
        $this->load->view('usuario/perfil', $data);
        $this->load->view('pie');
       }
       
}