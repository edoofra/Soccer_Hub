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

function controlloCampiEditGiocatore() {

    partite = $("#partite");
    gol = $("#gol");
    assist = $("#assist");
    squadra= $("#squadra");
    ruolo = $("#ruolo");
    cl = $("#cl");
    tiriTentati = $("#tiri_tentati");
    tiriPorta = $("#tiriPorta");
    passaggiTentati = $("#passaggi_tentati");
    passaggiCompletati = $("#passaggi_completati");
    contrastiTentati = $("#contrasti_tentati");
    contrastiVinti = $("#contrasti_vinti");
    ammonizioni = $("#ammonizioni");
    espulsioni = $("#espulsioni");
    stipendio = $("#stipendio");
    valoreMercato = $("#valore_mercato");
    scadenza = $("#scadenza");
    
    

    if (partite.val().trim() === "") {
        alert("The partite field must not be empty");
        partite.focus();
        return false;
    }else if(gol.val().trim() === ""){
        alert("The gol field must not be empty");
        gol.focus();
        return false;
    }else if(assist.val().trim() === ""){
        alert("The assist field must not be empty");
        assist.focus();
        return false;
    }else if(squadra.val().trim() === ""){
        alert("The squadra field must not be empty");
        squadra.focus();
        return false;
    }else if(partite.val().trim() === ""){
        alert("The partite field must not be empty");
        partite.focus();
        return false;
    }else if(ruolo.val().trim() === ""){
        alert("The password field must not be empty");
        ruolo.focus();
        return false;
    }else if(gol.val().trim() === ""){
        alert("The gol field must not be empty");
        gol.focus();
        return false;
    }else if(assist.val().trim() === ""){
        alert("The assist field must not be empty");
        assist.focus();
        return false;
    }else if(cl.val().trim() === ""){
        alert("The clean sheet field must not be empty");
        cl.focus();
        return false;
    }else if(tiriTentati.val().trim() === ""){
        alert("The tiri tentati field must not be empty");
        tiriTentati.focus();
        return false;
    }else if(tiriPorta.val().trim() === ""){
        alert("The tiri in porta field must not be empty");
        tiriPorta.focus();
        return false;
    }else if(passaggiTentati.val().trim() === ""){
        alert("The passaggi tentati field must not be empty");
        passaggiTentati.focus();
        return false;
    }else if(passaggiCompletati.val().trim() === ""){
        alert("The passaggi completati field must not be empty");
        passaggiCompletati.focus();
        return false;
    }else if(contrastiTentati.val().trim() === ""){
        alert("The contrasti tentati field must not be empty");
        contrastiTentati.focus();
        return false;
    }else if(contrastiVinti.val().trim() === ""){
        alert("The contrasti vinti field must not be empty");
        contrastiVinti.focus();
        return false;
    }else if(stipendio.val().trim() === ""){
        alert("The stipendio field must not be empty");
        stipendio.focus();
        return false;
    }else if(ammonizioni.val().trim() === ""){
        alert("The ammonizioni field must not be empty");
        ammonizioni.focus();
        return false;
    }else if(espulsioni.val().trim() === ""){
        alert("The espulsioni field must not be empty");
        espulsioni.focus();
        return false;
    }else if(valoreMercato.val().trim() === ""){
        alert("The valore mercato field must not be empty");
        valoreMercato.focus();
        return false;
    }else if(scadenza.val().trim() === ""){
        alert("The scadenza contratto field must not be empty");
        scadenza.focus();
        return false;


    }else{
        var form = document.getElementById("edit-form");
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