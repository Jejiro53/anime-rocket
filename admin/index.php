<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>🚀 AnimeRocket</title>
</head>
<body>
    <aside>
<div class="logo">

<h1> <img src="https://picsum.photos/50" alt=""> AnimeRocket Admin </h1>
</div>
<div class="menu">
<ul>
<Li>
  <a href="#"><i class="fa-solid fa-list"></i>Listas</a>  
</li>
<Li>
<a href="#"><i class="fa-solid fa-video"></i> Videos</a>
</Li>  
<Li>
    <a href="#"><i class="fa-solid fa-user"></i> Usuarios</a>
</Li>  
</ul>
</div> 
</aside>
<main>
<i class="fa-sharp fa-solid fa-chevron-left"></i>
<div class="header">
<h2>Usuarios</h2>
<div class="actions">
    
<a href="#" class="btnActions" id="btnNew"> <i class="fa-solid fa-plus"></i> Nuevo</a>
<a href="#" class="btnActions" id="btnDelete"><i class="fa-solid fa-plus"></i> Borrar</a>

</div>
</div>
<section id="data">
<table>
<thead>
    <tr>
        <th>
            <input type="checkbox" id="SelectAll">
        </th>
        <th>Id</th>
        <th>Usuario</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Status</th>
        <th>Rol</th>
        <th><a href="#">Editar</a></th>
    </tr>
</thead>

<tbody id="cuerpo">

</tbody>
</table>
</section>

<section id="insert_data">
<div class="container">
            
            <form action="consulta.php" method="POST" id="form">
            
            <div class="col-md-6">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
  </div>
  <div class="col-md-6">
    <label for="correo" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo"id="correo">
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Contraseña</label>
    <input type="text" class="form-control" name="password" id="password">
  </div>

  <div class="col-md-6">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" name="status" id="status">
  </div>
  <div class="col-md-6">
    <label for="rol" class="form-label">Rol</label>
    <input type="text" class="form-control" name="rol" id="rol">
  </div>

  <div class="col-12">
  <button type="submit" class="btn btn-success" id="btnSave">Guardar</button>
  </div>
            </form>
        </div>
    </section>
    </main>
<script src="table.js"></script>.
</body>
</html>