//funzione che controlla se il nome e il cognome sono già presenti nel database
function controlloNomeCognome(nome, cognome) {
    //recupero il valore dei campi nome e cognome
    var nome = document.getElementById("nome").value;
    var cognome = document.getElementById("cognome").value;
    //controllo che i campi non siano vuoti
    if (nome.trim() == "" || cognome.trim() == "") {
        alert("I campi nome e cognome non possono essere vuoti");
        //recupera campo invalid title
        var title = document.getElementById("invalidTitle");
        title.innerHTML("I campi nome e cognome non possono essere vuoti");
    }
    else {
        $.ajax({
            type: 'GET',
            url: 'ajaxControlNomeCognome',
            data: {nomeCercato:nome, cognomeCercato: cognome},
            success: function(data) {
                if(data == "success") {
                    $('form[]').submit();
                }
                else {
                    alert("Nome e cognome già presenti nel database");
                    //recupera campo invalid title
                    var title = document.getElementById("invalidTitle");
                    title.innerHTML("Nome e cognome già presenti nel database");
                }
                
            }
        }); 
    }
}

function controlloCampiLogin() {

    username = $("#username");
    username_msg = $("#invalid-username");
    
    password = $("#password");
    password_msg = $("#invalid-password");

    if (username.val().trim() === "") {
        username_msg.html("The username field must not be empty");
        username.focus();
        return false;
    }else if(password.val().trim() === ""){
        password_msg.html("The password field must not be empty");
        password.focus();
        return false;
    }else{
        var form = document.getElementById("login-form");
        form.submit();
    }
}

function controlloCampiAddGiocatore() {

    nome = $("#nome");
    cognome = $("#cognome");
    eta = $("#età");
    squadra = $("#squadra");
    ruolo = $("#ruolo");
    

    if (nome.val().trim() === "") {
        alert("The username field must not be empty");
        nome.focus();
        return false;
    }else if(cognome.val().trim() === ""){
        alert("The password field must not be empty");
        cognome.focus();
        return false;
    }else if(eta.val().trim() === ""){
        alert("The età field must not be empty");
        eta.focus();
        return false;
    }else if(squadra.val().trim() === ""){
        alert("The squadra field must not be empty");
        squadra.focus();
        return false;
    }else if(ruolo.val().trim() === ""){
        alert("The password field must not be empty");
        ruolo.focus();
        return false;

    }else{
        var form = document.getElementById("add-form");
        form.submit();
    }
}

function controlloCampiRegistrazione() {

    username = $("#username");
    username_msg = $("#invalid-username");
    
    password = $("#password");
    password_msg = $("#invalid-password");

    password_confirm = $("#passwordConfirm");
    password_confirm_msg = $("#invalid-passwordConfirm");
    
    mail = $("#mail");
    mail_msg = $("#invalid-mail");

    error = false;

    if (username.val().trim() === "") {
        username_msg.html("The username field must not be empty");
        username.focus();
        error = true;
    }else if(password.val().trim() === ""){
        password_msg.html("The password field must not be empty");
        password.focus();
        error = true;
    }else if(password_confirm.val().trim() === ""){
        password_confirm_msg.html("The password confirm field must not be empty");
        password_confirm.focus();
        error = true;
    }else if(mail.val().trim() === ""){
        mail_msg.html("The mail field must not be empty");
        mail.focus();
        error = true;
    }else if(password.val().trim() !== password_confirm.val().trim()){ //controllo che le due password siano uguali
        password_msg.html("The password field and the password confirm field must be equal");
        password.focus();
        error = true;
    }

    if(!error){
        $.ajax({

            type: 'GET',

            url: '/ajaxRegistration',

            data: {username: username.val().trim()},

            success: function (data) {

                if (data.found)
                {
                    error = true;
                    username_msg.html("Username already exists in the database");
                } else {
                    var form = document.getElementById("registration-form");
                    form.submit();
                }
            }

        });
    }
}