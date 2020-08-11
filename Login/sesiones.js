$(document).ready(function() {
    $("#admin").submit(function(e) {
        
        console.log("Hola mundo");
        const postData = {
            usuario : $("#Usuario").val(),
            password : $("#Password").val()
        };
        $.post("sesion-admin.php", postData, function(r) {
            
            if (r == "1") {
                window.location = "../CoordinadorInsT/index.php";
            }
            else{
                console.log("No jaló");
            }
        })
    })
});