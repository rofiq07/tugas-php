<!DOCTYPE html>
<html>

<head>
    <title>Praktek Individu 2</title>
</head>
<style>
tr:nth-child(even) td {
    background-color: #ddd;
}

tr:nth-child(odd) td {
    background-color: #fff;
}
</style>

<body>
    <table border=1 style="border-color:black;">
        <tr style=" background-color:aqua;">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
		for ($i = 1; $i <= 10; $i++) {
			echo "<tr>";
			echo "<td>$i</td>";
			echo "<td>";
			if ($i <= 10) {
				echo "Nama ke $i";
			}
			echo "</td>";
			echo "<td>";
			echo "Kelas " . (11 - $i);
			}
			echo "</td>";
			echo "</tr>";
		?>
    </table>
</body>

</html>