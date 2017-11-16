$(document).ready(function () {

    $("#stayintouch form").submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
    
        var mail = $("#mail").val();
        var isValid = true;
        var required = " Champ requis.";
        var mailErreur = " Email incorrecte.";

        if ($("#nom").val().length === 0) {
            isValid = false;
            $("label[for=nom] span").html(required);
        } else {
            $("label[for=nom] span").html("");
        }

        if ($("#message").val().length === 0) {
            isValid = false;
            $("label[for=message] span").html(required);
        } else {
            $("label[for=message] span").html("");
        }
        if (mail.length === 0) {
            isValid = false;
            $("label[for=mail] span").html(required);

        } else {

            if (null === mail.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)) {
                isValid = false;
                $("label[for=mail] span").html(mailErreur);
            } else {
                $("label[for=mail] span").html("");
            }
        }

        if (!isValid) {
            return false;
        }



        $.ajax({
            url: '/projet_stage_landing_page/validation.php', // Le nom du fichier indiqué dans le formulaire
            type: 'POST', // La méthode indiquée dans le formulaire (get ou post)
            data: $("#contact-form").serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
            success: function (response) { // Je récupère la réponse du fichier PHP
                console.log(response); // J'affiche cette réponse
                
                var rep = jQuery.parseJSON(response);
                
                if(rep.success){
                    // afficher une notification 
                }else{
                    // afficher message d'erreur
                }
                
                console.log();
                
            }
        });




    });
});