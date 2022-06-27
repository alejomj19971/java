<?php
include('ds.php');
$id=$_GET['id'];

$sentencia= $bd->prepare("SELECT *FROM clientes where id_cliente=? ;");
$sentencia->execute([$id]);
$cliente= $sentencia->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
<div>
    <form action="actualizarcliente.php" method="POST">
    <div>
            <label for="">ID DEL CLIENTE</label>
            <br>
            <input type="text" name="txtIdCliente" value="<?php echo $cliente->id_cliente ?>">
        </div>

            <div>
                <label for="">NOMBRE DEL CLIENTE</label>
                <br>
                <input type="text" name="txtnombreCliente" value="<?php echo $cliente->nom_cliente ?>">
            </div>

            <div>
                <label for="">TELEFONO</label>
                <br>
                <input type="text" name="txttelefono" value="<?php echo $cliente->telefono ?>">
            </div>
            <div>
                <label for="">EMAIL</label>
                <br>
                <input type="text" name="txtemail" value="<?php echo $cliente->email_cliente ?>">
            </div>
            <div>
                <label for="">DIRECCION</label>
                <br>
                <input type="text" name="txtdireccion" value="<?php echo $cliente->direccion ?>">
            </div>
            <div>
                <label for="">ACTIVO</label>
                <br>
                <input type="text" name="txtactivo" value="<?php echo $cliente->activo ?>">
            </div>
          

          

            <div>
           <input type="reset" value="Limpiar">
             <input type="submit" name="bntenviar">
            </div>

        </form>


</body>
</html>