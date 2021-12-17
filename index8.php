<?php

$connexio = new mysqli ("localhost", "root", "costa2021", "empresa");

if($connexio->connect_errno){

        die("No s'ha pogut fer la connexió");
} else{
    
        $sql = "SELECT nom, marca, preu, material, estoc FROM producto WHERE categoria LIKE 'Tablet' ORDER BY preu DESC;";
        $result = $connexio->query($sql);

}

require "index.view.php";

?>