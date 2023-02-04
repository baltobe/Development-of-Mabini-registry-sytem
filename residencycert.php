<?php include('includes/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include('includes/navbar.php') ?>
        <?php include('includes/sidebar.php') ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Certificate of Residency</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Certificate list</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="dist/img/MABINI SEAL.PNG" height="80" width="80">
            </div>
            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Record list</h3>
                                    <div class="card-tools">
                                        <button data-bs-toggle="modal" data-bs-target="#dialog" class="btn btn-primary">Make Recidency</button>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="residentsTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tbody>
                                            <tr>
                                                <th>Head of Family</th>
                                                <th>Household #</th>
                                                <th>Sitio</th>
                                                <th>Total Member</th>
                                                <th>Option</th>
                                            </tr>
                                        </tbody>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <td>Segui, Robert B.</td>
                                                <td>12345</td>
                                                <td>Centro</td>
                                                <td>6</td>
                                                <td>
                                                    <a class="btn btn-app">
                                                        <i class="fas fa-edit btn-block btn-outline-info"></i> Edit
                                                    </a> <a class="btn btn-app">
                                                        <i class="fas fa-solid fa-trash-can btn-block btn-outline-danger btn-flat"></i>delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <td>Diginiba, Natoy C.</td>
                                                <td>3456</td>
                                                <td>Bahay Nayon</td>
                                                <td>5</td>
                                                <td><a class="btn btn-app">
                                                        <i class="fas fa-edit btn-block btn-outline-info"></i> Edit
                                                    </a> <a class="btn btn-app">
                                                        <i class="fas fa-solid fa-trash-can btn-block btn-outline-danger "></i>delete
                                                    </a></td>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <td>Diginiba, Natoy C.</td>
                                                <td>6789</td>
                                                <td>Espano</td>
                                                <td>7</td>
                                                <td><a class="btn btn-app">
                                                        <i class="fas fa-edit btn-block btn-outline-info"></i> Edit
                                                    </a> <a class="btn btn-app">
                                                        <i class="fas fa-solid fa-trash-can btn-block btn-outline-danger "></i>delete
                                                    </a></td>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <td>Diginiba, Natoy C.</td>
                                                <td>90123</td>
                                                <td>Bahay Nayon</td>
                                                <td>4</td>
                                                <td><a class="btn btn-app">
                                                        <i class="fas fa-edit btn-block btn-outline-info"></i> Edit
                                                    </a> <a class="btn btn-app">
                                                        <i class="fas fa-solid fa-trash-can btn-block btn-outline-danger "></i>delete
                                                    </a></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <?php include('includes/scripts.php') ?>


    <div id="dialog" class="modal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Print</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#residentsTable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#residentsTable_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>