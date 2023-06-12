<!DOCTYPE html>
    <html lang="en">
        
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Pendaftaran</title>
</head>

<body style="background-color: #8A9A5B;">
    <br>
    <h2 align="center"> * PENDAFTARAN ASISTEN PRAKTIKUM *</h2>
    <form action="/asisten/simpan" method="post">
    <?= csrf_field() ?><br>
    <div align="center" >
        NIM:<br><input type="text" name="nim" /><br />
        NAMA:<br><input type="text" name="nama" /><br />
        PRAKTIKUM:<br><input type="text" name="praktikum" /><br />
        IPK:<br><input type="text" name="ipk" /><br />
        <br>
    <input type="submit" name="" value="Simpan" />
    </div>

</form>
</body>
</html>

