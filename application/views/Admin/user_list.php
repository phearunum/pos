<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php
include('admin_layout/navbar.php');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Product List </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price IN </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($user)){
                            foreach ($user as $list){
                                ?>
                                <tr id="row<?php echo $list->t_UerID ?>">
                                    <td><?php echo $list->t_Username ?></td>
                                    <td><?php echo $list->t_Sex ?></td>
                                    <td><?php echo $list->t_DateOfBD ?></td>
                                    <td><?php echo $list->t_Accountname ?></td>
                                    <td><?php echo $list->t_Remark ?></td>
                                    <td><?php echo $list->t_Password ?></td>

                                    <td>
                                        <button class="btn btn-sm btn-danger " data-toggle="modal" data-target="#del<?php echo $list->t_UerID ?>">
                                            <i class="fa fa-times-rectangle"></i>
                                            Del </button>
                                        <a href="/admin/update_user/<?php echo $list->t_UerID ?>">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-external-link"></i>Edit
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="del<?php echo $list->t_UerID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Do you want to delete ?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-sm" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-danger btn-sm"
                                                        onclick="deluser(<?php echo $list->t_UerID ?>)">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php
    include ('admin_layout/footer.php');
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-datatables.js"></script>

</div>
<script src="/js/App.js"></script>
</body>

</html>
