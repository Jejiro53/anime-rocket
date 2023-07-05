<?php

$validation = new admin("localhost:3308","root", "", "anime-rocket");
$result = $validation ->validation($_POST['email'], $_POST['passwords']);

if (mysqli_num_rows($result) >0) {
    session_start();
    
    header("location: ../admin/index.php");
} else {
    header ("location: ../index.php");
}
  

class admin extends mysqli{
    
  public function _construct($host, $user, $pass, $db){
  parent ::_construct($host, $user, $pass, $db);
}


public function validation($email, $password){
    
    $consulta = "SELECT email, passwords, rol FROM usuarios WHERE email='$email' AND passwords='$password' 
        AND estatus='1' AND rol='1'";
      $query = $this->query($consulta);
    return $query;
}

}
?>






