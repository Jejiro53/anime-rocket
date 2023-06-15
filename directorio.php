<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>🚀 AnimeRocket</title>
</head>

<body>

<!-- Parte superior (visual) -->
  <header>
    <div class="header">
    <div class="logo">🚀 AnimeRocket</div>
      <nav>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="clases/directorio.php">Directorio Anime</a></li>
        </ul>

<!-- Navegador de videos      -->
        <div id="search">
         <form action= "directorio.php" method= "POST">
          <input type="text" placeholder="Buscar..." name="texto">  
          <input type="submit" name="search" value="🔍">
       </form>
      </div>
      
<!-- Login         -->
        <a href="login.php" class="login">🙎🏻‍♂️ Login</a>
      </nav>
    </div>
  </header>

  <!-- Todos los animes -->

  <section id="main">
<h1>🎮Lista completa de animes🎮</h1>
<div class="episodes">
<?php
        require_once 'clases/listas.php';
        $listas = new listas ("localhost:3308", "root", "", "anime-rocket");
        if (isset($_POST['search'])){
          $result = $listas ->search($_POST['texto']);
        } else {
            $result = $listas ->get_listas();
        }

        while ($row = $result ->fetch_array()) {
    ?>

      <div class="episode">
        <p class="icon">►</p>
        <img src="<?php echo $row ['thumbnail']; ?>" alt="">
        <div class="episode_description">
          <p class="episode_number">Anime <?php echo $row ['id'];?></p>
          <h3 class="episode_title"><?php echo $row ['titulo'];?></h3>
        </div>
      </div>
    <?php
    }
    ?>
    </div>
  </section>

</body>
</html>