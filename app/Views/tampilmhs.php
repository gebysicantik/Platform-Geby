<html>

<body background="j.jpg">
    <br>
    <br>
    <br>
    <br>
    <h1 align="center" >STATUS KELULUSAN MAHASISWA</h1>
    <h2 align="center" > Selamat Kepada Mahasiswa 
    <br> NAMA <?= $nama; ?>
    <br> NIM <?= $nim; ?> 
    <br> berhasil menyelesaikan studi S1 dengan predikat 
    <br> <?= $status; ?></h2>

    <?= $this->renderSection('content'); ?>

    </div>
</body>

</html>
