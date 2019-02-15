<?php
if(isset($_GET['editar'])){
  $editarNombre = $_GET['editar'];

  $consulta = "SELECT * FROM formulario WHERE nombre=$editarNombre";
  $ejecutar = mysqli_query($conexion, $consulta);

  $fila = mysqli_fetch_array($ejecutar);

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
}
 ?>
 <br />
 <header>
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">Actualizar Informacion del usuario</span></h1>
      </div>
    </header>

     <br />
      <br />

 <form method="POST" action="">nombre
   <input type="text" name="nombre" value="<?php echo $nombre; ?>"> <hr/>
   Apellido 
      <input type="text" name="apellido" value="<?php echo $apellido ?>"><br /> <hr/>
  Email
   <input type="text" name="email" value="<?php echo $email ?>"><br /><hr/>
  Tarjeta
   <select name="tarjeta">
        
        <option>Visa</option>
        <option>Mastercard</option>
        <option>Platino</option>
      </select><br/><hr/>
  Num Tarjeta
   <input type="int" name="numerotarjeta" value="<?php echo $numerotarjeta ?>"><br /><hr/>
  CVV
   <input type="int" name="cvv" value="<?php echo $cvv ?>"><br /><hr/>
  Expedicion
   <input type="text" name="expira" value="<?php echo $expira ?>"><br /><hr/>
  Direccion
   <input type="text" name="direccion" value="<?php echo $direccion ?>"><br /><hr/>
  Ciudad
   <input type="text" name="ciudad" value="<?php echo $ciudad ?>"><br /><hr/>
  Estado
   <input type="text" name="estado" value="<?php echo $estado ?>"><br /><hr/>
  Pais
  <select name="pais"> 
        <option>Colombia</option>
        <option>Argentina</option>
        <option>Estados Unidos</option>
        <option>Mexico</option>
        <option>Francia</option>
        <option>España</option>
      </select> <br /><hr/>
  Telefono 
   <input type="int" name="telefono" value="<?php echo $telefono ?>"><br /><hr/>

   <input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
 </form>

 <?php
    if (isset($_POST['actualizar'])){
      $actualizarnombre = $_POST['nombre'];
      $actualizarapellido = $_POST['apellido'];
      $actualizaremail = $_POST['email'];
      $actualizartarjeta = $_POST['tarjeta'];
      $actualizarnumerotarjeta = $_POST['numerotarjeta'];
      $actualizarcvv = $_POST['cvv'];
      $actualizarexpira = $_POST['expira'];
      $actualizardireccion = $_POST['direccion'];
      $actualizarciudad = $_POST['ciudad'];
      $actualizarestado = $_POST['estado'];
      $actualizarpais = $_POST['pais'];
      $actualizartelefono = $_POST['telefono'];

      $actualizar = "UPDATE formulario SET nombre='$actualizarnombre', apellido='$actualizarapellido',
       email='$actualizaremail', tarjeta='$actualizartarjeta', numerotarjeta='$actualizarnumerotarjeta',
       cvv='$actualizarcvv', expira='$actualizarexpira', direccion='$actualizardireccion', ciudad='$actualizarciudad',
       estado='$actualizarestado', pais='$actualizarpais', telefono='$actualizartelefono' WHERE nombre='$editarNombre'";

       $ejecutar = mysqli_query($conexion, $actualizar);


    }
  ?>
