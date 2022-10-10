$(document).ready(function(){
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
});

function OnFuetures() {
    var confirmBox = $("#features");
    confirmBox.fadeIn("slow");
    confirmBox.click(function () {
        confirmBox.fadeOut("slow");
    });
}

function OnUnduh() {
    window.alert("Terima kasih sudah mengunduh aplikasi RACHIC.");
}