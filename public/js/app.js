$(document).ready(function () {
    $("#login_form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $("#login_form").prop('action'),
            data: $("#login_form").serialize(),
            success: data => { console.log(data); },
            error: err => console.log(err)
        });
    });
});