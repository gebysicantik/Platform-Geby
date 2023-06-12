<!DOCTYPE html>
<html>
<head>
    <title>Data Asisten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
<div class="container mt-1">
<div class="container p-1 my-1 bg-dark text-white">
    <h1  align="center">Pendaftaran Asisten Praktikum</h1>
</div>
    <table class = "table">
        <table  border="10"  class="table table-dark">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>PRAKTIKUM</th>
            <th>IPK</th>
        </tr>
        <?php $no = 1; foreach($asisten as $row): ?>
        <tr>
            <td><?= $row['no'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['praktikum'] ?></td>
            <td><?= $row['ipk'] ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
    </table>
    </div>
    <div align="center">
    <a href="/asisten/simpan">Tambah Data Asisten</a></br>
    <a href="/asisten/update">Edit Data Asisten</a></br>
    <a href="/asisten/delete">Hapus Data Asisten</a></br>
    <a href="/login">Logout</a>
    </div>
</body>
</html>
