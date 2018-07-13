<div class="this-sidebar this-metro-dark-red this-card this-center this-padding-0" style="width:7%;
    padding: 0px!important;">
    <a href="/">
        <div class="this-border-bottom btn btn-block pos-btn-menu">
            <h4 class="this-bar-item"><i class="fa fa-user-circle-o w3-xxxlarge" style="font-size: 30px"></i></h4>
        </div>
    </a>
   <a href="/">
       <div class="this-border-bottom btn btn-block pos-btn-menu " >
           <h4 class="this-bar-item"><i class="fa fa-desktop" style="font-size: 30px"></i></h4>
       </div>
   </a>
    <div class="this-border-bottom btn btn-block pos-btn-menu " onclick="w3_open()">
        <h4 class="this-bar-item"><i class="fa fa-tags w3-xxxlarge" style="font-size: 30px"></i></h4>
    </div>
    <div class="this-border-bottom btn btn-block pos-btn-menu " onclick="document.getElementById('logout').style
        .display='block'">
        <h4 class="this-bar-item"><i class="fa fa-sign-out w3-xxxlarge " style="font-size: 30px"></i></h4>
    </div>
</div>
<div id="logout" class="this-modal ">
    <div class="this-modal-content this-animate-top this-small" style="width: 350px;">
        <header class="this-container this-center ">

            <h2> Account </h2>
        </header>
        <div class="this-container this-center" style="padding: 0px">
            <i class="fa fa-user-circle-o" style="font-size: 50px"></i>
            <div class="this-container ">
                <h3> Do you want to exit ? </h3>
            </div>
            <div class="this-container this-padding " style="background-color: #343a40!important">
                <div class="this-right">
                    <a href="">
                        <button class="btn btn-danger"> Logout </button>
                    </a>
                </div>
                <div class="this-left">
                    <a href="">
                        <button class="btn "> Close </button>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){});
    function this_open() {
        $('#product').hide();
        $('#mySidebar').css({ 'width': "100%" });
        $('#mySidebar').css({ 'display': "block" });
    }
</script>
<script>
    function w3_open() {
        document.getElementById("product").style.display = "none";
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("product").style.display = "block";
    }
    function open_customer() {
    }
</script>