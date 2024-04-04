<?php

    class Library {

        private $Server = "127.0.0.1:3305";
        private $db = "db_libreria";
        private $User = "root";
        private $Password = "";

        private function getConnection(){
            $dns = "mysql:host=$this->Server;dbname=$this->db";
            $obPDO = new PDO($dns, $this->User, $this->Password);
            return $obPDO;
        }

        public function getBooks(){
            $pdoConnection = $this->getConnection();
            $resultado = ["no data retuned"];
            if ( is_object($pdoConnection)){

                $query = "SELECT * FROM titulos";
                $response = $pdoConnection->query($query);

            }

            return $response;
        }

        public function getWritters(){
            $pdoConnection = $this->getConnection();
            $resultado = ["no data retuned"];
            if ( is_object($pdoConnection)){

                $query = "SELECT * FROM autores";
                $response = $pdoConnection->query($query);

            }

            return $response;
        }

        
        public function register(){
            if(!empty($_POST["enviar"])){
                if(!empty($_POST['Name']) and !empty($_POST['Correo']) and !empty($_POST['Asunto']) and !empty($_POST['Mensaje'])){
                    $Nombre = $_POST['Name'];
                    $Correo = $_POST['Correo'];
                    $Asunto = $_POST['Asunto'];
                    $Mensaje = $_POST['Mensaje'];
                    $Fecha = new DateTime('now');

                    $pdoConnection = $this->getConnection();
                    $query = "insert into contacto(fecha,correo,nombre,asunto,comentario)values(CURDATE(),'$Correo','$Nombre','$Asunto','$Mensaje')";
                    $response = $pdoConnection->query($query);
                    echo '<h5>Completa todos los campos marcados con asterisco (<span class="text-danger">*</span>)</h5>';

                    return $response;
                }
            }

            }

        }

?>