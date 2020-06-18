<?php 
      try 
      { 
           $con = new PDO('mysql:host=localhost;dbname=dbutspbwlganjil', 'root', '', array(PDO::ATTR_PERSISTENT => true)); 
      } 
      catch(PDOException $e) 
      { 
           echo $e->getMessage(); 
      } 
      include_once 'Masuk.php'; 
      $user = new Masuk($con); 
 ?>