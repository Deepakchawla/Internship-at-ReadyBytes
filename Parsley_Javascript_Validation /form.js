$(function () {
    $('#form1').parsley().on('form:success', function() {
        alert("Your Account has been created");
        window.location.href="form1.html";
    })
        .on('form:submit', function() {
            return false; // Don't submit form for this demo
        });
});


