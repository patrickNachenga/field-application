//Authentication function

function login(form){
    let button = $("#submitButton");
    button.attr("disabled","disabled");
    button.children("i").addClass("spinner-grow spinner-grow-sm");

    let email = $("input[name='email']").val();
    let password = $("input[name='password']").val();
    // console.log(email+"  -  "+password);
    $.ajax({
        url: BASE_URL+"auth-signing.php",
        type: "POST",
        dataType: "JSON",
        data: {
            email:email, password:password
        },
        success: function (response) {
            // console.log("response");
            if(response.code === 200){
                authResponse(response.message,"green");
                setTimeout(()=>{
                    window.location.href = BASE_URL+response.redirect;
                },3000);
            } else{
                authResponse(response.message);
            }
        },
        error: function (errors) {
            // console.log(errors);
            authResponse(errors.message);
        }
    })

    return false;
}

function signup(form){
    let button = $("#submitButton");
    button.attr("disabled","disabled");
    button.children("i").addClass("spinner-grow spinner-grow-sm");

    let firstName = $("input[name='firstName']").val();
    let lastName = $("input[name='lastName']").val();
    let email = $("input[name='emailAddress']").val();
    let password = $("input[name='password']").val();
    let contact = $("input[name='contact']").val();
    let gender = $("select[name='gender']").val();
    let confirmPassword = $("input[name='confirmPassword']").val();

    if(password !== confirmPassword){
        authResponse("password not match");
        return false;
    }

    //console.log(formData);
    $.ajax({
        url: BASE_URL+"auth-signup.php",
        type: "POST",
        dataType: "JSON",
        data: {
            firstName:firstName, lastName:lastName, email:email, gender:gender, contact:contact, password:confirmPassword
        },
        success: function (response) {
            console.log(response);
            if(response.code === 200){
                authResponse(response.message,"green");
                setTimeout(()=>{
                    window.location.href = BASE_URL+"applicant/";
                },3000);
            } else{
                authResponse(response.message);
            }
        },
        error: function (errors) {
            console.log(errors);
            authResponse(errors.message);
        }
    })

    return false;
}

function authResponse(message, color = ''){
    (color === '') ? color = "red": true;
    let respDiv = $("#respDiv");
    let button = $("#submitButton");
    respDiv.html(message);
    respDiv.css({color:color, fontWeight: 300, fontStyle: "italic", textShadow:color })
    respDiv.show('slow');
    setTimeout(()=>{
        respDiv.hide('slow');
        respDiv.html('');
        button.removeAttr("disabled");
        button.children("i").removeClass("spinner-grow spinner-grow-sm");
    },4000)

}
