<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tampil Siswa</title>
</head>

<body>
    <h3 align="center">Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>NO TELEPON </th>
                <th>USERNAME</th>
                <th>JABATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_Tabel_pegawai = mysqli_query($conn, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
            $no = 0;
            while ($data_Tabel_pegawai = mysqli_fetch_array($qry_Tabel_pegawai)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_Tabel_pegawai['NIK'] ?></td>
                    <td><?= $data_Tabel_pegawai['Nama'] ?></td>
                    <td><?= $data_Tabel_pegawai['alamat'] ?></td>
                    <td><?= $data_Tabel_pegawai['Jenis_kelamin'] ?></td>
                    <td><?= $data_Tabel_pegawai['username'] ?></td>
                    <td><?= $data_Tabel_pegawai['Jabatan'] ?></td> <td><a href="ubah_siswa.php?id_siswa=<?= $data_Tabel_pegawai['id_siswa'] ?>"
                        class="btn btn-success">Ubah</a> | <a href="hapus.php?id_siswa=<?= $data_siswa['id_siswa'] ?>"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></ 
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
        
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
<a href="registrasi_pegawai.php"
                        class="btn btn-success">Tambah</a>

</html>