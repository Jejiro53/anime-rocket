<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body class="text-center">
    <main class="form-signin">
      <form action="clases/usuario.php" method="POST">
      <h1>🚀 AnimeRocket</h1>
      <h2 class="h3 mb-3 font-weight-normal">Porfavor iniciar sesion</h1>
      <label for="inputEmail" class="sr-only">correo electronico</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="correo electronico"  name="email">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="password" name="passwords">
      <button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesion</button>

      <p class="mt-5 mb-3 text-muted">&copy; 2023-2027</p>
      <div>
      <a href="form-insert.php">No tienes cuenta has click aqui</a>
      <div>
      <a href="recovery.php">¿olvidaste tu contraseña?</a>
      </div>
      <?php 
          if(isset($_GET['message'])){

           ?>
           <div class="alert alert-primary" role="alert">
         <?php 
         
          switch ($_GET['message']) {
            case 'ok':
              echo 'porfavor,revisa tu correo';
              break;
              case 'success_password':
                echo 'inicia sesio con tu nueva contraseña';
                break;
            
            default:
              echo 'algo salio mal, revisa de nuevo';
              break;
          }

         ?>
         </div>
           <?php 
          }
      ?>
         
    </form>
    </main>
  </body>
</html>