<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UT-8">
        <meta name="viewport" content="width-device-width, Initial-scale-1.0">
        <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
        <title>Data Entry</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <title>Data Anggota</title>
    </head>
    <body>
        <nav class="navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php" style="color: #fff;">
                CRUD Dengan Ajax
            </a>
        </nav>
        <div class="container">
            <h2 align="center" style="margin: 30px;">Data Anggota</h2>
            <form method="post" class="form-data" id="form-data">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" id="id">
                            <input type="text" name="nama" id="nama" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" id="jkel1" value="L" required="true"> Laki-laki
                            <input type="radio" name="jenis_kelamin" id="jkel2" value="P"> Perempuan
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                    <p class="text-danger" id="err_alamat"></p>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                    <p class="text-danger" id="err_no_telp"></p>
                </div>
                <div class="form-group">
                    <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
            <hr>
            <div class="data"></div>
        </div>
        <!-- jQuery and JavaScript dependencies -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- DataTable -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            // Mengirimkan Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.data').load("data.php");
        });
        </script>
    </body>
</html>