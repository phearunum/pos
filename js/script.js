
var getMenuList ="http://inyourheart.beta.com/Api/Api/getMenu";

    $.post(getMenuList, function( data ) {
        $.each(data.body.data.menu,function (i,item) {
            $.each(item.list,function (i,e){
                var img;
                if(e.img==""){
                    img=e.img;
                }else{
                    img="/images/defult.jpg";
                }
                $('#prolist').append(''+
                    '<div class="col-xs-4 col-md-3 col-sm-3 this-padding this-text-black this-center " ondragstart="dragStart(event)" draggable="true" id="dragtarget">' +
                    '<img src="'+img+' "class="img-responsive "/>'+
                    '<p>'+e.full_name.substr(0,30)+'</p>'+
                    '</div>'

                );
            });
        })
    },'json');

  function draporder() {
      alert('ok');
  }
    function dragStart(event) {
        event.dataTransfer.setData("Text", event.target.id);
    }

    function dragEnter(event) {
        if ( event.target.className == "droptarget" ) {
            document.getElementById("demo").innerHTML = "Entered the dropzone";
            event.target.style.border = "3px dotted red";
        }
    }

    function dragLeave(event) {
        if ( event.target.className == "droptarget" ) {
            document.getElementById("demo").innerHTML = "Left the dropzone";
            event.target.style.border = "";
        }
    }

    function allowDrop(event) {
        event.preventDefault();
    }

    function drop(event) {
        event.preventDefault();
        var data = event.dataTransfer.getData("Text");
        event.target.appendChild(document.getElementById(data));
    }