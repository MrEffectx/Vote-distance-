<?php
			$servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On �tablit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On v�rifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion r�ussie';
?>         
            