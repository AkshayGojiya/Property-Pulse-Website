$(document).ready(function(){
    $("#register").click(function(){
        $.ajax({
            type: "POST",
            url: "",
            data: {
                action: 'register', // Indicate the action to perform
                username: $("input[name='name']").val(),
                email: $("input[name='email']").val(),
                password: $("input[name='pass']").val(),
                confpass: $("input[name='confpass']").val(),
                phone: $("input[name='phone']").val(),
                utype: $("input[name='utype']").val()
            },
            success: function(response){
                if(response == "success"){
                    $("#register-page").hide();
                    $("#otp-page").show();
                } else {
                    alert("Registration failed. Please try again.");
                }
            }
        });
    });


    $("#verify").click(function(){
        $.ajax({
            type: "POST",
            url: "", // Leave it empty to send the AJAX request to the same URL
            data: {
                action: 'verify', // Indicate the action to perform
                otp: $("input[name='otp']").val()
            },
            success: function(response){
                if(response == "success"){
                    alert("OTP verified successfully. User registered!");
                } else {
                    alert("OTP verification failed. Please try again.");
                }
            }
        });
    });
});