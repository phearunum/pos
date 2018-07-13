<!doctype html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
    header("location:/");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/css/sihalive-style.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/jquery-ui.min.css"/>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="this-blue-gray">
 <div class="this-container  this-padding-64 this-main">

       <div class="row">
           <div class="col-sm-12" style="margin-top: 50px">
               <div class="col-xs-12 col-sm-4 col-md-4 col-sm-4"></div>
               <div class="col-xs-12 col-sm-4 col-md-4">
                   <div class="this-container this-margin-top this-padding-large">
                       <center><h3>Account Login </h3></center>
                       <hr/>
                       <form action="/main/doLogin" method="post">
                           <div class="form-group">
                               <label for="email">Account Name :</label>
                               <input type="text" class="form-control" name="t_Accountname">
                           </div>
                           <div class="form-group">
                               <label for="pwd">Password:</label>
                               <input type="password" class="form-control" name="t_Password">
                           </div>

                           <button type="submit" class="btn btn-info">Access Login </button>
                       </form>

                   </div>
               </div>
           </div>
       </div>

 </div>

</body>
</html>