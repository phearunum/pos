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
                                 Customer  </h4>
                        </div>
                        <div class="this-container this-padding-top this-margin-top">
                            <div class="this-container this-padding this-text-black ">
                                <div class="row">
                                    <?php
                                    if (!empty($cus)){
                                        foreach ($cus as $p){
                                            ?>
                                            <a href="<?=base_url()?>inv/<?php echo $p->t_cusID ?>">
                                                <div  style="cosur">
                                                    <div class="col-xs-4 col-md-2 col-sm-2 this-padding this-text-black
                                                this-center">
                                                        <div class="this-">
                                                            <img src="http://www.myiconfinder.com/uploads/iconsets/256-256-bdb6f1f690f53ec70da10b4eae374f88.png"
                                                                 class="img-responsive
"/>
                                                        </div>
                                                        <p> <?php echo $p->t_cusName  ?></p>
                                                    </div>
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
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
