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

    function controlloCampiLogin(username, password){

        var username = $("username");
        var password = $("password");
        if (nome.trim() === "" || cognome.trim() === "") {
            alert("I campi username e password non possono essere vuoti");
            //recupera campo invalid title
            var title = document.getElementById("invalidTitle");
            title.innerHTML("I campi username e password non possono essere vuoti");
        }
        else {
            $('form[id=formLogin]').submit();
        }
    }
    

}