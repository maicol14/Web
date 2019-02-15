<!DOCTYPE html>
<html lang="es">
  <head>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="${Path To Your Fav Icon}/favicon.ico">
    <title>Formulario</title>
    <hr/>
    <hr/>
    <!-- Bootstrap core CSS -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">-->
  </head>
  <body>
    <!---Parte del codigo donde utilizo una herramienta de bootstrap para hacer una barra de navegacion -->
    <header>
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">Mi Formulario Web</span></h1>
        </div>
      </div>
    </header>
    <br>
    <br>
    <br>
    <br>
<!---Formulario donde le pido los datos al usuario -->
    <form id="frmajax" method="post">
      <hr/><hr/>
      <h1>FORMULARIO</h1>
      <hr/>

      <hr/>

      <label>Nombre</label>
      <p></p>
      <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
      <hr/>
      <p></p>
      <label>Apellido</label>
      <p></p>
      <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
      <hr/>
      <p></p>
      <label>Email</label>
      <p></p>
      <input type="text" name="email" id="email" placeholder="Email@hotmail.com">
      <hr/>
      <p></p>
      <label>Tarjeta</label>
      <p></p>
      <select name="tarjeta">
        
        <option>Visa</option>
        <option>Mastercard</option>
        <option>Platino</option>
      </select>
      <hr/>
      <p></p>
      <label>N° de tarjeta</label>
      <p></p>
      <input type="text" name="numerotarjeta" id="numerotarjeta" placeholder="272829..">
      <hr/>
      <p></p>
      <label>CVV</label>
      <p></p>
      <input type="text" name="cvv" id="cvv">
      <hr/>
      <p></p>
      <label>Expedicion de su tarjeta</label>
      <p></p>
      <input id="date" type="date" name="expira">
      <hr/>
      <hr/>
      <p></p>
      <label>Direccion</label>
      <p></p>
      <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion de residencia">
      <hr/>
      <p></p>
      <label>Ciudad</label>
      <p></p>
      <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su ciudad">
      <hr/>
      <p></p>
      <label>Estado</label>
      <p></p>
      <input type="text" name="estado" id="estado" placeholder="Ingrese su estado">
      <hr/>
      <p></p>
      <label>Pais</label>
      <p></p>
      <select name="pais">
        <option>Colombia</option>
        <option>Argentina</option>
        <option>Estados Unidos</option>
        <option>Mexico</option>
        <option>Francia</option>
        <option>España</option>
      </select>
      <hr/>
      <p></p>
      <label>Telefono</label>
      <p></p>
      <input type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono" pattern="1 2 3 4 5 6 7 8 ">
      <hr/>
      <p></p>

      <img id="imagen" src="https://www.welivesecurity.com/wp-content/uploads/2014/06/Simplocker_QR1.png" border="1" width="160" height="80"/> <br> <br>
      <button id="guardar" class="btn btn-primary">Enviar</button>
    </form>
    <br>
    <hr/><hr/><hr/>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>


<!--Tabla donde se muestran todos los datos -->
    <br />

    <table width="1000" border="10" style="background-color: blue">

      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tarjeta</th>
        <th>Numero de tarjeta</th>
        <th>CVV</th>
        <th>Expiracion de tarjeta</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Pais</th>
        <th>Telefono</th>
      </tr>

      <?php
      include 'insertar.php';
      $consulta = "SELECT * FROM formulario";
      $ejecutar = mysqli_query($conexion,$consulta);
      $i = 0;

              while($fila = mysqli_fetch_array($ejecutar)){
                $nombre=$fila['nombre'];
                $apellido=$fila['apellido'];
                $email=$fila['email'];
                $tarjeta=$fila['tarjeta'];
                $numerotarjeta=$fila['numerotarjeta'];
                $cvv=$fila['cvv'];
                $expira=$fila['expira'];
                $direccion=$fila['direccion'];
                $ciudad=$fila['ciudad'];
                $estado=$fila['estado'];
                $pais=$fila['pais'];
                $telefono=$fila['telefono'];

                $i++;

       ?>

       <tr align="center">
         <td><?php echo $nombre ?></td>
         <td><?php echo $apellido ?></td>
         <td><?php echo $email ?></td>
         <td><?php echo $tarjeta ?></td>
         <td><?php echo $numerotarjeta ?></td>
         <td><?php echo $cvv ?></td>
         <td><?php echo $expira ?></td>
         <td><?php echo $direccion ?></td>
         <td><?php echo $ciudad ?></td>
         <td><?php echo $estado ?></td>
         <td><?php echo $pais ?></td>
         <td><?php echo $telefono ?></td>
         <td><a href="index.php?editar=<?php echo $nombre; ?>">Editar</a></td>
         <td><a href="index.php?borrar=<?php echo $nombre; ?>">Borrar</a></td>
       </tr>

     <?php } ?>

    </table>
      <hr/><hr/><hr/>
    <?php
    // Bloque de codigo para editar
    if (isset($_GET['editar'])) {
      include("editar.php");
    }
     ?>

     <?php
     //Bloque de codigo donde se borran los datos
     if(isset($_GET['borrar'])){
       $borrarNombre = $_GET['borrar'];
       $borrar = "DELETE FROM formulario WHERE nombre='$borrarNombre'";
       $ejecutar = mysqli_query($conexion, $borrar);
       if($ejecutar){
         echo "<script>alert('Ha sido borraro')</script>";

       }
     }
     ?>

     <footer>
       <p>Formulario Web Hecho Por: &copy; 2019</p>
       <p> Maicol Andres Chavez Huertas </p>
     </footer>
  </body>
</html>

<!---Script para hacer el ajax y mandar los datos del formulario -->
<script type="text/javascript">
     $(document).ready(function(){
       $('#guardar').click(function(){//llamo el id del boton para hacer una accion
         var datos=$('#frmajax').serialize();//mediante el id del formulario llamo todos los datos del formulario. serialize llama todos los datos
          $.ajax({//ajax tiene 4 atributos
            type:"POST",
            url:"insertar.php",
            data:datos,//llamo todos los datos
            success:function(r){
              if(r==1){
                alert("Guardado exitoso");
              }else{
                alert("fallo");
              }
            }
          });
          return false;//No recargue la pagina
       });
     });
</script>
