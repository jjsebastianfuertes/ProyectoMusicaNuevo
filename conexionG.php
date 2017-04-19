<?php

//crear funcion que contenga a la conexion con la base de datos
// se la utilizara como global
  function ConexionG()
     {

      $username = "root";
      $password = "";
      $db   = "PaginaWeb";
      //crear conexion
       @$conn = new mysqli ("localhost",$username,$password,$db);
      //revisar conexion
      if($conn->connect_errno)
      {
      die("Error: ".$conn-> connect_errno);
     // exit;
      }
      return $conn;
     }
      ?>
