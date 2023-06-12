<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/asisten/search" method="post">
        <?= csrf_field() ?>
        search: <input type="text" name="key" />
        <input type="submit" name="sumbit" value="search"  /> 
</form>

<?php
 if (!empty($hasil)) {
    echo "<h1>hasil Pencarian</h1>";
    echo "nama:" , $hasil['nama'];
    echo "<br>Praktikum: " , $hasil['praktikum'];
    echo "<br>IPK :" , $hasil['ipk'];
}
?>
</body>

</html>