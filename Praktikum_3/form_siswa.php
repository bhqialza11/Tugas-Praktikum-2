<?php
require_once 'libfungsi.php';
// Mengambil data yang telah di input
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);

// Menampilkan Grade menggunakan elseif
$huruf = grade($_nilai);
// Menampilkan Data
echo "Nama : $nama_siswa";
echo "<br/> Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Niai Tugas : $tugas";
echo "<br/>Grade : $huruf";
echo "<br/>Keterangan : $hasil_ujian";
echo "<br/>Data telah di $proses";
?>