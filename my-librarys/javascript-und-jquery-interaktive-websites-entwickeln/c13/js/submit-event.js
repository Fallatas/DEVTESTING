(function () {
    var form = document.getElementById('login');

    addEvant(form,'login',function () {
        e.preventDefault();
        var elemets = this.elements;
        var username = elements.username.value;
        var msg = 'Willkommen ' + username;
        document.getElementById('main').textContent = smg;
        }
    )
});
