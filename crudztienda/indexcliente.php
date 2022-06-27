<?php 
require('ds.php');
include('header.php');
  
    $sentencia=$bd->query("SELECT *FROM clientes");
    $clientes=$sentencia->fetchALL(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilocliente.css">
    <title>ZzetaPC</title>
</head>
<body>
    <div class="containerForm ">
    <form action="guardarcliente.php" method="POST">
        <div>
            <label for="">ID DEL CLIENTE</label>
            <br>
            <input type="text" name="idCliente">
        </div>

            <div>
                <label for="">NOMBRE DEL CLIENTE</label>
                <br>
                <input type="text" name="nombreCliente">
            </div>

            <div>
                <label for="">TELEFONO</label>
                <br>
                <input type="text" name="telefono">
            </div>
            <div>
                <label for="">EMAIL CLIENTE</label>
                <br>
                <input type="text" name="emailCliente">
            </div>
            <div>
                <label for="">DIRECCIÓN</label>
                <br>
                <input type="text" name="dirCliente">
            </div>
            <div>
                <label for="">ACTIVO</label>
                <br>
                <input type="text" name="activo">
            </div>
           

          

            <div>
           <input type="reset" value="Limpiar">
             <input type="submit" name="bntenviar">
            </div>

        </form>


        <div class="containertabla ">
            <table>
                <tr>
                    <td>id_cliente</td>
                    <td>nom_cliente</td>
                    <td>telefono</td>
                    <td>email</td>
                    <td>direccion</td>
                    <td>activo</td>
                 
               
                </tr>

            <?php 
            foreach($clientes as $cliente){
              ?>  
              <tr>
                  <td><?php echo $cliente->id_cliente ?></td>
                  <td><?php echo $cliente->nom_cliente ?></td>
                  <td><?php echo $cliente->telefono ?></td>
                  <td><?php echo $cliente->direccion ?></td>
                  <td><?php echo $cliente->activo?></td>
                
                  <td><a href="preactualizarcliente.php?id=<?php echo $cliente->id_cliente; ?>">Actualizar</a></td>
                  <td><a href="eliminarcliente.php?id=<?php echo $cliente->id_cliente; ?>">Eliminar</a></td>
              </tr>
              <?php
            }
            ?>
            </table>
        </div>
    </div>
</body>
</html>