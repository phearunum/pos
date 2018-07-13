var AdminLogin = '/admin/dologin';
var AdminDeleteProduct = '/admin/delPro';
var AdminUpdateProduct = '/admin/updateProduct';
var AdminAddProduct = '/admin/InsertProduct';
var AdminDeleteCategory='/admin/delcategory';
var AdminUpdateCategory='/admin/updateCategory';
var AdminSaveCategory='/admin/add_cat';
var AdmindeleteUser='/admin/del_user';
var AdmindUpdateUser='/admin/upateUser';
var AdminAddUser='/admin/adduser';
var check = 0;
$(document).ready(function() {
    $('#frmLogin').submit(function (event) { //Trigger on form submit
        $('#acc + .throw_error').empty(); //Clear the messages first
        $('#pwd + .throw_error').empty();
        var postForm = { //Fetch form data
            'acc': $('input[name=acc]').val(),
            'pwd': $('input[name=pwd]').val()
        };
        $.ajax({
            type: 'get',
            url: AdminLogin,
            data: postForm,
            dataType: 'json',
            success: function (data) {
                $.each(data, function (index, element) {
                    check = element.t_Remark;
                    if (check == 1) {
                        location.href = '/admin';
                    }
                });
            },
            error: function (data) {
                console.log(data);
            }
        });
        event.preventDefault();
    });
    $('#frmSaveProduct').submit(function (e) { //Trigger on form submit
        e.preventDefault();
        var postForm = { //Fetch form data
            't_proID': $('input[name=t_proID]').val(),
            't_catID': $('select[name=t_catID]').val(),
            't_proBarcode': $('input[name=t_proBarcode]').val(),
            't_proName': $('input[name=t_proName]').val(),
            't_proQTY': $('input[name=t_proQTY]').val(),
            't_proQtyAlert': $('input[name=t_proQtyAlert]').val(),
            't_proCost': $('input[name=t_proCost]').val(),
            't_proTax': $('select[name=t_proTax]').val(),
            't_proPrice': $('input[name=t_proPrice]').val(),
            //'t_proImg': $('input[name=t_proImg]').val(),
            't_proDes': $('textarea[name=t_proDes]').val(),
        };
        $.ajax({
            type: 'get',
            url: AdminAddProduct,
            data      : postForm,
            dataType: "json",
            contentType: "application/json",
            success: function (data) {
                $.each(data, function (index, element) {
                    check = element.t_proID;
                    if (check !=="") {
                        console.log(data);
                        $( "#myModal" ).modal('show');
                        $("#frmSaveProduct")[0].reset();
                    }
                });
            },
            error: function (data) {console.log(data);}
        });
    });

    $('#frmUpdateProduct').submit(function (e) {
        e.preventDefault();
        var postForm = { //Fetch form data
            't_proID': $('input[name=t_proID]').val(),
            't_catID': $('select[name=t_catID]').val(),
            't_proBarcode': $('input[name=t_proBarcode]').val(),
            't_proName': $('input[name=t_proName]').val(),
            't_proQTY': $('input[name=t_proQTY]').val(),
            't_proQtyAlert': $('input[name=t_proQtyAlert]').val(),
            't_proCost': $('input[name=t_proCost]').val(),
            't_proTax': $('select[name=t_proTax]').val(),
            't_proPrice': $('input[name=t_proPrice]').val(),
            //'t_proImg': $('input[name=t_proImg]').val(),
            't_proDes': $('textarea[name=t_proDes]').val(),
        };
        console.log(postForm);
        $.ajax({
            type: 'get',
            url: AdminUpdateProduct,
            data      : postForm,
            dataType: "json",
            contentType: "application/json",
            success: function (data) {
                $.each(data, function (index, element) {
                    check = element.t_proID;
                    if (check !=="") {
                        $("#frmUpdateProduct")[0].reset();
                        $( "#myModal" ).modal('show');
                        console.log(data);
                    }
                });
            },
            error: function (data) {console.log(data);}
        });
    });

    $('#frmUpdateCategory').submit(function (e) {
        e.preventDefault();
        var postForm = { //Fetch form data
            't_catID': $('input[name=t_catID]').val(),
            't_catName': $('input[name=t_catName]').val(),
        };
        console.log(postForm);
        $.ajax({
            type: 'get',
            url: AdminUpdateCategory,
            data      : postForm,
            dataType: "json",
            contentType: "application/json",
            success: function (data) {
                $("#frmUpdateCategory")[0].reset();
            },
            error: function (data) {console.log(data);}
        });
    });

    $('#frmsaveCategory').submit(function (e) {
        e.preventDefault();
        var postForm = {
            't_catName': $('input[name=t_catName]').val(),
        };
        console.log(postForm);
        $.ajax({
            type: 'get',
            url: AdminSaveCategory,
            data      : postForm,
            dataType: "json",
            contentType: "application/json",
            success: function (data) {
                $("#frmsaveCategory")[0].reset();
            },
            error: function (data) {console.log(data);}
        });
    });

    $('#frmaddUser').submit(function (e) {
        e.preventDefault();
        var postForm = {
            't_Username': $('input[name=t_Username]').val(),
            't_Accountname': $('input[name=t_Accountname]').val(),
            't_Sex': $('select[name=t_Sex]').val(),
            'u_date': $('input[name=u_date]').val(),
            'u_month': $('input[name=u_month]').val(),
            'u_year': $('input[name=u_year]').val(),
            't_UerID': $('input[name=t_UerID]').val(),
        };
        console.log(postForm);
        $.ajax({
            type: 'get',
            url: AdminAddUser,
            data      : postForm,
            dataType: "json",
            contentType: "application/json",
            success: function (data) {
                $('#mySmallModalupdae').modal('show');
                //$("#frmUpdateUser")[0].reset();
            },
            error: function (data) {console.log(data);}
        });
    });


    $('#frmUpdateUser').submit(function (e) {
        e.preventDefault();
        var postForm = { //Fetch form data
            't_Username': $('input[name=t_Username]').val(),
            't_Accountname': $('input[name=t_Accountname]').val(),
            't_Sex': $('select[name=t_Sex]').val(),
            'u_date': $('input[name=u_date]').val(),
            'u_month': $('input[name=u_month]').val(),
            'u_year': $('input[name=u_year]').val(),
            't_UerID': $('input[name=t_UerID]').val(),
        };
        console.log(postForm);
        $.ajax({
            type: 'get',
            url: AdmindUpdateUser,
            data      : postForm,
            dataType: "json",
            contentType: "application/json",
            success: function (data) {
                $('#mySmallModalupdae').modal('show');
                //$("#frmUpdateUser")[0].reset();
            },
            error: function (data) {console.log(data);}
        });
    });



});
function delproduct(id) {
    $.ajax({
        type: 'get',
        url: AdminDeleteProduct + '/?proId=' + id,
        success: function (data) {
            $('#del' + id).modal('hide');
            $('#row' + id).remove();
        },
        error: function (data) {
            console.log(data);
        }
    });
}
function delcategory(id) {
    $.ajax({
        type: 'get',
        url: AdminDeleteCategory + '/?catId=' + id,
        success: function (data) {
            $('#del' + id).modal('hide');
            $('#row' + id).remove();
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function update(id,name) {

    var postForm = { //Fetch form data
        't_catID': id,
        't_catName': name,
    };
    console.log(postForm);
    $.ajax({
        type: 'get',
        url: AdminUpdateCategory,
        data      : postForm,
        dataType: "json",
        contentType: "application/json",
          success: function (data) {

        },
        error: function (data) {console.log(data);}
    });
}

function deluser(id) {
    $.ajax({
        type: 'get',
        url: AdmindeleteUser + '/?userId=' + id,
        success: function (data) {
            $('#del' + id).modal('hide');
            $('#row' + id).remove();
        },
        error: function (data) {
            console.log(data);
        }
    });
}
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imgInp").change(function() {
    readURL(this);
});














