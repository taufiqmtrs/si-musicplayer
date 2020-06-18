<?php  

   class Masuk 
   { 
     private $db;  
     private $error; 
     function __construct($db_conn) 

     { 
       $this->db = $db_conn;   
       session_start(); 
     }

     public function login($email, $password) 

     { 
      try 
       { 
         $stmt = $this->db->prepare("SELECT * FROM admin WHERE email = :email"); 
         $stmt->bindParam(":email", $email); 
         $stmt->execute(); 
         $data = $stmt->fetch(); 
         if($stmt->rowCount() > 0){  
           if(password_verify($password, $data['password'])){ 
             $_SESSION['user_session'] = $data['id']; 
             return true; 
           }else{ 
             $this->error = "Email atau Password Salah"; 
             return false; 
           } 
         }else{ 
           $this->error = "Email atau Password Salah"; 
           return false; 
         } 
       } catch (PDOException $e) { 
         echo $e->getMessage(); 
         return false; 
       } 
     } 

     public function isLoggedIn(){ 
       if(isset($_SESSION['user_session'])) 
       { 
         return true; 
       } 
     } 

     public function getUser(){ 
       if(!$this->isLoggedIn()){ 
         return false; 
       } 
       try { 
         $stmt = $this->db->prepare("SELECT * FROM admin WHERE id = :id"); 
         $stmt->bindParam(":id", $_SESSION['user_session']); 
         $stmt->execute(); 
         return $stmt->fetch(); 
       } catch (PDOException $e) { 
         echo $e->getMessage(); 
         return false; 
       } 
     } 

     public function logout(){ 
       session_destroy(); 
       unset($_SESSION['user_session']); 
       return true; 
     } 

     public function getLastError(){ 
       return $this->error; 
     } 
   } 

 ?>