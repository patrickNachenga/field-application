
function alertResponse(flag, message, divId=null){
    let respDiv = divId ? $(divId) : $("#errorDiv");
    let button = $("#submitButton");

    respDiv.children("span").html(message);
    respDiv.addClass('alert-'+flag);
    respDiv.show('slow');
    setTimeout(()=>{
        respDiv.hide('slow');
        button.removeClass('alert-'+flag);
        button.removeAttr("disabled");
        button.children("i").removeClass("spinner-grow spinner-grow-sm");
    },5000)
}

