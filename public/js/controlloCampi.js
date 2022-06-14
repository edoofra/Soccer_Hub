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
    }else if(password.trim() === ""){
        password_msg.html("The password field must not be empty");
        password.focus();
        return false;
    }else{
        var form = document.getElementById("login-form");
        form.submit();
    }
}

function controlloCampiRegistrazione() {

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var passwordConfirm = document.getElementById("passwordConfirm").value;
    var mail = document.getElementById("mail").value;
    if (username.trim() === "" || password.trim() === "" || passwordConfirm.trim() === "" || mail.trim() === "") {
        alert("I campi non possono essere vuoti");
        return false;
    }
    else{
        var form = document.getElementById("registration-form");
        form.submit();
    }
}