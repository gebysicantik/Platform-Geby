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
    <div align="center">
    <h1>DELETE DATA ASISTEN</h1>
    <form action="/asisten/delate" method="post">
        <?= csrf_field() ?>
        NIM:
        <br><input type="text" name="nim" /><br/>
        <br>
        <input type="submit" name="" value="Delete" />
    </form>
    </div>
</body>
</html>
