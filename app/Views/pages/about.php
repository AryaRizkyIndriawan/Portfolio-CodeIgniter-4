<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>About Me :</h1>
            <!DOCTYPE html>
            <html>

            <head>
                <title>Biodataku</title>
            </head>

            <body>
                <table border="0" width="800px" align="left" cellpadding="2">
                    <tr align="center">
                        <th colspan="3" bgcolor="#CC99FF">
                            <h2 class="w2">Biodata Diri Saya :</h2>
                        </th>
                    </tr>
                    <tr>
                        <td rowspan="7">
                            <img src="/img/foto.jpg" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: Arya Rizky Indriawan</td>
                    </tr>
                    <tr bgcolor="#C0C0C0">
                        <td class="w1">NIM</td>
                        <td class="w1">: 6304920060054</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: KA-P. 20.1</td>
                    </tr>
                    <tr bgcolor="#C0C0C0">
                        <td class="w1">Prodi</td>
                        <td class="w1">: D4 Komputerisasi Akuntansi</td>
                    </tr>
                    <tr>
                        <td>Kampus</td>
                        <td>: Universitas Stekom Weleri</td>
                    </tr>
                    <tr bgcolor="#C0C0C0">
                        <td class="w1">Keahlian Coding</td>
                        <td>
                            <ul>
                                <li class="w1">Pemrograman Visual</li>
                                <li class="w1">Pemrograman Mobile</li>
                                <li class="w1">Pemrograman Web</li>
                                <li class="w1">Pemrograman Basis Data</li>
                            </ul>
                        </td>
                    </tr>
            </body>

            </html>
        </div>
    </div>
</div>
<style>
    .w1 {
        color: #212529;
    }

    .w2 {
        color: #212529;
    }
</style>
<?= $this->endSection(); ?>