<?php
include('koneksi.php');
$db = new database();

if(isset($_POST['submit'])){
  $db->tambah_data($_POST['nama'],$_POST['tgl_lahir'],$_POST['tpt_lahir'],$_POST['warga_negara'],$_POST['alamat'],$_POST['email'],$_POST['tlp'],$_POST['smp'],$_POST['ayah'],$_POST['ibu'],$_POST['penghasilan']);
	header('location:leanding_page.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="form.css">
    <!-- font -->

    <title>Form PPDB</title>
  </head>
  <body style="background-color: #178774;">
      <!-- navbar -->
  <nav class="navbar navbar-expand-lg  navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">Smk Informatika Pesat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="leanding_page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PPDB</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- akhir navbar -->
<!-- from -->
<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="img/gedung-sekolah-scaled.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Kolom Pendaftaran</h3>

            <form class="px-md-2" method="post">
              
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="nama" />
                <label class="form-label" for="form3Example1q">Nama</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input
                      type="date"
                      class="form-control"
                      id="exampleDatepicker1"
                      name="tgl_lahir"
                    />
                    <label for="exampleDatepicker1" class="form-label">tanggal lahir</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="tpt_lahir"/>
                <label class="form-label" for="form3Example1q">tempat lahir</label>
              </div>
              
              </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="email" id="form3Example1w" class="form-control" name="email" />
                    <label class="form-label" for="form3Example1w">Email</label>
                  </div>
                   
                </div>

                <div class="col-md-6 mb-4">
                  <input type="tel" id="form3Example1w" class="form-control" name="tlp"/>
                  <label class="form-label" for="form3Example1w">no.telphone </label>
                </div>

                <div class="col-md-6 mb-4">
                  <input type="tel" id="form3Example1w" class="form-control" name="warga_negara"/>
                  <label class="form-label" for="form3Example1w">Warga Negara </label>
                </div>

                <div class="col-md-6 mb-4">
                  <input type="text" id="form3Example1w" class="form-control" name="alamat"/>
                  <label class="form-label" for="form3Example1w">alamat </label>
                </div>

                
                <div class="col-md-6 mb-4">
                  <input type="text" id="form3Example1w" class="form-control" name="smp" />
                  <label class="form-label" for="form3Example1w">Asal smp </label>
                </div>

                
                <div class="col-md-6 mb-4">
                  <input type="text" id="form3Example1w" class="form-control" name="ayah" />
                  <label class="form-label" for="form3Example1w">Nama ayah </label>
                </div>

                <div class="col-md-6 mb-4">
                  <input type="text" id="form3Example1w" class="form-control" name="ibu" />
                  <label class="form-label" for="form3Example1w">Nama ibu </label>
                </div>
                
                <div class="input-group mb-3">
                  <span class="input-group-text">RP</span>
                  <input type="text" class="form-control" name="penghasilan" aria-label="Dollar amount (with dot and two decimal places)">
                  <span class="input-group-text">.00</span>
                </div>
                <label>Penghasilan</label>
              </div>
              <div class="col-md-6 mb-4">
                <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Submit</button>
              </div>

            </div>
            
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- akhir form -->

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