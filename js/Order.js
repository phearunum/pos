

var OrderProduct='Main/orderProduct';
var createCustomer='Order/createUser';
var deleteOrder="Order/delOrder";

$(document).ready(function() {
    $('#frmcreateUser').submit(function (event) {
        $.ajax({
            type: 'post',
            url: createCustomer,
            data: $("#frmcreateUser").serialize(),
            dataType: 'json',
            success: function (data) {
               alert(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
        event.preventDefault();
    });
});
function Order(id,inv) {
    $.ajax({
        type: "get",
        url: '/'+OrderProduct+"?id="+id+'&inv='+inv,
        contentType: "application/json",
        dataType: "json",
        success: function(r){
            var img="";
            var txt="hello";
            $('#showMian').remove();
            $('.this-animate').remove();
            $('#list').empty();
            $.each(r,function (i,e) {
                //console.log(e);
                if(e.t_proImg!=""){
                    img=""+e.t_proImg;
                }else{
                    img="https://www.mcdonalds.com/content/dam/usa/documents/mcdelivery/mcdelivery_new11.jpg";
                }
                $('#list').append('' +

                    '<tr style="font-weight: bold" id="rowOrder'+e.t_proID+'" >\n' +
                    ' <td>'+e.t_proName+'</td>\n' +
                    ' <td style="width: 50px">1</td>\n' +
                    ' <td  style="width: 40px"><i class="fa fa-trash this-text-red"  style="font-size: 20px;cursor:' +
                    ' pointer" onclick="delOrdre('+e.t_proID+')"></i>' +
                    '</td>\n' +
                    ' </tr>'

                );
            })
        },
        error:function (err) {
            //alert(JSON.stringify(err));
            console.log(err);
        }
    });

}

function delOrdre(id) {

        $.ajax({
            type: "get",
            url: '/'+deleteOrder+"?delId="+id,
            contentType: "application/json",
            dataType: "json",
            success: function(r){
                $("#rowOrder"+id).remove();
            },
            error:function (err) {
                //alert(JSON.stringify(err));
                console.log(err);
            }
        });
    $("#rowOrder"+id).remove();
}


$.post( "http://inyourheart.beta.com/Api/Api/getMenu", function( data ) {
    console.log(data);
},'json');

















