<?php
    $nama = $_GET["nama"];
    $nomorktp = $_GET["nomorktp"];
    $alamat = $_GET["alamat"];
    $prov = $_GET["prov"];
    $kab = $_GET["kab"];
    $kec = $_GET["kec"];
    $kel = $_GET["kel"];


    $jmlhkapal = $_GET["jmlhkapal"];
    $kapal = $_GET["kapal"];
    $kegiatan = $_GET["kegiatan"];
    $pembuatan = $_GET["pembuatan"];

    $NR = $_GET["NR"];
    $nohp = $_GET["nohp"];
    $NPD = $_GET["NPD"];
    $KPD = $_GET["KPD"];
    $tgl = $_GET["tgl"];

    $Catatan = $_GET["Catatan"];
    $tombol = $_GET["tombol"];


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