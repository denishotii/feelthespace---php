function sendMail(params){
    var subject1 = "Pershendetje";
    var tempParams = {
        from_name: document.getElementById("name").value,
        from_subject: subject1,
        from_email: document.getElementById("email").value,
        message: document.getElementById("message").value,
        reply_to: document.getElementById("email").value
    };

    emailjs.send('service_9lgeiym', 'template_mp3kr0m',tempParams)
    .then(function(res){
        console.log("succes", res.status);
    })
}