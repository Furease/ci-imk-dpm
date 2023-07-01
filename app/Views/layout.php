<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= esc($title) ?></title>
    <link rel="icon" type="image/png" href="img/dpm.png">

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fluid-gallery.css">
    <!-- Script gallery viewer -->
    <script src="/js/spotlight.bundle.js"></script>

    <!-- profil DPM -->
    <link href="css/struktur.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.bootstrap4.css">
    <link href="assets/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'components/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-white">

            <!-- Main Content -->
            <div id="content">

                <?php include 'components/topbar.php'; ?>

                <?php echo $this->renderSection('content'); ?>

            </div>
            <!-- End of Main Content -->

            <?php include 'components/footer.php'; ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apabila anda yakin untuk logout anda dapat menekan tombol iya, jika anda ingin kembali ke halaman web anda bisa menekan tombol tidak.
                </div>
                <div class="modal-footer">
                    <a class="btn btn-danger" href="/">Iya</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Aspirasi Modal-->
    <div class="modal fade" id="aspirasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda sudah yakin untuk mengirim aspirasi?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apabila anda yakin untuk mengirim aspirasi anda dapat menekan tombol iya, jika anda ingin kembali ke halaman web anda bisa menekan tombol tidak.
                </div>
                <div class="modal-footer">
                    <a class="btn btn-danger" href="/aspirasi">Iya</a>
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/changeaccess.js"></script>
    <script src="js/tampilmodal.js"></script>
    <script src="js/statistikreimburse.js"></script>
    <script src="js/script.js"></script>
    <script src="../assets/datatables/dataTables.bootstrap4.js"></script>
    <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/jquery.dataTables.js"></script>
    <script src="js/arsipsistembaru.js"></script>
    <!-- SWEET ALERT -->
    <script src="swal/sweetalert2.all.min.js"></script>
    <script src="swal/myscript.js"></script>

    <!-- PENGUMUMAN ADMIN -->
    <script src="js/tampilpengumumandiadmin.js"></script>


    <!-- arsip -->
    <!-- Page level plugins -->
    <script src="assets/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
    <script>
        $('#aspirasiForm').on('submit', function(e) {
            $('#aspirasiModal').modal('show');
            e.preventDefault();
        });
    </script>

    <script>
        filterSelection("galeri_semua")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "galeri_semua") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show-galeri");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show-galeri");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn-galeri");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("activ");
                current[0].className = current[0].className.replace(" activ", "");
                this.className += " activ";
            });
        }
    </script>
</body>

</html>