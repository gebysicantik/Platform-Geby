<!DOCTYPE html>

<head>

    <title>Data Mahasiswa</title>

</head>
<body background="j.jpg">
<form action="./proses" method="get">
    <h2 align="center" >DATA MAHASISWA</h2><br>
   <P align="center">NIM : <input type="text" name="nim"  required></P> <br>
    
   <P align="center">NAMA   : <input type="text" name="nama"  required></P>
    <br>
  <h2 align="center"> Masukan  Status Kelulusan: 
    <select name="status" id="status" required>
     <option value="MEMUASKAN">Memuaskan</option>
     <option value="KURANG MEMUASKAN">Kurang Memuaskan</option>
     <option value="BAIK">Baik</option>
    </select></h2> <br>
   <P align="center"><input type="submit" name="tambah" value="MASUKAN DATA "></P>
</form>
</body>
</html>