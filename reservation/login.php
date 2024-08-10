<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <a href="../index.php" class="navbar-brand px-lg-4 m-0">
                    <h1 class="m-0 display-4 text-uppercase text-white">CIATER</h1>
                </a>

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="usernameHelp" name="usr"
                                                placeholder="Enter Username..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="pwd"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login"
                                            name="sv">

                                        <?php

                                        if (isset($_POST["sv"])) {
                                            include("koneksi.php");
                                            $user = $_POST["usr"];
                                            $pass = $_POST["pwd"];

                                            $qry = mysqli_query($conn, "select * from datauser where nama = '$user' and password = '$pass'");
                                            $cek = mysqli_num_rows($qry);
                                            $dqry = mysqli_query($conn, "select * from datauser where nama='$user'");
                                            $data = mysqli_fetch_array($dqry);

                                            if ($cek > 0) {

                                                if ($data['role'] == "admin") {
                                                    session_start();
                                                    $_SESSION['ad'] = $user;
                                                    header("location:reservation.php");
                                                } elseif ($data['role'] == "user") {
                                                    session_start();
                                                    $_SESSION['us'] = $user;
                                                    header("location:reservation-member.php");
                                                }
                                            } else {
                                                echo "<br>";
                                                echo "<div class='alert alert-danger' role='alert'>Username atau Password Salah!.</div>";
                                            }
                                        }

                                        ?>
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>