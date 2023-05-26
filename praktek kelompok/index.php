<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Kelompok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <table cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <td width="50px" class="text-center">ID Anggota</td>
                <td width="50px" class="text-center">Nama</td>
                <td width="50px" class="text-center">Usename</td>
                <td width="50px" class="text-center">Password</td>
                <td width="50px" class="text-center">Jenis Kelamin</td>
                <td width="50px" class="text-center">Telpon</td>
                <td width="50px" class="text-center">Alamat</td>
                <td width="50px" class="text-center">Email</td>
                <td width="200px" class="text-center">Aksi</td>
            </tr>

            <?php
			include('connect.php');

			$data_anggota = mysqli_query($conn, "SELECT * FROM anggota");

			while ($anggota = mysqli_fetch_array($data_anggota)) {
			?>
            <tr>
                <td class="text-center"><?php echo $anggota["id_anggota"] ?></td>
                <td><?php echo $anggota["nama"] ?></td>
                <td><?php echo $anggota["username"] ?></td>
                <td><?php echo $anggota["password"] ?></td>
                <td><?php echo $anggota["sex"] ?></td>
                <td><?php echo $anggota["telp"] ?></td>
                <td><?php echo $anggota["alamat"] ?></td>
                <td><?php echo $anggota["email"] ?></td>
                <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php
			}
			?>
        </table>
    </div>
</body>

</html>