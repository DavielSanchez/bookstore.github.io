<?php

            include 'db/conections.php'

            if(!empty($_POST["enviar"])){
                if(!empty($_POST['Name']) and !empty($_POST['Correo']) and !empty($_POST['Asunto']) and !empty($_POST['Mensaje'])){
                    print('<h1 class="text-black">Todo bien con el formulario</h1>');
                    $Nombre = $_POST['Name'];
                    $Correo = $_POST['Correo'];
                    $Asunto = $_POST['Asunto'];
                    $Mensaje = $_POST['Mensaje'];
                    $Fecha = new DateTime('now');

                    $pdoConnection = $this->getConnection();
                    $query = "insert into contacto(fecha,correo,nombre,asunto,comentario)values(DATE DEFAULT CURDATE(),'$Correo','$Nombre','$Asunto','$Mensaje')";
                    $response = $pdoConnection->query($query);
                    if ($query==1) {
                        echo '<div class="alert alert-success">Todo bien</div>';
                    } else {
                        echo '<div class="alert alert-danger">Todo mal</div>';
                    }
            }else{
                echo 'KLK'
            }}
?>