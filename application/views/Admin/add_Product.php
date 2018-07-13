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
            <div class="card  mx-auto mt-12">
                <div class="card-header">Create Product </div>
                <div class="card-body">
                    <form id="frmSaveProduct">
                        <div class="row">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-row">

                                        <div class="col-md-6">
                                            <label for="exampleInputLastName">Category</label>
                                            <select class="form-control" name="t_catID">
                                                <?php
                                                if(!empty($cat)){
                                                    foreach ($cat as $c){
                                                        ?>
                                                        <option value="<?php echo $c->t_catID  ?>"><?php echo $c->t_catName  ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputLastName">Barcode</label>
                                            <input class="form-control" id="exampleInputLastName"
                                                   type="text" placeholder="Code" name="t_proBarcode" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="exampleInputName">Product :</label>
                                            <input class="form-control" id="exampleInputName"
                                                   type="text" placeholder="Name" name="t_proName" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleConfirmPassword">Quantity</label>
                                            <input class="form-control" type="number" name="t_proQTY"
                                                   placeholder="00" required >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleConfirmPassword">Alert Quantity</label>
                                            <input class="form-control" type="number" name="t_proQtyAlert"
                                                   placeholder="00" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">

                                        <div class="col-md-4">
                                            <label for="exampleConfirmPassword">Cost</label>
                                            <input class="form-control" type="text" name="t_proCost"
                                                   placeholder="00" required >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleConfirmPassword">Price</label>
                                            <input class="form-control" type="text" name="t_proPrice"
                                                   placeholder="00" required >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleConfirmPassword">Tax Method</label>
                                            <select class="form-control" name="t_proTax">
                                                <option value="0">Inclusive</option>
                                                <option value="0">Exclusive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">

                                        <div class="col-md-12">
                                            <label for="exampleConfirmPassword">Details</label>
                                            <textarea class="form-control" rows="4" name="t_proDes"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                        <br/>
                        <hr/>
                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                    </form>

                </div>
                <div class="card-footer small text-muted"></div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Product Saved ! </p>
                </div>
                <div class="modal-footer">

                        <button type="button" class="btn btn-danger"  data-dismiss="modal" >Ok</button>

                </div>
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
