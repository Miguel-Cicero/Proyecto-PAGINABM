<?php 

	$conexion=mysqli_connect('localhost','id16462823_bonmarche','p}AEn)H%H7z*O)jf','id16462823_clubnacionbm');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="csstabla.css">
</head>
<body bgcolor="#3B3B3B">


<br>

	<table cellspacing="0">
		<tr id="tabla">
				<b>
				<td class="txttabla">CODIGO</td>
			    <td class="txttabla">NOMBRE</td>
			    <td class="txttabla">N° DOCUMENTO</td>
			    <td class="txttabla">N° TARJETA</td>
			    <td class="txttabla">TOTAL BRUTO</td>
			    <td class="txttabla">FECHA</td>
				</b>
		</tr>

		<?php
		$sql="SELECT * from tarjetas";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td class="txtdatos"><?php echo $mostrar['id'] ?></td>
			<td class="txtdatos"><?php echo $mostrar['nombre'] ?></td>
			<td class="txtdatos"><?php echo $mostrar['dni'] ?></td>
			<td class="txtdatos"><?php echo $mostrar['tarclubnacion'] ?></td>
			<td class="txtdatos">$ <?php echo $mostrar['totalbruto'] ?></td>
			<td class="txtdatos"><?php echo $mostrar['fecha'] ?></td>

			<td class="txtdatos"><a href="https://databases-auth.000webhost.com/sql.php?db=id16462823_clubnacionbm&table=tarjetas&pos=0">EDITAR</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>