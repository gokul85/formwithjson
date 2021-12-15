$('#submit').click(function () {
    var Name = $('#Name').val();
    var Phone = $('#Phone').val();
    var Email = $('#Email').val();
    $.ajax({
        type: "POST",
        url: "http://fileserver.freecluster.eu/Gokul/submit.php",
        data: {
            name: Name,
            phone: Phone,
            email : Email
        },
        success: function (response) {
            console.log("Sucess");
            location.reload(true);
        }
    });
});
