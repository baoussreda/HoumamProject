<!DOCTYPE html>
<html>
<head>
<title>SUJET PFE</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
	<body>
		<table>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
			</tr>
				<?php
					$conn = mysqli_connect("mydb", "root", "", "pfe");
					if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
					$sql = "SELECT id_etu, nom_complet FROM etudiant";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) 
					{
						while($row = $result->fetch_assoc()) 
						{
							echo "	<tr>
										<td> <input type='checkbox' id='" . $row["id_etu"]. "' name='" . $row["id_etu"]. "'></td>
										<td>" . $row["id_etu"]. "</td>
										<td>" . $row["nom_complet"] . "</td>
									</tr>";
						}
						echo "</table>";
					}
					else 
						{ 
							echo "0 results"; 
						}
					$conn->close();
				?>
		</table>
	</body>
</html>