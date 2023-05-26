<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <style>
    tr:nth-child(even) td {
        background-color: #ddd;
    }

    tr:nth-child(odd) td {
        background-color: #fff;
    }

    table {
        border-collapse: collapse;
        padding: 10px;

    }

    td,
    tr {
        border: 2px solid black;
        padding: 10px;
    }
    </style>
</head>

<body>
    <nav style="background-color: orange; padding: 15px; margin-bottom:20px;">
        DAFTAR NILAI
    </nav>
    <table style="margin: auto;">
        <tr style=" font-weight: bold; text-align: center;">
            <td width="100px">No</td>
            <td width="100px">Nama</td>
            <td width="150px">Tanggal Lahir</td>
            <td width="100px">Umur</td>
            <td width="100px">Alamat</td>
            <td width="200px">Kelas</td>
            <td width="100px">Nilai</td>
            <td width="100px">Hasil</td>
        </tr>
        <?php
        $json_string = file_get_contents('data.json');
        $json = json_decode($json_string, true);
        for ($i = 1; $i <= 6; $i++);
        foreach ($json as $data) {
            $i = 1;
            if ($data['nilai'] >= 90) {
                $hasil = 'A';
            } elseif ($data['nilai'] >= 75) {
                $hasil = 'B';
            } elseif ($data['nilai'] >= 70) {
                $hasil = 'C';
            } else {
                $hasil = 'D';
            }
        ?>
        <?php $umur = date_diff(date_create($data["tanggal_lahir"]), date_create('today'))->y; ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["tanggal_lahir"]; ?></td>
            <td><?php echo $umur ?> tahun</td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["kelas"]; ?></td>
            <td><?php echo $data["nilai"]; ?></td>
            <td><?php echo $hasil ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>