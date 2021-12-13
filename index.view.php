<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset='UTF-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Pagina</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href='estilpagina.css' rel="stylesheet">
</head>



<body>

  <header>
    <h1>MOLTMOBIL</h1>
    <p>Varietat de smartphones a prop de casa</p>
  </header>

  <nav>
    <div class="opciones">

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
        class="iniciar">Iniciar sesió</button>

      <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
              title="Close Modal">&times;</span>
            <h2>Iniciar sesió</h2>
          </div>

          <div class="container">
            <label for="uname"><b>Nom d'usuari</b></label>
            <input type="text" placeholder="Nombre de usuario" name="uname" required>

            <label for="psw"><b>Contrasenya</b></label>
            <input type="password" placeholder="Contraseña" name="psw" required>

            <button type="submit">Continuar</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Recorda l'usuari
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'"
              class="cancelbtn">Cancelar</button>
          </div>
        </form>
      </div>

      <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>

    </div>



    <div class="redes">
      <li><a href="#" style="float: right;" class="fa fa-twitter"></a></li>
      <li><a href="#" style="float: right;" class="fa fa-instagram"></a></li>
      <li><a href="#" style="float: right;" class="fa fa-facebook"></a></li>

    </div>


  </nav>

  <div class="bottomnav">

    <div class="desplegable">

      <div class="dropdown">
        <button class="dropbtn">Filtrar elements
          <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-content">
          <a href="index2.php"> Apple</a>
          <a href="index3.php"> Samsung</a>
          <a href="index4.php"> Xiaomi</a>
          <a href="index5.php"> Oneplus</a>
          <a href="index6.php"> Poco</a>
          <a href="index7.php"> Smartphones</a>
          <a href="index8.php"> Tablets</a>
          <a href="index.php"> Mostra-ho tot</a>
                           
        </div>
      
      </div>

      

    </div>

  </div>


  <main>

  <div id="all">      

  <h1>El nostre catàleg de productes</h1>

        <input type="text" id="cerca" placeholder="Cerca..." onkeyup="filterfunction()">

        <table id="taula">
          
          <tr id="first">
            <td>NOM</td>
            <td>MARCA</td>
            <td>PREU</td>
            <td>MATERIAL</td>
            <td>ESTOC</td>
          </tr>
          
          <?php foreach($result as $registre ): ?>

          <tr>
                <td><?php echo $registre['nom']; ?></td>
                <td><?php echo $registre['marca']; ?></td>
                <td><?php echo $registre['preu']; ?></td>
                <td><?php echo $registre['material']; ?></td>
                <td><?php echo $registre['estoc']; ?></td>
          </tr>

          <?php endforeach; ?>

        </table>

  </div>

        <script src="funcions.js"></script>

  </table>

  </main>

  
  <footer>

    <a href="#" class="a1"><p>Atenció al client</p></a>

    <a href="#" class="a2"><p>Política de privacitat</p></a>

    <a href="#" class="a3"><p>Termes de servei</p></a>

    <a href="#" class="a4"><p>Moltmobil, Av\ Catalunya, Tàrrega, LLeida.</p></a>

  </footer>

</body>

</html>