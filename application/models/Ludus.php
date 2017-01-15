<?php

class Ludus extends CI_Model {

        public function __construct()
        {       
            parent::__construct();
            $this->load->database();
        }
                
        public function get_usuario($usuario = FALSE)
        {
            if ($usuario !== FALSE)
                {
                 $this->db->where('username',$usuario);
                }
             $query = $this->db->get('users');
             return $query->result();
        }
        
        public function get_usuarios($limites = FALSE)
        {
            if ($limites !== FALSE)
              {
                  $this->db->limit($limites['cuantos'],$limites['inicio']);//hay select, from, join, where, ...
              }
              
             $query = $this->db->get('users'); //ejecutamos la consulta
             return $query->result(); //devolvemos un array de objetos 
        }
        
        public function get_eventos_de_usuario($usuario)
        {
            $ssql = "select organizador, tipo.nombre as 'nombretipo', subtipo.nombre as 'nombresubtipo', lugar, inicio, fin, maxparticipantes, comentarios, transporte
                     from users, participante, evento, rol, roldados, dados, videojuego, videojuegoplataforma, plataforma, vivo, concierto, viaje, cine, deporte
                     where users.id='$usuario' and organizador=users.id and users.id=participante.idUsuario and participante.idEvento=evento.idEvento and evento.idSubtipo=subtipo.idSubtipo and subtipo.idTipo=tipo.idTipo and evento.idEvento=rol.idRol and rol.idRol=roldados.idRol and roldados.idDados=dados.idDados and evento.idEvento=idCine and evento.idEvento=idVivo and evento.idEvento=idConcierto and evento.idEvento=idDeporte and evento.idEvento=videojuego.idVideojuego=videojuegoplataforma=idVideojuego and videojuegoplataforma.idPlataforma=plataforma.idPlataforma and evento.idEvento=idViaje";
            return $query->$ssql->result();
        }
        
        public function get_eventos()
        {
           $ssql = "select organizador, tipo.nombre as 'nombretipo', subtipo.nombre as 'nombresubtipo', lugar, inicio, fin, maxparticipantes, comentarios, transporte
                     from usuario, participante, evento, rol, roldados, dados, videojuego, videojuegoplataforma, plataforma, vivo, concierto, viaje, cine, deporte
                     where usuario.idUsuario=participante.idUsuario and participante.idEvento=evento.idEvento and evento.idSubtipo=subtipo.idSubtipo and subtipo.idTipo=tipo.idTipo and evento.idEvento=rol.idRol and rol.idRol=roldados.idRol and roldados.idDados=dados.idDados and evento.idEvento=idCine and evento.idEvento=idVivo and evento.idEvento=idConcierto and evento.idEvento=idDeporte and evento.idEvento=videojuego.idVideojuego=videojuegoplataforma=idVideojuego and videojuegoplataforma.idPlataforma=plataforma.idPlataforma and evento.idEvento=idViaje";
            return mysql_query($ssql);
        }
        
        public function add_user($user)
        {
            $this->db->insert('users',$user);
        }

}