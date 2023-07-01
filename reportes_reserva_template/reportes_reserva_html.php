<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cevicherias.informaticapp.com/reservas',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VsYmtmREhTSEE0YjNaUDRNNUR3QlBMa0NDVnNzYUVDOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlY1Y1TWpMVlZNN2xIRXU1Vlk0UnNsTzAzNmtMZmVSVw=='
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consumo de Web Services</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container col-xl-12">
	<h1>Reportes de reservas</h1>
	<a href="../index.html" class="btn btn-primary">Regresar al inicio</a>
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">Autor</th>
				<th scope="col">Fecha de pedido</th>
				<th scope="col">Fecha de reserva</th>
                <th scope="col">Nombre Sucursal</th>
                <th scope="col">Número de mesa</th>
			</tr>
		</thead>
		<tbody>
            <?php foreach($data["Detalles"] as $empresa):?>
			<tr>
				<td><?= $empresa["res_autor"] ?></td>
                <td><?= $empresa["res_fecha_pedido"] ?></td>
                <td><?= $empresa["res_fecha_reserva"] ?></td>
                <td><?= $empresa["sucu_nombre"] ?></td>
                <td><?= $empresa["sucu_num_mesa"] ?></td>
			</tr>
            <?php endforeach ?>
		</tbody>
	</table>
</div>
</body>
</html>