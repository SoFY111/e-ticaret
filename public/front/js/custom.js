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
});
