$(function () {
    $('#form1').parsley().on('form:success', function() {
    })
        .on('form:submit', function() {
            return false; // Don't submit form for this demo
        });
});


