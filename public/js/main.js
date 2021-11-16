$(document).ready(function(){
    //ajax
    $('.user-submit').click(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/Usermanagement/public/user/create",
            type: 'post',
            data: {
                'name': $(".user-name").val(),
                'email': $(".user-email").val(),
                'password': $(".user-password").val()
            },
            async: true,
            success: function(result) {
                swal({
                    type: 'success',
                    title: 'User created successfully',
                    showConfirmButton: true,
                  }).then(() => {
                    location.replace('/Usermanagement/public/');
                  });
            },
            error: function(response) { 
                var errors = response.responseJSON.errors;
                console.log(errors);
               
                if(typeof(errors.name) != "undefined") {
                    $(".user-name").addClass('is-invalid');
                    $('#validationServer01Feedback').html(errors.name);
                } else {
                    $('.user-name').removeClass('is-invalid');
                }
                if(errors.email) {
                    $(".user-email").addClass('is-invalid');
                    $('#validationServer02Feedback').html(errors.email);
                } else {
                    $('.user-email').removeClass('is-invalid');
                }
                if(errors.password) {
                    $('#validationServer03Feedback').html('');
                    $(".user-password").addClass('is-invalid');
                    errors.password.forEach(function(item) {
                       $('#validationServer03Feedback').append(item+'<br/>');
                    });
                } else {
                    $('.user-password').removeClass('is-invalid');
                }
                console.log(errors.password);
            }       
        });
        return false;
    }); 
});