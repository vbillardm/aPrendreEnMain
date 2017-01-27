$(document).ready(function() {
    var form = document.getElementsByClassName('sendmail')[0];
    $('#send').on('click', function() {
        var email = form.children[4].value;
        var name = form.children[2].value;
        var sujet = form.children[6].value;
        var content = form.children[7].value;
        $.ajax({
            method: "POST",
            url: "/sendmail",
            data: {
                name: name,
                email: email,
                content: content,
                sujet: sujet
            }
        }).always(function(data) {

        }).done(function(data) {
            $.each(form.children, function(e, y) {
                y.value = "";
            })
            $('.alert-success')[0].style.display = "inline";
        });
    });
});

$(document).ready(function() {
    var form = document.getElementsByClassName('subscribeNewsletter')[0];
    $('#subscribe').on('click', function() {
        var name = form.children[1].value;
        var email = form.children[3].value;
        $.ajax({
            method: "POST",
            url: "/subscribe",
            data: {
                name: name,
                email: email,
            }
        }).always(function(data) {

        }).done(function(data) {
            $.each(form.children, function(e, y) {
                y.value = "";
            })
        });
    });
});
