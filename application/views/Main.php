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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="/js/myApp.js"></script>
    <?php
    include ('layout/header.php');
    include('layout/style.php');
    ?>
</head>
<body  ng-app="myApp" ondrop="drop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondragover="allowDrop(event)" >


<section class="container-fluid  headerthis-card " style="height: 15%;padding: 0px">
    <!-- Sidebar -->
    <?php
    include('layout/aside.php');
    ?>
    <!-- Page Content -->
    <div id="main" class=" this-container this-padding-0 " style="margin-left:7%;">
        <div class="row">

            <div class="col-sm-12 this-padding-0">
                <div class=" col-xs-8 col-md-8 col-sm-8 this-metro-dark-red this-padding header-top this-border-bottom
                this-padding-0">
                    <div class=" this-bar-block this-animate-left " style="display:none;" id="mySidebar">
                            <button  class="this-bar-item this-metro-dark-red this-large">
                                <i class="fa fa-arrow-circle-left" style="font-size:24px" onclick="w3_close()">  <span> Category </span> </i>
                            </button>
                        <br/>
                           <div class="this-container">
                               <?php include('category.php'); ?>
                           </div>
                     </div>

                    <div class="col-sm-12 this-margin-top " id="product">
                        <div  class="this-bar-item this-metro-dark-red this-large this-margin-left ">
                            <h4 style="font-size:20px;margin-top: -5px"> <i class="fa fa-navicon"></i> Product  </h4>
                        </div>
                        <div class="this-container this-padding-top this-margin-top">
                            <div class="this-container this-padding this-text-black ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div  id="prolist"></div>
                                    </div>

                                   <!-- <div class="row" ng-controller="category">
                                        <div id="menu_list"></div>
                                        <div class="col-xs-4 col-md-3 col-sm-3 this-padding this-text-black this-center" ng-repeat="x in names">
                                            <div class="this-border">
                                                <img src="https://static.vix.com/en/sites/default/files/styles/large/public/m/mcdonalds-secret-menu-hacks-1.jpg"class="img-responsive "/>
                                            </div>
                                            <p>{{x.full_name}}</p>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4 col-sm-4 bg-white this-border-left this-right this-padding-0"
                     style="right:0;position: absolute">
                    <div class="this-container this-border-bottom this-padding-0 this-center " style="margin: 0px">

                        <div class="col-xs-4 col-md-4 col-sm-4 btn this-border-right pos-btn-pay  ">
                            <h4 class="this-bar-item"><i class="fa fa-qrcode w3-xxxlarge" style="font-size: 30px"></i></h4>
                        </div>
                        <a href="/customer">
                            <div class="col-xs-4 col-md-4 col-sm-4 btn  this-border-right pos-btn-pay">
                                <h4 class="col-xs-4 col-md-4 col-sm-4"><i class="fa fa-users w3-xxxlarge" style="font-size: 30px"></i></h4>
                            </div>
                        </a>
                        <a href="/create_customer">
                            <div class="col-xs-4 col-md-4 col-sm-4 btn  this-border-right pos-btn-pay ">
                                <h4 class="this-bar-item"><i class="fa fa-user-plus w3-xxxlarge" style="font-size: 30px"></i></h4>
                            </div>
                        </a>

                    </div>
                    <div class="this-container this-border-bottom this-pale-blue this-padding "
                         style="margin:0px; height:60px">
                        <h4 class="this-large"> INVOICE:</h4>
                    </div>
                    <div class="this-container" style="min-height: 70%;height: 540px; overflow:scroll;padding: 0px">
                        <table class="this-table this-striped this-border-bottom this-metro-dark-red" >
                            <tr>
                                <th>Name</th>
                                <th style="width:50px">QTY</th>
                                <th style="width: 50px">Action</th>
                            </tr>
                            </table>
                        <table class="this-table this-striped" id="list">
                        <div ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)" ondragover="allowDrop(event)">

                        </div>

                        </table>
                    </div>
                    <div class="this-container this-border-top this-center " style="margin: 0px; height:100px;
                    padding: 0px;">
                        <div class="this-container this-border-bottom this-center this-padding this-metro-dark-red
                        this-text-white" style="margin:
                        0px;
                    height:40px;position: relative">
                            <p style="">Payment</p>
                        </div>
                        <div class="this-container this-border-bottom this-padding-0 this-center" style="margin: 0px">

                            <div class="col-xs-4 col-md-4 col-sm-4 this-border-right">
                                <h4 class="this-bar-item"><i class="fa fa-check-square w3-xxxlarge" style="font-size: 30px"></i></h4>
                            </div>
                            <div class="col-xs-4 col-md-4 col-sm-4 this-border-right ">
                                <h4 class="this-bar-item"><i class="fa fa-money w3-xxxlarge" style="font-size: 30px"></i></h4>
                            </div>
                            <div class="col-xs-4 col-md-4 col-sm-4 this-border-right ">
                                <h4 class="this-bar-item"><i class="fa fa-print w3-xxxlarge" style="font-size: 30px"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
