<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
if(isset($_POST['btn'])){
    $db->delete_data($_POST['id']);
    header("location:admin.php");
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

    <title>Hello, world!</title>
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
          <a class="nav-link" href="form.php">PPDB</a>
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
<br>
                    <!-- Page Heading -->
                    <div class="container">
                    <h1 class="h3 mb-2 text-gray-800">Table siswa</h1>
                    <p class="mb-4">Data table siswa pendaftaran online tahun ajaran 2022-2025</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Nama</th>
                                            <th>Tempat lahir</th>
                                            <th>Tanggal lahir</th>
                                            <th>Warga negara</th>
                                            <th>Email</th>
                                            <th>No.Telphone</th>
                                            <th>Alamat</th>
                                            <th>Asal Smp</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Penghasilan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tempat lahir</th>
                                            <th>Tanggal lahir</th>
                                            <th>Warga negara</th>
                                            <th>Email</th>
                                            <th>No.Telphone</th>
                                            <th>Alamat</th>
                                            <th>Asal Smp</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Penghasilan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <?php 
                                    $no = 1;
                                    foreach($data_barang as $row){
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $row ['nama'] ?></td>
                                                <td><?= $row ['tempat_lahir'] ?></td>
                                                <td><?= $row ['tanggal_lahir'] ?></td>
                                                <td><?= $row ['warga_negara'] ?></td>
                                                <td><?= $row ['alamat'] ?></td>
                                                <td><?= $row ['email'] ?></td>
                                                <td><?= $row ['tlp'] ?></td>
                                                <td><?= $row ['smp'] ?></td>
                                                <td><?= $row ['ayah'] ?></td>
                                                <td><?= $row ['ibu'] ?></td>
                                                <td><?= $row ['penghasilan'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>
                                                    <form action="" method="post">
                                                        <input type="hidden" value="<?= $row['id']?>" name="id">
                                                    <button class="btn btn-danger" name="btn">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php 
                                            }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Arifin 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
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