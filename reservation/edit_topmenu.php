<?php
include("koneksi.php");

$id = $_GET['idx'];
$qry = mysqli_query($conn, "select * from pesanan where id='$id'");
$data = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include("topbar.php");
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Reservation</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="reservation.php" class="m-0 font-weight-bold text-primary">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form class="user" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="<?php echo $data["nama"] ?>" required></input>
                                    </div>
                                </div>

                                <div class="form-group-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="<?php echo $data["email"] ?>" required></input>
                                    </div>
                                </div>

                                <div class="form-group-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><label for="desc">Nomor Telepon</label>
                                        <textarea class="form-control" id="telepon" name="telepon"
                                            required><?php echo $data["telepon"] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group-row">
                                    <div class="col-sm-2 mb-3 mb-sm-0"><label for="tgl">Tanggal</label>
                                        <input type="date" class="form-control" id="tgl" name="tgl"
                                            value="<?php echo $data["tgl"] ?>" required></input>
                                    </div>
                                </div>

                                <div class="form-group-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><label for="bnyk"
                                            class="form-label">Paket</label>
                                        <select class="custom-select bg-transparent border-primary px-4" name="bnyk"
                                            style="height: 49px;">
                                            <option selected><?php echo $data["banyaknya"] ?></option>
                                            <option value="Paket Panas">Paket Panas - Rp770.000/malam</option>
                                            <option value="Paket Kebakar">Paket Kebakar - Rp980.000/malam</option>
                                            <option value="Paket Gosong">Paket Gosong - Rp1.100.000/malam</option>

                                        </select>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" value="update" class="btn btn-primary" name="sv">
                                <input type="reset" value="reset" class="btn btn-warning">
                            </form>
                            <br>

                            <?php

                            if (isset($_POST["sv"])) {
                                include("koneksi.php");

                                $nama = strip_tags($_POST["nama"]);
                                $email = strip_tags($_POST["email"]);
                                $telepon = strip_tags($_POST["telepon"]);
                                $tgl = strip_tags($_POST["tgl"]);
                                $banyak = strip_tags($_POST["bnyk"]);

                                $sql = "UPDATE pesanan set nama='$nama', email='$email', telepon='$telepon', tgl='$tgl', banyaknya='$banyak' where id = $id";


                                if ($conn->query($sql) === TRUE) {
                                    echo "<script>alert('Reservasi Berhasil Diubah');document.location='reservation.php'</script>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }

                                $conn->close();
                            }

                            ?>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <?php
    include("logoutmodal.php");
    ?>

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

</body>

</html>