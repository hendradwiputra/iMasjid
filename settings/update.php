<?php
  include("../scripts/db_connection.php");

  //if(isset($_POST["no"])) { 

    $sql = "UPDATE settings set nama_masjid = '". $_POST['nama_masjid']. "',alamat_masjid = '".$_POST['alamat_masjid']."',";
    $sql.= "running_teks = '". $_POST['running_teks']. "',kecepatan_teks = '". $_POST['kecepatan_teks']. "',";
    $sql.= "durasi_slide = '". $_POST['durasi_slide']. "',";
    $sql.= "koreksi_hijriah = '".$_POST['koreksi_hijriah']."',durasi_adzan = '".$_POST['durasi_adzan']."',";
    $sql.= "iqomah_shubuh = '".$_POST['iqomah_shubuh']."',iqomah_dzuhur = '".$_POST['iqomah_dzuhur']."',";
    $sql.= "iqomah_ashar = '".$_POST['iqomah_ashar']."',iqomah_maghrib = '".$_POST['iqomah_maghrib']."',";
    $sql.= "iqomah_isya = '".$_POST['iqomah_isya']."',garis_lintang = '".$_POST['garis_lintang']."',";
    $sql.= "garis_bujur = '".$_POST['garis_bujur']."',zona_waktu = '".$_POST['zona_waktu']."',";
    $sql.= "metode_perhitungan = '".$_POST['metode_perhitungan']."' ";
    //$sql.= "WHERE no = '". $_POST['no'] ."'";

    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil disimpan";
    } else {
      echo "Terjadi kegagalan dalam penyimpanan data : " . $conn->error;
    }
  //}

  $sql = "SELECT * FROM settings";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $no = $row['no'];
      $nama_masjid = $row['nama_masjid'];
      $alamat_masjid = $row['alamat_masjid'];
      $kecepatan_teks = $row['kecepatan_teks'];
      $running_teks = $row['running_teks'];
      $durasi_slide = $row['durasi_slide'];
      $koreksi_hijriah = $row['koreksi_hijriah'];
      $durasi_adzan = $row['durasi_adzan'];
      $iqomah_shubuh = $row['iqomah_shubuh'];
      $iqomah_dzuhur = $row['iqomah_dzuhur'];
      $iqomah_ashar = $row['iqomah_ashar'];
      $iqomah_maghrib = $row['iqomah_maghrib'];
      $iqomah_isya = $row['iqomah_isya'];
      $garis_lintang = $row['garis_lintang'];
      $garis_bujur = $row['garis_bujur'];
      $zona_waktu = $row['zona_waktu'];
      $metode_perhitungan = $row['metode_perhitungan'];
    }
  }

  $conn->close();
  
?>