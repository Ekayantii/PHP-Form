<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Pendaftaran Kapal </title>
  </head>
  <body>
    
  <form name="" action="process_get.php" method="get">
    <div class="text-center bg-dark text-light p-3">
      <div class="container">
        <h1> WELCOME TO OUR COMMUNITY </h1>
        <p>
        This is a special website for registering your ship. When you have registered your ship, you can also register the best insurance for your ship.
        </p>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="icon/yacht" width="50" alt="">
      Ekayanti</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<div class="bg-success p-2 text-dark bg-opacity-25">
        <table>
        <h1 class="text-center"> I.DATA DIRI </h1>
            <tr>
                <td> Nama </td>
                <td>:</td>
                <td><input type="text" name="nama"></td>

            <br>
            <tr>
                <td> Nomor KTP </td>
                <td>:</td>
                <td><input type="text" name="nomorktp"></td>
            <br>
            <tr>
                <td> Alamat </td>
                <td>:</td>
                <td><textarea name="alamat" cols="20" row="10"></textarea></td>
            <br>
            <tr>
            <td> Provinsi </td>
                <td>:</td>
                <td><input type="text" name="prov"></td>
            <br>
            <tr>
            <td> Kabupaten/Kota </td>
                <td>:</td>
                <td><input type="text" name="kab"></td>
            <br>
            <tr>
            <td> Kecamatan </td>
                <td>:</td>
                <td><input type="text" name="kec"></td>
            <br>
            <tr>
            <td> Desa/Kelurahan </td>
                <td>:</td>
                <td><input type="text" name="kel"></td>
            <br>
            <tr>
                <td> Contact Person </td>
                <td>:</td>
                <td><input type="text" name="cp"></td>
            <br>
            <tr>
            <table>
                <h1 class="text-center"> II. DATA KAPAL </h1>
            <tr>
                <td> Jumlah Kapal </td>
                <td>:</td>
                <td><input type="text" name="jmlhkapal"></td>
            <br>
            <tr>
                <td> Nama Kapal </td>
                <td>:</td>
                <td><textarea name="kapal" cols="20" row="10"></textarea></td>
            <br>
            <tr>
                <td> Jenis Kegiatan Kapal </td>
                <td>:</td>
                <td><textarea name="kegiatan" cols="20" row="10"></textarea></td>
            <br>
            <tr>
                <td> Tempat/Tahun Pembuatan Kapal </td>
                <td>:</td>
                <td><textarea name="pembuatan" cols="20" row="10"></textarea></td>
            <br>
            <tr>
            <table>
                <h1 class="text-center"> III. PENGESAHAN </h1>
            <tr>
                <td> Nama Responden </td>
                <td>:</td>
                <td><input type="text" name="NR"></td>
            <br>
            <tr>
            <td> No.Telpon/HP </td>
                <td>:</td>
                <td><input type="text" name="nohp"></td>
            <br>
            <tr>
            <td> Nama Pengolahan Data </td>
                <td>:</td>
                <td><input type="text" name="NPD"></td>
            <br>
            <tr>
            <td> Kode Pengolahan Data/NIK </td>
                <td>:</td>
                <td><input type="text" name="KPD"></td>
            <br>
            <tr>
            <td> Tanggal Pencatatan </td>
                <td>:</td>
                <td><input type="text" name="tgl"></td>
            <br>
            <tr>
              <table>
              <h1 class="text-center"> V. CATATAN </h1> <br>
            <p> Apabila ada hal-hal yang memerlukan keterangan lebih lanjut, tuliskan pada blok ini. Selain informasi dari
            responden, <br> petugas pengolahan data juga bisa menambahkan catatan untuk memperjelas masalah yang berkaitan dengan daftar isian. </p> <br>
            <textarea id="catatan" name="Catatan" rows="15" cols="100"> </textarea>

                <td colspan="3"><input type="submit" value="simpan" name="tombol"></td>
            
</tr>
</table>
</form>
</body>
</html>
</div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>