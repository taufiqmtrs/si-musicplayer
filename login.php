<?php  

   require_once "dbconfig.php"; 

   if($user->isLoggedIn()){ 
     header("location: index.php"); 
   } 
   if(isset($_POST['kirim'])){ 
     $email = $_POST['email']; 
     $password = $_POST['password']; 
     if($user->login($email, $password)){ 
       header("location: index.php"); 
     }else{ 
       $error = $user->getLastError(); 
     } 
   } 
  ?> 
 <!DOCTYPE html>  
 <html>  
   <head> 
     <meta charset="utf-8"> 
     <title>Login</title> 
     <link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
   </head> 
   <body> 
    <div class="container" align="center">
       <form class="login-form" method="post"> 
        <?php if (isset($error)): ?> 
          <div class="error"> 
            <?php echo $error ?> 
          </div> 
        <?php endif; ?> 

        <h2>Playlist Music</h2>
        <h2>Login</h2>

        <table>
          <tr>
            <td>
             <input type="text" name="email" placeholder="email" required/> 
             </td>
        </tr>
        
        <tr>
            <td> 
              <input type="password" name="password" placeholder="password" required/>  
          </td>
        </tr>

        <tr>
            <td>
              <button type="submit" name="kirim">login</button> 
          </td>
        </tr>
         </table>

       </form> 
      </div>  
   </body> 
 </html>