<?php
if($_POST){
    $NIK=$_POST['NIK'];
    $Nama=$_POST['Nama'];
    $alamat=$_POST['alamat'];
    $Jenis_kelamin=$_POST['Jenis_kelamin'];
    $No_telp=$_POST['No_telp'];
    $Jabatan=$_POST['Jabatan'];
    if(empty($NIK)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif(empty($Nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif(empty($Jenis_kelamin)){
        echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif(empty($No_telp)){
        echo "<script>alert('No telepon tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } elseif(empty($Jabatan)){
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='registrasi_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai (NIK, Nama, Alamat, Jenis_kelamin, No_telp, Jabatan) value ('".$NIK."','".$tNama."','".$Alamat."','".$jenis_kelamin."','".$No_telp."','".$Jabatan."','".md5($password)."','".$id."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='registrasi_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='registrasi_pegawai.php';</script>";
        }
    }
}
?>