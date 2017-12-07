<script>
    var passwort = prompt('Bitte geben Sie ihr Passwort ein:');

    if(passwort == 1234){
        window.alert('Das Passwort ist richtig');
        alert('Willkommen!')
    }else{
       alert('Das Passwort ist falsch!');
       var passwort = prompt('Bitte geben Sie ihr Passwort ein:');
        alert('Willkommen!')
    }

    var antwort = confirm('Wollen Sie sich registrieren?')

    if (antwort == true){
        window.alert('Willkommen bei der Registrierung')
    }else{
        alert('Bitte verlassen Sie die Seite!')
    }
</script>
