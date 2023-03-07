$(document).ready(() => {
    setTimeout(() => {
        var myAlert = $('.alert');
        var bsAlert = new bootstrap.Alert(myAlert)
        bsAlert.close()
    }, 3000);
});