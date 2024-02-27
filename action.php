<?php
  $koneksi = mysqli_connect('localhost', 'root','', 'serkom');
  define('URL', 'http://localhost/serkom');

  if (!empty($_POST['totalBayar'])) {
    $namaPemesan = $_POST['namaPemesan'];
    $nomerIdentitas = $_POST['nomerIdentitas'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tanggalCek = $_POST['tanggalCek'];
    $durasiMenginap = $_POST['durasiMenginap'];
    $tipeKamar = $_POST['tipeKamar'];
    $includeBreakfast = $_POST['includeBreakfast'];
    $totalBayar = $_POST['totalBayar'];
    mysqli_query($koneksi, "INSERT INTO reservation VALUES (null, '$namaPemesan', '$nomerIdentitas', '$jenisKelamin', '$tanggalCek', '$durasiMenginap', '$tipeKamar', '$includeBreakfast', '$totalBayar')");
    $data= [
        'nama_pemesanan' => $namaPemesan,
        'nomer_identitas' => $nomerIdentitas,
        'jenis_kelamin' => $jenisKelamin,
        'tgl_cek' => $tanggalCek,
        'durasi' => $durasiMenginap,
        'tipe_kamar' => $tipeKamar,
        'include_breakfast' => $includeBreakfast,
        'total_bayar' => $totalBayar
    
    ];
    // include_once('konfirmasi_pemesanan.php');
    // die();
  }

  function connect()
  {
    $mysqli = new mysqli('localhost','root','','serkom');
    // Check connection
    if ($mysqli -> connect_errno) {
        throw new Exception("Database error : " . $mysqli -> connect_error); //Handle Error
    }

    // Mengembalikan nilai koneksi
    return $mysqli;

  }
















?>
