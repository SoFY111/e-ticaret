$( document ).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });

    $('#loginForm').submit(function (e){
        e.preventDefault();
        const form = $(this);
        const actionUrl = form.attr('action');
        form.append()
        $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    console.log(data); // show response from the php script.
                },
                error: function (data){
                    const responseText = JSON.parse(data.responseText);
                    $("#loginFormErrorUL").empty();
                    $("#loginFormErrorUL").append('<li>'+responseText.message+'</li>');
                    $('#loginFormErrorDiv').fadeIn()
                    setTimeout(function(){
                        $('#loginFormErrorDiv').fadeOut()
                    }, 1750);
                }
            }
        );
    });

    $('#registerForm').submit(function (e){
        e.preventDefault();
        const form = $(this);
        const actionUrl = form.attr('action');
        form.append()
        $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    console.log(data); // show response from the php script.
                },
                error: function (data){
                    const responseText = JSON.parse(data.responseText);
                    console.log(responseText);
                    console.log(responseText?.errors?.email)
                    console.log(responseText?.errors?.password)
                    console.log(responseText?.errors?.password.length)
                    $("#registerFormErrorUL").empty();

                    if(responseText?.errors && responseText?.errors?.password.length > 1){
                        if (responseText?.errors?.password){
                            if (responseText?.errors?.password.length > 1){
                                for (let i = 0; i < responseText?.errors?.password.length; i++){
                                    $("#registerFormErrorUL").append('<li>'+responseText?.errors?.password[i]+'</li>');
                                }
                            }
                        }
                        if(responseText?.errors?.email){
                            $("#registerFormErrorUL").append('<li>'+responseText?.errors?.email+'</li>');
                        }
                    }
                    else $("#registerFormErrorUL").append('<li>'+responseText.message+'</li>');


                    $('#registerFormErrorDiv').fadeIn()
                }
            }
        );
    });
});
