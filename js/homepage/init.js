// Show login modal
document.getElementById("loginBtn").addEventListener('click', function() {
    $("#loginModal").modal("show");
});
// Show registermodal
document.getElementById("registerBtn").addEventListener('click', function() {
    $("#registerModal").modal("show");
});
// Show registermodal
document.getElementById("joinBtn").addEventListener('click', function() {
    $("#registerModal").modal("show");
});
// Show login modal
document.getElementById("alreadyLogIn").addEventListener('click', function() {
    $("#registerModal").modal("hide");
    $("#loginModal").modal("show");
});
// Show registermodal
document.getElementById("noAccount").addEventListener('click', function() {
    $("#loginModal").modal("hide");
    $("#registerModal").modal("show");
});

$('#date').calendar();