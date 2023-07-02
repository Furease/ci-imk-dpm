<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DPM Login</title>
    <link rel="icon" type="image/png" href="https://dpm.stis.ac.id/assets/img/profile/dpm.png">

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Barlow:wght@200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900i" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }

        /* input focus more elegant */
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus {
            border-bottom: 2px solid #5fbed6;
            box-shadow: 0 1px 0 0 #5fbed6;
        }
    </style>

</head>

<body style="background: linear-gradient(244.04deg, rgba(255, 255, 255, 0.27) 10.63%, rgba(15, 121, 193, 0.15) 104.94%), #FFFFFF;
    background-image: url('img/login-bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
">
    <div class="container" style="align-items: center; height: 100vh">
        <div class="flex">
            <input type="hidden" name="login_error" data-flashdata="" id="login_error">

            <div class="row">
                <div class="col-lg-6 d-none d-lg-block align-self-center">
                    <img class="img-fluid" src="https://dpm.stis.ac.id/assets/img/profile/dpm.svg" alt="Dewan Perwakilan Mahasiswa" width="75%">
                </div>
                <div class="col-lg-6">
                    <div class="card m-4 py-4 px-5 shadow-sm">
                        <div class="text-center mb-2">
                            <h1>Selamat datang, Aspician!</h1>

                        </div>
                        <div id="container" style="height:auto; overflow: auto;">
                            <div id="tab-1" id="content">
                                <span>Silakan masuk dengan akun Sipadu</span>
                                <div class="text-center">
                                    <img id="login-sipadu" class="window-btn" style="width: 10rem;" src="img/sipadu.png" alt="Tombol admin">
                                </div>
                                <form name="myForm" class="user" action="beranda" method="get" onsubmit="return validateForm()">
                                    <div class="form-group">
                                        <!-- <label for="nim">NIM</label> -->
                                        <input type="number" class="form-control  border-top-0 border-right-0 border-left-0" id="nim" aria-describedby="emailHelp" placeholder="NIM" style="border-radius: 0; border-bottom-width: medium">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control border-top-0 border-right-0 border-left-0" id="password" placeholder="Password" style="border-radius: 0; border-bottom-width: medium">
                                    </div>
                                    <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div> -->
                                    <button type="submit" class="btn btn-primary btn-block font-weight-bold mt-4">
                                        Masuk
                                    </button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <div>
                                        <h6>Atau masuk dengan akun DPM</h6>
                                        <img id="login-dpm" class="window-btn" style="width: 6rem;" src="https://dpm.stis.ac.id/images-cm/icons/group-1s.svg" alt="Tombol admin">
                                    </div>


                                    <!-- <img class="window-btn" src="https://dpm.stis.ac.id/images-cm/icons/group-2.svg"
                    onclick="open_window_sipadu()" alt="Tombol sipadu" width="65%"> -->
                                    <!-- <img class="window-btn" src="https://dpm.stis.ac.id/images-cm/icons/group-2.svg"
                                onclick="window.location.href='../index.html';" alt="Tombol sipadu" width="65%"> -->
                                </div>
                            </div>
                            <div id="tab-2" class="" style="display: none;">
                                <span>Silakan masuk dengan akun DPM</span>
                                <br>
                                <br>
                                <div class="text-center">
                                    <img id="login-dpm-2" class="window-btn" style="width: 6rem;" src="https://dpm.stis.ac.id/images-cm/icons/group-1s.svg" alt="Tombol admin">
                                </div>
                                <br>
                                <form name="myForm2" class="user" action="beranda" method="get" onsubmit="return validateForm2()">
                                    <div class="form-group">
                                        <!-- <label for="nim">NIM</label> -->
                                        <input type="email" class="form-control  border-top-0 border-right-0 border-left-0" id="email" aria-describedby="emailHelp" placeholder="Email" style="border-radius: 0; border-bottom-width: medium">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control border-top-0 border-right-0 border-left-0" id="password-email" placeholder="Password" style="border-radius: 0; border-bottom-width: medium">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block font-weight-bold mt-4">
                                        Masuk
                                    </button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <div>
                                        <h6>Atau masuk dengan akun Sipadu</h6>
                                        <img id="login-sipadu-2" class="window-btn" style="width: 10rem;" src="img/sipadu.png" alt="Tombol admin">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="container sticky-footer p-1">

            <div class="copyright text-center font-barlow">
                <a class="text-decoration-none mx-2" href="">
                    <i class="fi fi-brands-instagram text-black-50"></i>
                </a>
                <a class="text-decoration-none mx-2" href="">
                    <i class="fi fi-rr-envelope text-black-50"></i>
                </a>
                <a class="text-decoration-none mx-2" href="">
                    <i class="fi fi-brands-twitter text-black-50"></i>
                </a>
                <br>
                <br>
                <span>Copyright &copy; 2023 Website Kelompok 1 IMK 3SI1</span>
            </div>

        </footer>
    </div>



    <!-- <div class="modal fade" id="modalLoginAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Masukkan Akun DPM</h1>
                            </div>

                            <form class="user" method="post" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nim" name="nim" autofocus placeholder="E-mail Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-google btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <p class="text-center text-info pt-3"><a href="#">Lupa password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script type="text/javascript">
        function open_window_sipadu() {
            sipadu_window = window.open("https://dpm.stis.ac.id/oauth/redirector", "sipadu",
                "height=700,width=700,status=no,titlebar=no,menubar=no,top=10,left=300", true);
        }

        function verification(data1, data2) {
            sipadu_window.close();
            $.ajax({
                url: "https://dpm.stis.ac.id/auth/verifSipadu",
                type: "POST",
                data: {
                    'data1': data1,
                    'data2': data2
                },
                global: false,
                async: false,
                success: function(result) {
                    if (result) {
                        window.location = "https://dpm.stis.ac.id/dpm";
                    }
                }
            });
        }

        if ('-' == 1) {
            open_window_sipadu();
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <!-- <script src="js/jquery.bootstrap.newsbox.min"></script> -->

    <!-- SWEET ALERT -->
    <script src="swal/sweetalert2.all.min.js"></script>
    <script src="swal/myscript.js"></script>

    <script>
        // Change the content and animate the scroll to the bottom
        $('#login-dpm').click(function() {
            $('#tab-2').show(500);
            $('#tab-1').hide(500);
        });

        $('#login-sipadu-2').click(function() {
            $('#tab-1').show(500);
            $('#tab-2').hide(500);
        });


        // validation login using action form
        function validateForm() {
            var x = document.forms["myForm"]["nim"].value;
            var y = document.forms["myForm"]["password"].value;
            if (x == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'NIM tidak boleh kosong!',
                })
                return false;
            } else if (y == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password tidak boleh kosong!',
                })
                return false;
            }
        }

        function validateForm2() {
            var x = document.forms["myForm2"]["email"].value;
            var y = document.forms["myForm2"]["password-email"].value;
            if (x == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email tidak boleh kosong!',
                })
                return false;
            } else if (y == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password tidak boleh kosong!',
                })
                return false;
            }
        }
    </script>

</body>

</html>