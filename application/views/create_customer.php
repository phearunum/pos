<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
<?php

if (isset($_SESSION['id'])) {
    $id =$_SESSION['id'];
    $Acc =$_SESSION['acc'];
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php
    include ('layout/header.php');
    include('layout/style.php');
    ?>
</head>
<body>
<section class="container-fluid  headerthis-card " style="height: 15%;padding: 0px">
    <!-- Sidebar -->
    <?php
    include('layout/aside.php');
    ?>
    <!-- Page Content -->
    <div id="main" class=" this-container this-padding-0 " style="margin-left:7%;">
        <div class="row">
            <div class="col-sm-12 this-padding-0">
                <div class="col-sm-12 this-metro-dark-red this-padding header-top this-border-bottom
                this-padding-0">
                    <div class=" this-bar-block this-animate-left " style="display:none;" id="mySidebar">
                        <button  class="this-bar-item this-metro-dark-red this-large">
                            <i class="fa fa-arrow-circle-left" style="font-size:24px" onclick="w3_close()">  <span> Category </span> </i>
                        </button>
                        <br/>
                        <div class="this-container">
                            <div class="this-container this-padding this-text-black ">
                                <div class="row">
                                    <?php
                                    if (!empty($cat)){
                                        foreach ($cat as $c){
                                            ?>
                                            <a href="/category-<?php echo $c->t_catID  ?>">
                                                <div class="col-xs-4 col-md-2 col-sm-2 this-padding this-text-black this-center">
                                                    <div class="this-border">
                                                        <img src="<?php if($c->t_catImg==""){echo 'https://www.molitics.in/images/dummy_feed_image.png';}else{echo $c->t_catImg;}   ?>"
                                                             class="img-responsive "/>
                                                    </div>
                                                    <p> <?php echo $c->t_catName?></p>
                                                </div>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 this-margin-top " id="product">
                        <div  class="this-bar-item this-metro-dark-red this-large this-margin-left ">
                            <h4 style="font-size:20px;margin-top: -5px">
                                <a href="/">
                                    <i class="fa fa-arrow-circle-left" style="font-size:24px" onclick="w3_close()"></i>
                                </a>
                                Create Customer
                            </h4>
                        </div>
                        <div class="this-container this-padding-top this-margin-top">
                            <div class="this-container this-padding this-text-black ">
                                <div class="row">
                                   <div class="col-sm-12 this-center"> <h3>Create Customer</h3> </div>
                                    <div class=" col-sm-offset-1 col-sm-9">
                                        <form id="frmcreateUser">
                                            <div class="form-group">
                                                <label for="sel1">Customer Type:</label>
                                                <select class="form-control" name="cus_Type">
                                                    <option>Walk-In</option>
                                                    <option>Order</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Table Number :</label>
                                                <select class="form-control" name="t_table">
                                                    <option>Table 1</option>
                                                    <option>Table 2 </option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Customer:</label>
                                                <input type="text" class="form-control " name="t_cusName" >
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Phome Or Email :</label>
                                                <input type="text" class="form-control " name="t_cusEmail" >
                                            </div>
                                            <button type="submit" class="btn btn-default">Create</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
