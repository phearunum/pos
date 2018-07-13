
var getProductByCat="main/getProductbyCat";


function proListbyCat(id) {
    $.ajax({
        type: "get",
        url: '/'+getProductByCat+"?id="+id,
        contentType: "application/json",
        dataType: "json",
        success: function(r){
            $('.this-animate').remove();
            var img="";
            $('#prolist').empty();
            $.each(r,function (i,e) {
                //console.log(e);
                if(e.t_proImg!==""){
                    img=e.t_proImg;
                }else{
                    img="https://www.mcdonalds.com/content/dam/usa/documents/mcdelivery/mcdelivery_new11.jpg";
                }
                $('#prolist').append('' +

                    '<div onclick="Order('+e.t_proID+',inv)">'+
                    '<div class="col-xs-4 col-md-3 col-sm-2 this-padding this-text-black this-center">'+
                    '<div class="this-border">'+
                    '<img src="'+img+'" class="img-responsive"/>'+
                    '</div>'+
                    '<p>'+e.t_proName+'</p>'+
                    '</div>'+
                    '</div>');
                    })
                  w3_close();
                  $('#showAll').hide();
        },
        error:function (err) {
            //alert(JSON.stringify(err));
            console.log(err);
        }
    });

}