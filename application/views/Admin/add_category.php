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
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Category List </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($cat)){
                                foreach ($cat as $list){
                                    ?>
                                    <tr id="row<?php echo $list->t_catID ?>">
                                        <td><?php echo $list->t_catID ?></td>

                                        <td><?php echo $list->t_catName ?></td>

                                        <td><img src="<?php echo $list->t_catImg ?>" style="height:40px" /></td>
                                        <td>
                                            <button class="btn btn-sm btn-danger " data-toggle="modal" data-target="#del<?php echo $list->t_catID ?>">
                                                <i class="fa fa-times-rectangle"></i>
                                                Del </button>
                                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#update<?php echo $list->t_catID ?>">
                                                <i class="fa
                                        fa-external-link"></i>Edit </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="del<?php echo $list->t_catID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Do you want to delete ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sx-3 col-sm-3 col-md-3">
                                                            <img src="https://spos.tecdiary.com/uploads/213c9e007090ca3fc93889817ada3115.png"
                                                                 class="img-responsive" style="width: 100px;height: 100px">
                                                        </div>
                                                        <div class="col-sx-8 col-sm-8 col-md-8">
                                                            Select "Logout" below if you are ready to end your current session.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <button class="btn btn-danger" onclick="delcategory(<?php echo $list->t_catID ?>)">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="update<?php echo $list->t_catID ?>" tabindex="-1"
                                         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header card-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Category

                                                        ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="frmUpdateCategorys">
                                                        <div class="form-group">
                                                            <div class="form-row">
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputName">No ID :</label>
                                                                    <input class="form-control"
                                                                           type="text" placeholder="ID" name="t_catID"
                                                                           value="<?php echo $list->t_catID ?>" readonly>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="exampleInputLastName">Category</label>
                                                                    <input class="form-control"
                                                                           type="text"  name="t_catName"
                                                                           value="<?php echo $list->t_catName ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="btn btn-primary btn-block"
                                                            onclick="update('<?php echo $list->t_catID ?>','<?php echo $list->t_catName ?>')
                                                                ">Update</div>
                                                    </form>
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
                <div class="card-footer small text-muted"></div>
            </div>
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
