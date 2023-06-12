<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Update</title>
</head>
<body style="background-color: #8A9A5B;">
<div  align="center">
    <br>
    <h1>UPDATE DATA ASISTEN</h1>
    <form action="/asisten/update" method="post">
        <?= csrf_field() ?>
        NIM: <br><input type="text" name="nim" /><br />
        <br>
        NAMA: <br> <input type="text" name="nama" /><br />
        <br>
        PRAKTIKUM: <br> <input type="text" name="praktikum" /><br />
        <br>
        IPK: <br> <input type="text" name="ipk" /><br />
        <br>
        <input type="submit" name="" value="Update" />
    </form>
    </div>
</body>
</html>
