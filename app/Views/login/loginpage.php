<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login From</title>
    <style>
        h1 {
            font-weight: bold;
        }
    </style>
</head>
<body  style="background-color: #8A9A5B;">
    <div align="center">
        <br>
        <h1 >Silahkan Isi Data Anda</h1>
        <br>
    <form action="/login/check" method="post">
        <?= csrf_field() ?>
        USER:
        <br> <input type="text" name="usr"  /><br>
        PASSWORD: 
        <br><input type="text" name="pwd" /><br>
        <br>
        <input type="submit" name="submit" value="login"/><br>
</form>
</div>
</body>
</html>