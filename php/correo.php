<?php 

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['msg'])){
        $name = $_POST['name'];
        $msg  = $_POST['msg'];
        $email= $_POST['email'];

        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Replay-to: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
       $mail = mail($email,$msg,$header);
       if($mail){
           echo"<h4>Mensaje recibido!</h4>";
       }
  
        
    }
}

?>