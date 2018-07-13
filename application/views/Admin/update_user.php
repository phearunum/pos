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
            <li class="breadcrumb-item active"> Update User </li>
        </ol>
        <!-- Icon Cards-->
        <!-- Example DataTables Card-->
        <?php
        if(!empty($user)){
        foreach ($user as $list){
        ?>
                <div class="container">
            <div class="card  mx-auto mt-12">
                <div class="card-header">Update User </div>
                <div class="card-body">
                    <form id="frmUpdateUser">

                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputName">No ID :</label>
                                                    <input class="form-control"
                                                           type="text" placeholder="ID" name="t_UerID" readonly
                                                           value="<?php echo $list->t_UerID ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputLastName">First Name</label>
                                                    <input class="form-control" id="exampleInputLastName"
                                                           type="text" placeholder="Code" name="t_Username"
                                                           value="<?php echo $list->t_Username ?>"required >
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputLastName">Last Name</label>
                                                    <input class="form-control" id="exampleInputLastName"
                                                           type="text" placeholder="Code" name="t_Username"
                                                           value="<?php echo $list->t_Username ?>"required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputName">Account Name :</label>
                                                    <input class="form-control"
                                                           type="text" placeholder="Name" name="t_Accountname" required
                                                           value="<?php echo $list->t_Accountname ?>">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputLastName">Gender</label>
                                                    <select class="form-control" name="t_Sex">
                                                        <option value="Male" selected> Male </option>
                                                        <option value="Female" >Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <label for="exampleInputPassword1">Date  </label>
                                                    <input class="form-control" type="text" name="u_date"
                                                           placeholder="Date" value="<?php echo $list->u_date?>">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleConfirmPassword">Moth</label>
                                                    <input class="form-control" type="text" name="u_month"
                                                           placeholder="Month" value="<?php echo $list->u_month?>">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleConfirmPassword">Year</label>
                                                    <input class="form-control" type="text" name="u_year"
                                                           placeholder="Year"  value="<?php echo $list->u_year ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">

                                                    <img id="image-preview"  style="height:100px; width:100px;"  src="" >
                                                    <br/>
                                                    <input style="display:none" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png">
                                                    <div  class="btn btn-sm" style="width: 100px"
                                                          onclick="HandleBrowseClick('input-image-hidden');">upload</div>
                                                    <script type="text/javascript">
                                                        function HandleBrowseClick(input_image)
                                                        {
                                                            var fileinput = document.getElementById(input_image);
                                                            fileinput.click();
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                        <br/>
                        <hr/>
                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                    </form>

                </div>
                <div class="card-footer small text-muted"></div>
            </div>
        </div>
            <?php
        }

        }
        ?>

    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         id="mySmallModalupdae">
        <div class="modal-dialog modal-sm " role="document">
            <div class="modal-content" style="padding: 5px">
               <center> User updated</center>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper-->
    <?php
    include ('admin_layout/footer.php');
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

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
