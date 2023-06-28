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
    <script src="js/spotlight.bundle.js"></script>

    <!-- profil DPM -->
    <!-- <link href="css/struktur.css" rel="stylesheet" />
    <link href="https://dpm.stis.ac.id/assets/vendor/datatables2/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://dpm.stis.ac.id/assets/vendor/datatables2/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" /> -->

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

    <!-- Popup saat nekan tombol di pengumuman -->
    <div class="modal fade" id="tampilPengumumanAdminModal" tabindex="-1" role="dialog" aria-labelledby="tampilPengumumanAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="popup_image rounded d-block w-100" src="#" alt="#">
                </div>
            </div>
        </div>
    </div>

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

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/changeaccess.js"></script>
    <script src="js/tampilmodal.js"></script>
    <script src="js/arsipsistembaru.js"></script>
    <script src="js/statistikreimburse.js"></script>
    <script src="js/script.js"></script>

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
        $(document).ready(function() {
            $('#tabelsaya').DataTable({

                "lengthMenu": [
                    [25, 50, 75, -1],
                    [25, 50, 75, "All"]
                ],
                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [3],
                    orderData: [3, 0]
                }],
                "scrollX": true
            });
        });
    </script>


</body>

</html>