<?php

$producto1=$_POST["producto1"];
$precio1=$_POST["precio1"];

$producto2=$_POST["producto2"];
$precio2=$_POST["precio2"];

$producto3=$_POST["producto3"];
$precio3=$_POST["precio3"];

?>

<html>
<body>
</table>
<br/>
<h2 align="center"> Su resultado es: </h2>
<table border="1" align="center" cellspacing="10">
<tr >
<td>No.</td>
<td>Producto</td>
<td>Precio</td>
</tr>

<tr>
<td>1</td>
<td><?php echo $producto1; ?></td>
<td><?php echo $precio1; ?></td>
</tr>

<tr>
<td>2</td>
<td><?php echo $producto2; ?></td>
<td><?php echo $precio2; ?></td>
</tr>

<tr>
<td>3</td>
<td><?php echo $producto3; ?></td>
<td><?php echo $precio3; ?></td>
</tr>

<tr>
<td></td>
<td>Subtotal</td>
<?php $subtotal= $precio1+$precio2+$precio3; ?>
<td><?php echo $subtotal; ?></td>
</tr>

<tr>
<td></td>
<td>Iva</td>
<?php $iva= $subtotal*.16; ?>
<td><?php echo $iva; ?></td>
</tr> 


<tr>
<td> </td>
<td>Total</td>
<?php $total= $subtotal+$iva; ?>
<td><?php echo $total; ?></td>
</tr>
<h2>Gracias por su compra</h2>

</table>
</body>
</html>