<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<table>
		<form method="GET" action="insertProses.php">
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
			</tr>
		<?php
			include "koneksi.php";
			
			$query="SELECT * FROM mahasiswa";
			$result=mysqli_query($connect, $query);
			
			if(mysqli_num_rows($result) > 0){
				while($row=mysqli_fetch_array($result)){

		?>
			<tr>
				<td><?php echo $row["id"]?></td>
				<td><?php echo $row["nama"]?></td>
				<td><?php echo $row["alamat"]?></td>
		<?php
				}
		}
		else	{
		echo"0 result";
	}
		?>
	</table>
</body>
</html>