<?php
    $nama = $_POST["nama"];
    $nomorktp = $_POST["nomorktp"];
    $alamat = $_POST["alamat"];
    $prov = $_POST["prov"];
    $kab = $_POST["kab"];
    $kec = $_POST["kec"];
    $kel = $_POST["kel"];


    $jmlhkapal = $_POST["jmlhkapal"];
    $kapal = $_POST["kapal"];
    $kegiatan = $_POST["kegiatan"];
    $pembuatan = $_POST["pembuatan"];

    $NR = $_POST["NR"];
    $nohp = $_POST["nohp"];
    $NPD = $_POST["NPD"];
    $KPD = $_POST["KPD"];
    $tgl = $_POST["tgl"];

    $Catatan = $_POST["Catatan"];
    $tombol = $_POST["tombol"];


    echo "<h1> I.DATA DIRI </h1>";
    echo "Nama: ".$nama."<br>";
    echo "Nomor KTP: ".$nomorktp."<br>";
    echo "Alamat: ".$alamat."<br>";
    echo "Provinsi: ".$prov."<br>";
    echo "Kabupaten: ".$kab."<br>"; 
    echo "Kecamatan: ".$kec."<br>";
    echo "Desa/Kelurahan: ".$kel."<br>";


    echo "<h1> II.DATA KAPAL </h1>";
    echo "Jumlah Kapal: ".$jmlhkapal."<br>";
    echo "Nama Kapal: ".$kapal."<br>";
    echo "Jenis Kegiatan: ".$kegiatan."<br>";
    echo "Tempat/Tanggal Pembuatan: ".$pembuatan."<br>";

    echo "<h1> III.PENGESAHAN </h1>";
    echo "Nama Responden: ".$NR."<br>";
    echo "No.Telpon/HP: ".$nohp."<br>";
    echo "Nama Pengolahan Data: ".$NPD."<br>";
    echo "Kode Pengolahan Data: ".$KPD."<br>";
    echo "Tanggal Pencatatan: ".$tgl."<br>";

    echo "<h1> IV.CATATAN </h1>";
    echo "Catatan : ".$Catatan."<br>";

?>