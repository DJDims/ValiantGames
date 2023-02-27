$(document).ready(function () {
    $('#loginButton').hover(function () {
            $($(this).children()[1]).toggle(200);
        }, function () {
            $($(this).children()[1]).toggle(200);
        }
    );
});