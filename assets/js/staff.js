function addDepartment(form){

    let button = $("#submitButton");
    button.attr("disabled","disabled");
    button.children("i").addClass("spinner-grow spinner-grow-sm");

    let name = $("input[name='name']").val();
    let code = $("input[name='code']").val();
    let hod = $("select[name='hod']").val();
    let description = $("textarea[name='description']").val();

    //console.log(formData);
    $.ajax({
        url: BASE_URL+"staff/bk_add_department.php",
        type: "POST",
        dataType: "JSON",
        data: {
            name:name, code:code, hod:hod, description:description
        },
        success: function (response) {
             console.log(response);
            if(response.code === 200){
                alertResponse('success',response.message);
            } else{
                alertResponse('danger',response.message);
            }
        },
        error: function (errors) {
             console.log(errors.errors);
            alertResponse('warning',errors.message);
        }
    })

    return false;
}